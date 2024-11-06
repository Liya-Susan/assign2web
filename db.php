<?php
// db.php - Database connection file

$host = 'localhost';    // Database host (usually localhost)
$user = 'root';         // Database username
$pass = '';             // Database password (empty in most local setups)
$dbname = 'mywebsite';  // Your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
