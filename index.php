<?php // index.php
$page_title = "My Portfolio | Web Developer";
$name = "Dexter Jones";
$job_title = "Web Developer & UI Designer";
$email = "Dexter.jones.jobs@gmail.com";
$phone = "+64 21 124 8180";
$location = "Auckland , New Zealand";
$bio = "Hello! I'm Dexter Jones, a passionate web developer with over 5 years of experience creating dynamic websites and applications. I specialize in PHP, HTML, CSS, JavaScript, and modern frameworks.";
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
        <?php include 'skills.php'; ?>
        <?php include 'projects.php'; ?>
        <?php include 'contact.php'; ?>
    </main>
    
    <?php include 'footer.php'; ?>
    
    <script src="script.js"></script>
</body>
</html>