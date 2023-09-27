<?php
// Database configuration
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'NursingDB';

// Create a database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check for connection errors
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>

