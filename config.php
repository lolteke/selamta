<?php  
	$username = "root"; 
    $password = ""; 
    $host = "localhost"; 
    $dbname = "tanaexpr_express_dev";
	
	$page_size = 10;
    $app_version = array('versionName' => '1.0', 'versionCode' => 1, 'severity' => 1, 'message' => 'Here is version message!');
    //$app_version = array('name' => '1.2', 'severity' => 1, 'message' => 'Here is version message!');
    //$app_version = array('1.0' => array('severity' => 1, 'message' => 'Ethio Shop gets better! New version is available on Google play store. Update it?'));
	
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'); 
	
    try 
    { 
        $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8mb4", $username, $password, $options); 
	} 
    catch(PDOException $ex) 
    { 
        die("Failed to connect to the database: " . $ex->getMessage()); 
	} 
	
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
	
    if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) 
    { 
        function undo_magic_quotes_gpc(&$array) 
        { 
            foreach($array as &$value) 
            { 
                if(is_array($value)) 
                { 
                    undo_magic_quotes_gpc($value); 
				} 
                else 
                { 
                    $value = stripslashes($value); 
				} 
			} 
		} 
		
        undo_magic_quotes_gpc($_POST); 
        undo_magic_quotes_gpc($_GET); 
        undo_magic_quotes_gpc($_COOKIE); 
	} 
	
    header('Content-Type: text/html; charset=utf-8'); 

    // Prevent PHP garbage collection from wiping sessions overnight
    ini_set('session.gc_maxlifetime', 86400 * 365); // 1 year
    ini_set('session.cookie_lifetime', 86400 * 365); // 1 year
	
    session_start();

    function getUserInfo() {
        $data = array();
        if (isset($_SESSION['user_info_authTanaExpress'])) {
            $ss = $_SESSION['user_info_authTanaExpress'];
            $data['id'] = $ss['id'];
            $data['name'] = $ss['name'];
            $data['role'] = $ss['role'];
            $data['username'] = $ss['username'];
        }
		return $data;
	}
	
?>