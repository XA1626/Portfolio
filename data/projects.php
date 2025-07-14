<?php // data/projects.php
return [
    [
        'id' => 'Humble',
        'title' => 'Humble',
        'description' => 'Honda Civic EH9, B18c1 Turbo',
        'skills' => ['Mechanic'],
        'image' => 'humble',
        'content' => '<p>This e-commerce platform was developed to provide businesses with a complete online shopping solution. The platform includes:</p>
                      <ul>
                        <li>User registration and authentication system</li>
                        <li>Product catalog with categories and filters</li>
                        <li>Shopping cart and checkout process</li>
                        <li>Payment gateway integration (Stripe and PayPal)</li>
                        <li>Order management system for administrators</li>
                      </ul>
                      <p>The system was built with PHP and MySQL on the backend, with a responsive frontend using Bootstrap and JavaScript. It features a clean, intuitive interface designed to maximize conversions.</p>',
        'github' => 'https://github.com/yourusername/ecommerce-platform',
        'live_demo' => 'https://demo.yourdomain.com/ecommerce'
    ],
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
    ],
    [
        'id' => 'fitnesstracker',
        'title' => 'Fitness Tracker',
        'description' => 'Mobile-first workout tracking application with analytics',
        'skills' => ['React Native', 'Firebase', 'Chart.js', 'Redux'],
        'image' => 'fitnesstracker',
        'content' => '<p>The fitness tracker app helps users monitor their workouts, track progress, and achieve fitness goals. Key features:</p>
                      <ul>
                          <li>Workout logging with custom routines</li>
                          <li>Progress tracking with visual charts</li>
                          <li>Goal setting and achievement tracking</li>
                          <li>Social features for sharing achievements</li>
                          <li>Nutrition tracking integration</li>
                      </ul>
                      <p>Built with React Native for cross-platform compatibility, and Firebase for real-time data synchronization. The app has been downloaded over 10,000 times on app stores.</p>',
        'github' => 'https://github.com/yourusername/fitness-tracker',
        'live_demo' => null
    ]
];