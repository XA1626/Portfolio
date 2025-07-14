// script.js (add this to your existing file)

// Project detail page functionality
document.addEventListener('DOMContentLoaded', function() {
    const specToggles = document.querySelectorAll('.spec-toggle');
    
    specToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const specBox = this.parentElement;
            specBox.classList.toggle('active');
        });
    });

    // Highlight active project in navigation
    const projectId = new URLSearchParams(window.location.search).get('id');
    if (projectId) {
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.classList.remove('active');
        });
        
        const projectsLink = document.querySelector('.nav-links a[href="#projects"]');
        if (projectsLink) {
            projectsLink.classList.add('active');
        }
    }
});