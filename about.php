<?php // about.php
?>
<section class="about" id="about">
    <div class="container">
        <h2>About Me</h2>
        <div class="about-content">
            <div class="about-image">
                <!--<svg viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">-->
                    <img src="C:\Users\milas\OneDrive\Pictures\DexterLogo.png" alt="<?php echo $name; ?>">
                    <rect width="400" height="400" fill="#e2e8f0"/>
                    <circle cx="200" cy="150" r="70" fill="#94a3b8"/>
                    <rect x="120" y="230" width="160" height="140" fill="#94a3b8"/>
                </svg>
            </div>
            <div class="about-text">
                <h3>I have a Bachelor of Computer and Information Sciences degree</h3>
                <p><?php echo $bio; ?></p>
                <p>As a software developer, I am passionate about creating innovative solutions that make a difference. My approach combines technical expertise with creative problem-solving to deliver solutions that not only meet but exceed client expectations. I believe in writing clean, maintainable code and creating intuitive user experiences.</p>
                <p>As a cybersecurity enthusiast, I am dedicated to protecting systems and networks from cyber threats. I stay updated with the latest security trends and best practices to ensure robust defense mechanisms are in place.</p>
                <p>As a petrol mechanic, I have a deep understanding of automotive systems and a passion for keeping vehicles running smoothly. I enjoy diagnosing issues and implementing effective solutions to ensure optimal performance.</p>
                <div class="about-info">
                    <p><strong>Name:</strong> <?php echo $name; ?></p>
                    <p><strong>Email:</strong> <?php echo $email; ?></p>
                    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
                    <p><strong>Location:</strong> <?php echo $location; ?></p>
                </div>
                <a href="#" class="btn">Download CV</a>
            </div>
        </div>
    </div>
</section>