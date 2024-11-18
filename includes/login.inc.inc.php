<?php
// Database credentials
$servername = "sql312.infinityfree.com"; //Host name
$username = "if0_37735872"; // Default XAMPP username
$password = "sOxrYKPyMGVz"; // Default XAMPP password is empty
$dbname = "if0_37735872_Industry_gym"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>