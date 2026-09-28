CREATE TABLE `transport_requests` (
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `full_name` VARCHAR(150) NOT NULL,
    `phone` VARCHAR(30) NOT NULL,
    `email` VARCHAR(254) NOT NULL,
    `service` VARCHAR(100) NOT NULL,
    `pickup_location` VARCHAR(255) NOT NULL,
    `dropoff_location` VARCHAR(255) NOT NULL,
    `pickup_date` DATE NOT NULL,
    `message` TEXT NULL,
    `status` ENUM('new', 'contacted', 'scheduled', 'completed', 'cancelled') NOT NULL DEFAULT 'new',
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `idx_transport_requests_status` (`status`),
    KEY `idx_transport_requests_pickup_date` (`pickup_date`),
    KEY `idx_transport_requests_created_at` (`created_at`)
) ENGINE=InnoDB
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;
