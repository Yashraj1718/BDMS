<?php
$servername = "127.0.0.1"; // Use IP instead of "localhost"
$username = "root";
$password = ""; // Keep empty since no password is set
$database = "blood_donation_db";
$port = 3307; // Use the correct port from config.inc.php

$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("❌ Database Connection Failed: " . $conn->connect_error);
}
?>
