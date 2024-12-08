<?php
include('config.php');  // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash the password for security
    $confirm_password = $_POST['confirm_password'];

    // Check if password and confirm password match
    if ($password !== password_hash($confirm_password, PASSWORD_DEFAULT)) {
        echo "Passwords do not match.";
        exit;
    }

    // Insert data into the database
    $sql = "INSERT INTO users (first_name, second_name, username, email, password) 
            VALUES ('$first_name', '$second_name', '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // If the insert was successful, redirect to login page
        header('Location: ../login.html');
    } else {
        // If there was an error with the database, show an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
