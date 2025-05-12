<?php
session_start();  // Resume PHP session for login state
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Mobile-friendly viewport meta tag:contentReference[oaicite:18]{index=18} -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Student Portfolio - Home</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to CSS stylesheet -->
</head>
<body>
    <!-- Header with navigation -->
    <header>
        <h1>My Portfolio</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
            <?php if(isset($_SESSION['username'])): ?>
                <!-- Show Logout if logged in -->
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <!-- Show Login link if not logged in -->
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>
        <?php if(isset($_SESSION['username'])): ?>
            <!-- Welcome message for logged-in user -->
            <p class="welcome">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <?php endif; ?>
    </header>

    <!-- About Me Section -->
    <section id="about">
        <h2>About Me</h2>
        <p>I am a student specializing in software development and cybersecurity. I am passionate about building secure, user-friendly applications and continuously learning new technologies.</p>
    </section>

    <!-- Skills Section: Language logos and proficiency levels -->
    <section id="skills">
        <h2>Skills</h2>
        <div class="skills">
            <div class="skill">
                <img src="images/html.png" alt="HTML5 Logo">
                <p>HTML5 – Intermediate</p>
            </div>
            <div class="skill">
                <img src="images/css.png" alt="CSS3 Logo">
                <p>CSS3 – Intermediate</p>
            </div>
            <div class="skill">
                <img src="images/javascript.png" alt="JavaScript Logo">
                <p>JavaScript – Beginner</p>
            </div>
            <div class="skill">
                <img src="images/python.png" alt="Python Logo">
                <p>Python – Intermediate</p>
            </div>
            <div class="skill">
                <img src="images/php.png" alt="PHP Logo">
                <p>PHP – Beginner</p>
            </div>
        </div>
    </section>

    <!-- Additional content could go here -->

</body>
</html>
