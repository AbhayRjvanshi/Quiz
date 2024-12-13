<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results - Quiz Adda</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <link href="cdn.jsdelivr.netnpm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <header>
        <a href="index.html" class="logo" style="font-family: 'Edu AU VIC WA NT Arrows', sans-serif; font-weight: 700; font-size: 2.5rem; color: #fff;">
            Quiz Adda
        </a>

        <ul class="navlist">
            <li><a href="about.html">About</a></li>
            <li><a href="index.html">Quiz</a></li>
            <li><a href="ComingSoon.html">Events</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </header>

    <main class="results-section">
        <h1>Your Quiz Results</h1>
        <p id="score">
            <?php
            session_start();
            // Check if the score is available in the session
            if (isset($_SESSION['quiz_score'])) {
                echo "Your Score: " . $_SESSION['quiz_score'] . "/2"; // Display the score
            } else {
                echo "No score available. Please try again."; // If no score is found
            }
            ?>
        </p>
        <a href="index.html"><button class="btn">Go to Home</button></a>
    </main>
</body>
</html>
