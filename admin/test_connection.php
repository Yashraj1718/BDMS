<?php
include __DIR__ . '/config.php'; // Correct file path

if ($conn->connect_error) {
    die("❌ Database Connection Failed: " . $conn->connect_error);
} else {
    echo "✅ Database Connection Successful!";
}
?>
