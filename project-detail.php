<?php // project-detail.php
// Include the projects data
$projectCategories = include 'data/projects.php';

// Get the project ID from URL
$projectId = $_GET['id'] ?? null;

// Find the requested project
$project = null;
foreach ($projectCategories as $category => $projects) {
    foreach ($projects as $p) {
        if ($p['id'] === $projectId) {
            $project = $p;
            break 2;
        }
    }
}

// If project not found, redirect to projects page
if (!$project) {
    header('Location: index.php#projects');
    exit;
}

// Set page title
$page_title = $project['title'] . " | My Portfolio";

// Include header
include 'header.php';
?>

<main>
    <section class="project-detail">
        <div class="container">
            <a href="index.php#projects" class="back-link"><i class="fas fa-arrow-left"></i> Back to Projects</a>

            <div class="project-header">
                <h1><?php echo $project['title']; ?></h1>
                <p class="project-description"><?php echo $project['description']; ?></p>
            </div>
            
            <div class="project-content">
                <div class="project-image">
                    <div class="image-placeholder">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                </div>
                
                <div class="project-details">
                    <div class="project-info">
                        <?php echo $project['content']; ?>
                    </div>
                    
                    <div class="project-meta">
                        <div class="skills">
                            <h3>Technologies Used</h3>
                            <div class="project-skills">
                                <?php foreach ($project['skills'] as $skill): ?>
                                <span class="project-skill"><?php echo $skill; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <div class="project-links">
                            <?php if ($project['github']): ?>
                            <a href="<?php echo $project['github']; ?>" target="_blank" class="btn">
                                <i class="fab fa-github"></i> View on GitHub
                            </a>
                            <?php endif; ?>
                            
                            <?php if ($project['live_demo']): ?>
                            <a href="<?php echo $project['live_demo']; ?>" target="_blank" class="btn btn-secondary">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Include footer
include 'footer.php';
?>