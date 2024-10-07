<?php
// Database connection settings
$host = 'localhost'; 
$port = 3307; 
$db_name = 'course_db'; 
$user_name = 'root'; 
$user_password = ''; 

$dsn = "mysql:host=$host;port=$port;dbname=$db_name";

try {
    // Create a new PDO instance
    $conn = new PDO($dsn, $user_name, $user_password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error without displaying any message
    die();
}

// Function to generate a unique ID
function unique_id() {
    $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $rand = array();
    $length = strlen($str) - 1;
    for ($i = 0; $i < 20; $i++) {
        $n = mt_rand(0, $length);
        $rand[] = $str[$n];
    }
    return implode($rand);
}
?>
