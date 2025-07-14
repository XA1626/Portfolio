<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $project['title'] . " | Dexter's Portfolio"; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) === '/' ? 'style.css' : '../style.css'; ?>">
</head>

<?php // data/projects.php
return [
    'software' => [
        [
            'id' => 'taskapp',
            'title' => 'Task Management App',
            'description' => 'Collaborative task management application with real-time updates',
            'skills' => ['React', 'Node.js', 'MongoDB', 'Express'],
            'image' => 'taskapp',
            'content' => '<p>This task management application was designed for teams to collaborate on projects in real-time. Key features include:</p>
                        <ul>
                            <li>Real-time task updates using WebSockets</li>
                            <li>Project boards with drag-and-drop functionality</li>
                            <li>User roles and permissions</li>
                            <li>Deadline tracking and notifications</li>
                            <li>File attachments and comments</li>
                        </ul>
                        <p>The MERN stack (MongoDB, Express, React, Node.js) was used to develop this application, providing a seamless experience across devices.</p>',
            'github' => 'https://github.com/yourusername/task-app',
            'live_demo' => 'https://demo.yourdomain.com/taskapp'
        ],
        [
            'id' => 'travelblog',
            'title' => 'Travel Blog',
            'description' => 'Content-rich travel platform with location-based recommendations',
            'skills' => ['WordPress', 'CSS', 'Google Maps API', 'SEO'],
            'image' => 'travelblog',
            'content' => '<p>This travel blog platform was developed for a client who wanted to share their travel experiences with location-based recommendations. Features include:</p>
                        <ul>
                            <li>Custom WordPress theme development</li>
                            <li>Google Maps integration for location tagging</li>
                            <li>SEO optimization for better search rankings</li>
                            <li>Responsive design for all devices</li>
                            <li>Social media integration</li>
                        </ul>
                        <p>The site receives over 50,000 monthly visitors and has become a popular resource for travel enthusiasts.</p>',
            'github' => null,
            'live_demo' => 'https://travelblog.example.com'
        ]
    ],
    'cybersecurity' => [
        [
            'id' => 'securitytool',
            'title' => 'Network Security Tool',
            'description' => 'Penetration testing tool for network vulnerability assessment',
            'skills' => ['Python', 'Network Security', 'Penetration Testing', 'Linux'],
            'image' => 'securitytool',
            'content' => '<p>This security tool was developed to automate network vulnerability assessments. Features include:</p>
                        <ul>
                            <li>Port scanning and service detection</li>
                            <li>Common vulnerability checks</li>
                            <li>Automated reporting</li>
                            <li>Custom exploit modules</li>
                        </ul>
                        <p>Built with Python, this tool helps security professionals identify potential weaknesses in their network infrastructure.</p>',
            'github' => 'https://github.com/yourusername/security-tool',
            'live_demo' => null
        ]
    ],
    'mechanic' => [
        [
        'id' => 'humble',
        'title' => 'Humble',
        'description' => 'B18c1 Turbo Build - 350hp Track Car',
        'skills' => ['Engine Building and Tuning', 'Custom Fabrication', 'Suspension Setup'],
        'image' => 'humble',
        'content' => '<h2>Build Details</h2>
            <div class="specs-container">
                <div class="spec-box">
                    <button class="spec-toggle">Engine <i class="fas fa-chevron-down"></i></button>
                    <div class="spec-content">
                        <p><strong>B18c1</strong> with Dartson liners</p>
                        <ul>
                            <li>Forged pistons</li>
                            <li>Eagle rods</li>
                            <li>ARP head studs</li>
                        </ul>
                    </div>
                </div>
                
                <div class="spec-box">
                    <button class="spec-toggle">Turbo <i class="fas fa-chevron-down"></i></button>
                    <div class="spec-content">
                        <p><strong>Garrett GTX2867R</strong> with custom manifold</p>
                        <ul>
                            <li>Tial wastegate</li>
                            <li>Custom downpipe</li>
                            <li>Front-mount intercooler</li>
                        </ul>
                    </div>
                </div>
                
                <div class="spec-box">
                    <button class="spec-toggle">Management <i class="fas fa-chevron-down"></i></button>
                    <div class="spec-content">
                        <p><strong>Hondata S300</strong> ECU with custom tune</p>
                        <ul>
                            <li>Launch control</li>
                            <li>Flat-foot shifting</li>
                            <li>Dyno tuned</li>
                        </ul>
                    
                    <h2>Performance</h2>
                    <p>The car now produces 350hp at 12psi on pump gas, with a broad torque curve perfect for track use. It has competed in several time attack events with consistent results.</p>
                    
                    <h2>Future Plans</h2>
                    <p>Planned upgrades include a built transmission, larger turbo, and aerodynamic improvements.</p>',
        'github' => null,
        'live_demo' => null
        ],
        [
            'id' => 'DaVoe',
            'title' => 'DaVoe',
            'description' => 'Evo 7, 4g63t Turbo',
            'skills' => ['Engine Building and Tuning', 'Custom Fabrication', 'Suspension Setup'],
            'image' => 'humble',
            'content' => '<p>This project involved building and tuning a high-performance Evo 7 with a turbocharged 4g63t engine. Work included:</p>
                        <ul>
                            <li>Complete engine rebuild and turbo installation</li>
                            <li>Custom intercooler and exhaust fabrication</li>
                            <li>ECU tuning and dyno testing</li>
                            <li>Suspension upgrades and brake system overhaul</li>
                        </ul>
                        <p>The car now produces 350hp and is used for track days and performance driving events.</p>',
            'github' => null,
            'live_demo' => null
        ]
    ],
    'hobbies' => [
        [
            'id' => 'photography',
            'title' => 'Photography Portfolio',
            'description' => 'Collection of landscape and automotive photography',
            'skills' => ['Photography', 'Photo Editing', 'Lightroom', 'Photoshop'],
            'image' => 'photography',
            'content' => '<p>This is a collection of my personal photography work, focusing on landscapes and automotive subjects. Highlights include:</p>
                        <ul>
                            <li>Landscape photography from New Zealand locations</li>
                            <li>Automotive photography at track events</li>
                            <li>Post-processing workflow development</li>
                            <li>Print and digital media preparation</li>
                        </ul>
                        <p>My photography has been featured in several local exhibitions and automotive publications.</p>',
            'github' => null,
            'live_demo' => 'https://photography.yourportfolio.com'
        ]
    ]
];