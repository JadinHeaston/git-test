<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "SuperSecretPassword123!"; // This is a hardcoded password

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
