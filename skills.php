<?php // skills.php
$skills = [
    'Web Development' => 95,
    'UI/UX Design' => 90,
    'PHP & MySQL' => 85,
    'JavaScript' => 90,
    'React' => 80,
    'WordPress' => 75
];
?>
<section class="skills" id="skills">
    <div class="container">
        <h2>My Skills</h2>
        <div class="skills-container">
            <?php foreach ($skills as $skill => $percentage): ?>
            <div class="skill-item">
                <h3><?php echo $skill; ?></h3>
                <div class="skill-bar">
                    <div class="skill-level" style="width: <?php echo $percentage; ?>%"></div>
                </div>
                <div class="skill-percentage"><?php echo $percentage; ?>%</div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>