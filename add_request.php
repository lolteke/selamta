<?php
require 'config.php';

header('Content-Type: application/json; charset=UTF-8');

function requestText($value)
{
    $value = trim((string) $value);
    $value = preg_replace('/[\r\n\t]+/', ' ', $value);
    return trim(strip_tags($value));
}

function requestResponse($success, $message, $id = null)
{
    $response = ['success' => $success ? 1 : 0, 'message' => $message];
    if ($id !== null) {
        $response['id'] = (int) $id;
    }
    echo json_encode($response);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    requestResponse(false, 'Only POST requests are accepted.');
}

$fullName = requestText($_POST['full_name'] ?? '');
$phone = requestText($_POST['phone'] ?? '');
$email = requestText($_POST['email'] ?? '');
$service = requestText($_POST['service'] ?? '');
$pickupLocation = requestText($_POST['pickup_location'] ?? '');
$dropoffLocation = requestText($_POST['dropoff_location'] ?? '');
$pickupDate = requestText($_POST['pickup_date'] ?? '');
$message = requestText($_POST['message'] ?? '');

$allowedServices = [
    'Medical Appointment',
    'Dialysis Transportation',
    'Therapy & Rehabilitation',
    'Hospital & Clinic Transportation',
    'Hospital Discharge & Return',
    'Scheduled & Recurring Trips',
    'School Transportation',
    'Social Events Transportation',
    'Workplaces Transportation',
];

if ($fullName === '' || $phone === '' || $email === '' || $service === '' ||
    $pickupLocation === '' || $dropoffLocation === '' || $pickupDate === '') {
    requestResponse(false, 'Please complete all required fields.');
}
if (!preg_match('/^[0-9+()\-\s]{7,20}$/', $phone)) {
    requestResponse(false, 'Please provide a valid phone number.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    requestResponse(false, 'Please provide a valid email address.');
}
if (!in_array($service, $allowedServices, true)) {
    requestResponse(false, 'Please select a valid service.');
}
$date = DateTime::createFromFormat('Y-m-d', $pickupDate);
if (!$date || $date->format('Y-m-d') !== $pickupDate) {
    requestResponse(false, 'Please provide a valid pickup date.');
}

$subject = 'New transportation request from ' . $fullName;
$body = "Full Name: {$fullName}\n"
    . "Phone Number: {$phone}\n"
    . "Email Address: {$email}\n"
    . "Service Required: {$service}\n"
    . "Pickup Location: {$pickupLocation}\n"
    . "Drop-off Location: {$dropoffLocation}\n"
    . "Preferred Pickup Date: {$pickupDate}\n"
    . "Special Requirements: " . ($message !== '' ? $message : 'None') . "\n";
$headers = "From: Selamta Transport LLC <selamtatransport@gmail.com>\r\n"
    . "Reply-To: {$email}\r\n"
    . "MIME-Version: 1.0\r\n"
    . "Content-Type: text/plain; charset=UTF-8\r\n"
    . "X-Mailer: PHP/" . phpversion();

try {
    $stmt = $db->prepare(
        'INSERT INTO transport_requests
        (full_name, phone, email, service, pickup_location, dropoff_location, pickup_date, message)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
    );
    $stmt->execute([
        $fullName, $phone, $email, $service, $pickupLocation,
        $dropoffLocation, $pickupDate, $message !== '' ? $message : null,
    ]);
    $requestId = $db->lastInsertId();

    if (!mail('selamtatransport@gmail.com', $subject, $body, $headers)) {
        requestResponse(false, 'Your request could not be emailed. Please call +1 913 568 0962.');
    }

    requestResponse(true, 'Thank you. Your request has been received.', $requestId);
} catch (PDOException $exception) {
    error_log('Transportation request failed: ' . $exception->getMessage());
    requestResponse(false, 'Unable to save your request right now. Please try again or call +1 913 568 0962.');
}
