<?php // projects.php
$projects = include 'data/projects.php';
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
                    <a href="project-detail.php?id=<?php echo $project['id']; ?>" class="btn btn-secondary">View Details</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>