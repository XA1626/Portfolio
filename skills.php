<?php // skills.php
$skillCategories = [
    'Software' => [
        'HTML' => 95,
        'PHP' => 70,
        'JavaScript' => 90,
        'React' => 80,
        'Java' => 75,
        'C' => 50,
        'CSS' => 90,
    ],
    'Cybersecurity' => [
        'Network Security' => 85,
        'Penetration Testing' => 80,
        'Ethical Hacking' => 0,
        'Firewall Configuration' => 90
    ],
    'Mechanic' => [
        'Engine Work' => 95,
        'Turbo Installation' => 90,
        'Suspension Setup' => 80
    ]
];
?>
<section class="skills" id="skills">
    <div class="container">
        <h2>My Skills</h2>
        
        <?php foreach ($skillCategories as $category => $skills): ?>
        <div class="skill-category">
            <h3 class="category-title"><?php echo $category; ?></h3>
            <div class="skills-container">
                <?php foreach ($skills as $skill => $percentage): ?>
                <div class="skill-item">
                    <h4><?php echo $skill; ?></h4>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: <?php echo $percentage; ?>%"></div>
                    </div>
                    <div class="skill-percentage"><?php echo $percentage; ?>%</div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>