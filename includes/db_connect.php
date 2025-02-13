<?php
$servername = "localhost";  // Change to your database server if needed
$username = "root";         // Your database username
$password = "";             // Your database password
$dbname = "sphatik_db";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
