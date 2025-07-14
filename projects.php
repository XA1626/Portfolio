<?php // projects.php
$projects = [
    [
        'title' => 'E-Commerce Platform',
        'description' => 'Full-featured online shopping system with payment integration',
        'skills' => ['PHP', 'MySQL', 'JavaScript', 'Bootstrap'],
        'image' => 'ecommerce'
    ],
    [
        'title' => 'Task Management App',
        'description' => 'Collaborative task management application with real-time updates',
        'skills' => ['React', 'Node.js', 'MongoDB', 'Express'],
        'image' => 'taskapp'
    ],
    [
        'title' => 'Travel Blog',
        'description' => 'Content-rich travel platform with location-based recommendations',
        'skills' => ['WordPress', 'CSS', 'Google Maps API', 'SEO'],
        'image' => 'travelblog'
    ],
    [
        'title' => 'Fitness Tracker',
        'description' => 'Mobile-first workout tracking application with analytics',
        'skills' => ['React Native', 'Firebase', 'Chart.js', 'Redux'],
        'image' => 'fitnesstracker'
    ]
];
?>
<section class="projects" id="projects">
    <div class="container">
        <h2>My Projects</h2>
        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <div class="project-image">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <div class="project-content">
                    <h3><?php echo $project['title']; ?></h3>
                    <p><?php echo $project['description']; ?></p>
                    <div class="project-skills">
                        <?php foreach ($project['skills'] as $skill): ?>
                        <span class="project-skill"><?php echo $skill; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a href="#" class="btn btn-secondary">View Details</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>