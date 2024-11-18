<?php
session_start(); // Start a new session or resume the existing one

// Database credentials
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password is empty
$dbname = "gym"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM gym_db WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        // Fetch the hashed password
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables
            $_SESSION['email'] = $email;
            // Redirect to the index page
            header("Location: index.html");
            exit(); // Make sure to call exit after the redirect
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email address.";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>