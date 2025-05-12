<?php
$status = '';
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $messageContent = trim($_POST['message'] ?? '');

    // Basic validation
    if ($name === '' || $email === '' || $messageContent === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "Please fill in all fields correctly.";
    } else {
        $to = 'youremail@example.com'; // TODO: replace with the actual recipient email
        $subject = "New message from $name";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$messageContent";
        $headers = "From: $email";

        // Send email (requires proper mail configuration:contentReference[oaicite:25]{index=25})
        if (mail($to, $subject, $body, $headers)) {
            $status = "Your message has been sent!";
        } else {
            $status = "Sorry, there was an error sending your message.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="contact-form">
        <h2>Contact Me</h2>
        <?php if ($status): ?>
            <p><?php echo $status; ?></p>
        <?php endif; ?>
        <form method="post" action="contact.php">
            <label>
                Name:<br>
                <input type="text" name="name" required>
            </label><br>
            <label>
                Email:<br>
                <input type="email" name="email" required>
            </label><br>
            <label>
                Message:<br>
                <textarea name="message" rows="5" required></textarea>
            </label><br>
            <button type="submit">Send Message</button>
        </form>
        <p><a href="index.php">Back to Home</a></p>
    </section>
</body>
</html>
