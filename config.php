<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Change if needed
$password = ""; // Change if needed
$dbname = "fitness_tracker"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
