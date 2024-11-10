<?php
// db_config.php

$servername = "localhost";
$username = "root";
$password = "";  // Default password for XAMPP, change if configured differently
$dbname = "ecopark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
