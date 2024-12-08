<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Successful login
            $_SESSION['user_id'] = $row['id'];
            header('Location: ../quiz.html');  // Redirect to the quiz page after login
            exit();  // Always call exit() after header to stop further script execution
        } else {
            // Redirect back to login with an error message
            header('Location: ../login.html?error=invalid_password');
            exit();
        }
    } else {
        // Redirect back to login with an error message
        header('Location: ../login.html?error=no_user_found');
        exit();
    }
}
?>
