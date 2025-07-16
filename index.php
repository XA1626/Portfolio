<?php // index.php
$page_title = "Dexter's Portfolio";
$name = "Dexter Jones";
$job_title = "Software Developer & Cybersecurity Enthusiast & Petrol Mechanic";
$email = "Dexter.jones.jobs@gmail.com";
$phone = "+64 21 124 8180";
$location = "Auckland , New Zealand";
$bio = "Hello! I'm Dexter Jones, I am double majoring in Computer Science (Software Development and Cybersecurity).";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <?php include 'hero.php'; ?>
        <?php include 'about.php'; ?>
        <?php include 'skills.php'; ?>  <!-- Updated skills section -->
        <?php include 'projects.php'; ?>
        <?php include 'contact.php'; ?>
    </main>
    
    <?php include 'footer.php'; ?>
    
    <script src="script.js"></script>
</body>
</html>