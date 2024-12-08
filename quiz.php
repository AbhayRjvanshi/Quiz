<?php
session_start();
$_SESSION['quiz_score'] = $score;
include('config.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Check answers
    if ($_POST['q1'] == "4") {
        $score++;
    }
    if ($_POST['q2'] == "10") {
        $score++;
    }

    // Store the score (example with session or database)
    $_SESSION['quiz_score'] = $score;

    // Redirect to result page
    header('Location: ../result.html');  // Redirect to the result page
    exit();
}
?>
