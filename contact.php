<?php // contact.php
$form_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name_input = htmlspecialchars($_POST['name']);
    $email_input = htmlspecialchars($_POST['email']);
    $message_input = htmlspecialchars($_POST['message']);
    
    // Simple validation
    if (!empty($name_input) && !empty($email_input) && !empty($message_input)) {
        $form_message = "<div class='success'>Thank you for your message, $name_input! I'll get back to you soon.</div>";
    } else {
        $form_message = "<div class='error'>Please fill in all fields.</div>";
    }
}
?>
<section class="contact" id="contact">
    <div class="container">
        <h2>Get In Touch</h2>
        <p>Have a project in mind or want to discuss potential opportunities? Feel free to reach out to me using the contact form or through my contact information.</p>
        
        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h3>Email</h3>
                        <p><?php echo $email; ?></p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h3>Phone</h3>
                        <p><?php echo $phone; ?></p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h3>Location</h3>
                        <p><?php echo $location; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <?php if (!empty($form_message)) echo $form_message; ?>
                <form method="POST" action="#contact">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn btn-light">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>