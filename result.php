<?php
session_start();
include('config.php');

// Check if the user has completed the quiz and the score is stored in session
if (isset($_SESSION['quiz_score'])) {
    $score = $_SESSION['quiz_score'];  // Get score from session
    echo "<h1>Your Score: $score/2</h1>";  // Display score
} else {
    echo "<h1>No score available. Please take the quiz again.</h1>";
}
?>
