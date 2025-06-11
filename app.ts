const { useState, useEffect, useRef } = React;

const App = () => {
  const [activeSection, setActiveSection] = useState('home');
  const [isScrolling, setIsScrolling] = useState(false);
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const homeRef = useRef<HTMLDivElement>(null);
  const aboutRef = useRef<HTMLDivElement>(null);
  const projectsRef = useRef<HTMLDivElement>(null);
  const skillsRef = useRef<HTMLDivElement>(null);
  const contactRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const handleScroll = () => {
      if (isScrolling) return;

      const scrollPosition = window.scrollY + 100;

      const sections = [
        { id: 'home', ref: homeRef },
        { id: 'about', ref: aboutRef },
        { id: 'projects', ref: projectsRef },
        { id: 'skills', ref: skillsRef },
        { id: 'contact', ref: contactRef },
      ];

      for (const section of sections) {
        const element = section.ref.current;
        if (!element) continue;

        const offsetTop = element.offsetTop;
        const offsetBottom = offsetTop + element.offsetHeight;

        if (scrollPosition >= offsetTop && scrollPosition < offsetBottom) {
          setActiveSection(section.id);
          break;
        }
      }
    };

    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, [isScrolling]);

  const scrollToSection = (sectionId: string) => {
    setIsMenuOpen(false);
    setIsScrolling(true);
    
    const sectionRef = {
      home: homeRef,
      about: aboutRef,
      projects: projectsRef,
      skills: skillsRef,
      contact: contactRef,
    }[sectionId];

    if (sectionRef && sectionRef.current) {
      window.scrollTo({
        top: sectionRef.current.offsetTop,
        behavior: 'smooth',
      });

      setTimeout(() => {
        setActiveSection(sectionId);
        setIsScrolling(false);
      }, 500);
    }
  };

  const projects = [
    {
      id: 1,
      title: 'E-Commerce Platform',
      description: 'A full-stack e-commerce solution with React frontend and Node.js backend',
      image: 'https://images.unsplash.com/photo-1607082350899-7e105aa886ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80',
      tags: ['React', 'Node.js', 'MongoDB', 'Express'],
    },
    {
      id: 2,
      title: 'Portfolio Generator',
      description: 'A tool that helps professionals create stunning portfolios without coding',
      image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80',
      tags: ['TypeScript', 'React', 'Firebase', 'Tailwind CSS'],
    },
    {
      id: 3,
      title: 'Task Management App',
      description: 'A productivity application for teams to manage projects and tasks',
      image: 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80',
      tags: ['Vue.js', 'Vuex', 'Node.js', 'PostgreSQL'],
    },
    {
      id: 4,
      title: 'AI Content Generator',
      description: 'An AI-powered tool that generates marketing content for businesses',
      image: 'https://images.unsplash.com/photo-1677442135722-5f8ea49cec8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80',
      tags: ['Python', 'TensorFlow', 'React', 'Flask'],
    },
  ];

  const skills = [
    {
      category: 'Frontend',
      items: [
        { name: 'React', level: 90 },
        { name: 'TypeScript', level: 85 },
        { name: 'HTML/CSS', level: 95 },
        { name: 'Vue.js', level: 80 },
      ],
      icon: 'fa-code',
    },
    {
      category: 'Backend',
      items: [
        { name: 'Node.js', level: 85 },
        { name: 'Python', level: 80 },
        { name: 'Express', level: 85 },
        { name: 'MongoDB', level: 75 },
      ],
      icon: 'fa-server',
    },
    {
      category: 'Design',
      items: [
        { name: 'Figma', level: 90 },
        { name: 'Adobe XD', level: 85 },
        { name: 'UI/UX', level: 90 },
        { name: 'Responsive Design', level: 95 },
      ],
      icon: 'fa-palette',
    },
    {
      category: 'Tools',
      items: [
        { name: 'Git', level: 90 },
        { name: 'Docker', level: 75 },
        { name: 'CI/CD', level: 80 },
        { name: 'AWS', level: 70 },
      ],
      icon: 'fa-tools',
    },
  ];

  return (
    <div className="font-sans text-[#333333] bg-white min-h-screen">
      {/* Header/Navigation */}
      <header className="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent backdrop-blur-sm">
        <div className="container mx-auto px-6 py-4 flex justify-between items-center">
          <a href="#home" className="text-2xl font-bold text-[#2D2D2D] hover:text-[#4A90E2] transition-colors duration-300 cursor-pointer" onClick={() => scrollToSection('home')}>
            John Doe
          </a>

          <nav className="hidden md:flex space-x-8">
            {['home', 'about', 'projects', 'skills', 'contact'].map((section) => (
              <a
                key={section}
                href={`#${section}`}
                className={
                  {`capitalize font-medium transition-all duration-300 hover:text-[#4A90E2] cursor-pointer whitespace-nowrap ${
                    activeSection === section ? 'text-[#4A90E2]' : 'text-[#2D2D2D]'
                  }`}
                }
                onClick={(e) => {
                  e.preventDefault();
                  scrollToSection(section);
                }}
              >
                {section}
              </a>
            ))}
          </nav>

          <button
            className="md:hidden text-[#2D2D2D] focus:outline-none cursor-pointer whitespace-nowrap"
            onClick={() => setIsMenuOpen(!isMenuOpen)}
          >
            <i className={`fas ${isMenuOpen ? 'fa-times' : 'fa-bars'} text-xl`}></i>
          </button>
        </div>

        <div
        className={
          [
            "md:hidden bg-white shadow-lg transition-all duration-300 overflow-hidden",
            isMenuOpen ? "max-h-60" : "max-h-0"
          ].join(" ")
        }
        >
          {/* Mobile Menu */}
          <div className="container mx-auto px-6 py-2">
            {['home', 'about', 'projects', 'skills', 'contact'].map((section) => (
              <a
                key={section}
                href={`#${section}`}
                className={`block py-3 capitalize font-medium transition-all duration-300 hover:text-[#4A90E2] cursor-pointer ${
                  activeSection === section ? 'text-[#4A90E2]' : 'text-[#2D2D2D]'
                }`}
                onClick={(e) => {
                  e.preventDefault();
                  scrollToSection(section);
                }}
              >
                {section}
              </a>
            ))}
          </div>
        </div>
      </header>

      {/* Hero Section */}
      <section 
        ref={homeRef} 
        id="home" 
        className="min-h-screen flex items-center relative"
        style={{
          backgroundImage: `url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1440&h=900&q=80')`,
          backgroundSize: 'cover',
          backgroundPosition: 'center',
        }}
      >
        <div className="container mx-auto px-6 py-20">
          <div className="max-w-3xl">
            <h1 className="text-5xl md:text-7xl font-bold mb-4 text-[#2D2D2D] animate-fadeIn">
              John Doe
            </h1>
            <div className="h-1 w-24 bg-[#4A90E2] mb-8"></div>
            <h2 className="text-2xl md:text-3xl font-medium mb-6 text-[#2D2D2D] opacity-0 animate-fadeInUp" style={{ animationDelay: '0.3s', animationFillMode: 'forwards' }}>
              Full Stack Developer & UI/UX Designer
            </h2>
            <p className="text-lg md:text-xl text-[#2D2D2D] mb-10 max-w-2xl opacity-0 animate-fadeInUp" style={{ animationDelay: '0.6s', animationFillMode: 'forwards' }}>
              I create elegant, efficient, and user-centered digital experiences with a focus on responsive design and performance optimization.
            </p>
            <div className="flex flex-wrap gap-4 opacity-0 animate-fadeInUp" style={{ animationDelay: '0.9s', animationFillMode: 'forwards' }}>
              <button 
                onClick={() => scrollToSection('projects')} 
                className="px-8 py-3 bg-[#4A90E2] text-white font-medium rounded hover:bg-[#3A80D2] transition-all duration-300 transform hover:scale-105 cursor-pointer whitespace-nowrap"
              >
                View My Work
              </button>
              <button 
                onClick={() => scrollToSection('contact')} 
                className="px-8 py-3 border-2 border-[#4A90E2] text-[#4A90E2] font-medium rounded hover:bg-[#4A90E2] hover:text-white transition-all duration-300 transform hover:scale-105 cursor-pointer whitespace-nowrap"
              >
                Contact Me
              </button>
            </div>
          </div>
        </div>
        
        <div className="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
          <button 
            onClick={() => scrollToSection('about')}
            className="text-[#4A90E2] cursor-pointer whitespace-nowrap"
          >
            <i className="fas fa-chevron-down text-2xl"></i>
          </button>
        </div>
      </section>

      {/* About Section */}
      <section ref={aboutRef} id="about" className="py-20 bg-gray-50">
        <div className="container mx-auto px-6">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-[#2D2D2D] mb-4">About Me</h2>
            <div className="h-1 w-24 bg-[#4A90E2] mx-auto"></div>
          </div>
          
          <div className="flex flex-col md:flex-row items-center gap-12">
            <div className="md:w-1/2 overflow-hidden rounded-lg shadow-lg transform hover:scale-[1.02] transition-transform duration-300">
              <img 
                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=800&q=80" 
                alt="John Doe" 
                className="w-full h-full object-cover object-top"
              />
            </div>
            
            <div className="md:w-1/2">
              <h3 className="text-2xl font-bold text-[#2D2D2D] mb-4">Who I Am</h3>
              <p className="text-lg text-[#333333] mb-6">
                I'm a passionate Full Stack Developer and UI/UX Designer with over 5 years of experience creating digital products for clients across various industries. I specialize in building responsive web applications that provide exceptional user experiences.
              </p>
              
              <h3 className="text-2xl font-bold text-[#2D2D2D] mb-4">My Journey</h3>
              <p className="text-lg text-[#333333] mb-6">
                My journey in tech began at the University of Technology where I earned my degree in Computer Science. Since then, I've worked with startups and established companies, helping them build products that users love.
              </p>
              
              <div className="grid grid-cols-2 gap-6 mt-8">
                <div>
                  <h4 className="text-xl font-semibold text-[#2D2D2D] mb-3">Education</h4>
                  <ul className="space-y-2">
                    <li className="flex items-start">
                      <i className="fas fa-graduation-cap mt-1 mr-2 text-[#4A90E2]"></i>
                      <span>BSc in Computer Science</span>
                    </li>
                    <li className="flex items-start">
                      <i className="fas fa-certificate mt-1 mr-2 text-[#4A90E2]"></i>
                      <span>UI/UX Design Certification</span>
                    </li>
                  </ul>
                </div>
                
                <div>
                  <h4 className="text-xl font-semibold text-[#2D2D2D] mb-3">Experience</h4>
                  <ul className="space-y-2">
                    <li className="flex items-start">
                      <i className="fas fa-briefcase mt-1 mr-2 text-[#4A90E2]"></i>
                      <span>5+ Years in Development</span>
                    </li>
                    <li className="flex items-start">
                      <i className="fas fa-users mt-1 mr-2 text-[#4A90E2]"></i>
                      <span>20+ Completed Projects</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Projects Section */}
      <section ref={projectsRef} id="projects" className="py-20">
        <div className="container mx-auto px-6">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-[#2D2D2D] mb-4">My Projects</h2>
            <div className="h-1 w-24 bg-[#4A90E2] mx-auto mb-6"></div>
            <p className="text-lg text-[#333333] max-w-2xl mx-auto">
              Here are some of my recent projects. Each one was carefully crafted to solve specific problems and deliver exceptional user experiences.
            </p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
            {projects.map((project) => (
              <div 
                key={project.id}
                className="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02]"
              >
                <div className="h-64 overflow-hidden">
                  <img 
                    src={project.image} 
                    alt={project.title} 
                    className="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                  />
                </div>
                
                <div className="p-6">
                  <h3 className="text-2xl font-bold text-[#2D2D2D] mb-2">{project.title}</h3>
                  <p className="text-[#333333] mb-4">{project.description}</p>
                  
                  <div className="flex flex-wrap gap-2 mb-6">
                    {project.tags.map((tag, index) => (
                      <span 
                        key={index}
                        className="px-3 py-1 bg-[#F0F7FF] text-[#4A90E2] text-sm font-medium rounded-full"
                      >
                        {tag}
                      </span>
                    ))}
                  </div>
                  
                  <button className="px-6 py-2 bg-[#4A90E2] text-white font-medium rounded hover:bg-[#3A80D2] transition-all duration-300 cursor-pointer whitespace-nowrap">
                    View Details
                  </button>
                </div>
              </div>
            ))}
          </div>
          
          <div className="text-center mt-12">
            <button className="px-8 py-3 border-2 border-[#4A90E2] text-[#4A90E2] font-medium rounded hover:bg-[#4A90E2] hover:text-white transition-all duration-300 cursor-pointer whitespace-nowrap">
              View All Projects
            </button>
          </div>
        </div>
      </section>

      {/* Skills Section */}
      <section ref={skillsRef} id="skills" className="py-20 bg-gray-50">
        <div className="container mx-auto px-6">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-[#2D2D2D] mb-4">My Skills</h2>
            <div className="h-1 w-24 bg-[#4A90E2] mx-auto mb-6"></div>
            <p className="text-lg text-[#333333] max-w-2xl mx-auto">
              I've developed a diverse set of skills throughout my career. Here's an overview of my technical expertise and capabilities.
            </p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {skills.map((skillGroup, index) => (
              <div 
                key={index}
                className="bg-white rounded-lg p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02]"
              >
                <div className="text-center mb-6">
                  <div className="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#F0F7FF] text-[#4A90E2] mb-4">
                    <i className={`fas ${skillGroup.icon} text-2xl`}></i>
                  </div>
                  <h3 className="text-xl font-bold text-[#2D2D2D]">{skillGroup.category}</h3>
                </div>
                
                <div className="space-y-4">
                  {skillGroup.items.map((skill, skillIndex) => (
                    <div key={skillIndex}>
                      <div className="flex justify-between mb-1">
                        <span className="font-medium text-[#2D2D2D]">{skill.name}</span>
                        <span className="text-[#4A90E2]">{skill.level}%</span>
                      </div>
                      <div className="w-full bg-gray-200 rounded-full h-2">
                        <div 
                          className="bg-[#4A90E2] h-2 rounded-full" 
                          style={{ width: `${skill.level}%` }}
                        ></div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section ref={contactRef} id="contact" className="py-20">
        <div className="container mx-auto px-6">
          <div className="text-center mb-16">
            <h2 className="text-4xl font-bold text-[#2D2D2D] mb-4">Get In Touch</h2>
            <div className="h-1 w-24 bg-[#4A90E2] mx-auto mb-6"></div>
            <p className="text-lg text-[#333333] max-w-2xl mx-auto">
              Have a project in mind or want to discuss potential opportunities? Feel free to reach out to me using the form below.
            </p>
          </div>
          
          <div className="max-w-4xl mx-auto">
            <div className="bg-white rounded-lg shadow-lg p-8">
              <form className="space-y-6">
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label htmlFor="name" className="block text-[#2D2D2D] font-medium mb-2">Name</label>
                    <input 
                      type="text" 
                      id="name" 
                      className="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#4A90E2] focus:border-transparent transition-all duration-300"
                      placeholder="Your Name"
                    />
                  </div>
                  
                  <div>
                    <label htmlFor="email" className="block text-[#2D2D2D] font-medium mb-2">Email</label>
                    <input 
                      type="email" 
                      id="email" 
                      className="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#4A90E2] focus:border-transparent transition-all duration-300"
                      placeholder="Your Email"
                    />
                  </div>
                </div>
                
                <div>
                  <label htmlFor="subject" className="block text-[#2D2D2D] font-medium mb-2">Subject</label>
                    <input 
                      type="text" 
                      id="subject" 
                      className="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#4A90E2] focus:border-transparent transition-all duration-300"
                      placeholder="Subject"
                    />
                </div>
                
                <div>
                  <label htmlFor="message" className="block text-[#2D2D2D] font-medium mb-2">Message</label>
                  <textarea 
                    id="message" 
                    rows={6}
                    className="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#4A90E2] focus:border-transparent transition-all duration-300 resize-none"
                    placeholder="Your Message"
                  ></textarea>
                </div>
                
                <div>
                  <button 
                    type="submit"
                    className="w-full md:w-auto px-8 py-3 bg-[#4A90E2] text-white font-medium rounded hover:bg-[#3A80D2] transition-all duration-300 cursor-pointer whitespace-nowrap"
                  >
                    Send Message
                  </button>
                </div>
              </form>
              
              <div className="mt-12 pt-12 border-t border-gray-200">
                <div className="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                  <div>
                    <div className="inline-flex items-center justify-center w-12 h-12 rounded-full bg-[#F0F7FF] text-[#4A90E2] mb-4">
                      <i className="fas fa-envelope text-xl"></i>
                    </div>
                    <h4 className="text-lg font-semibold text-[#2D2D2D] mb-2">Email</h4>
                    <a href="mailto:contact@johndoe.com" className="text-[#4A90E2] hover:underline">contact@johndoe.com</a>
                  </div>
                  
                  <div>
                    <div className="inline-flex items-center justify-center w-12 h-12 rounded-full bg-[#F0F7FF] text-[#4A90E2] mb-4">
                      <i className="fas fa-phone text-xl"></i>
                    </div>
                    <h4 className="text-lg font-semibold text-[#2D2D2D] mb-2">Phone</h4>
                    <a href="tel:+1234567890" className="text-[#4A90E2] hover:underline">+1 (234) 567-890</a>
                  </div>
                  
                  <div>
                    <div className="inline-flex items-center justify-center w-12 h-12 rounded-full bg-[#F0F7FF] text-[#4A90E2] mb-4">
                      <i className="fas fa-map-marker-alt text-xl"></i>
                    </div>
                    <h4 className="text-lg font-semibold text-[#2D2D2D] mb-2">Location</h4>
                    <p className="text-[#333333]">San Francisco, CA</p>
                  </div>
                </div>
                
                <div className="flex justify-center space-x-6 mt-8">
                  <a href="#" className="text-[#2D2D2D] hover:text-[#4A90E2] transition-colors duration-300 cursor-pointer">
                    <i className="fab fa-github text-2xl"></i>
                  </a>
                  <a href="#" className="text-[#2D2D2D] hover:text-[#4A90E2] transition-colors duration-300 cursor-pointer">
                    <i className="fab fa-linkedin text-2xl"></i>
                  </a>
                  <a href="#" className="text-[#2D2D2D] hover:text-[#4A90E2] transition-colors duration-300 cursor-pointer">
                    <i className="fab fa-twitter text-2xl"></i>
                  </a>
                  <a href="#" className="text-[#2D2D2D] hover:text-[#4A90E2] transition-colors duration-300 cursor-pointer">
                    <i className="fab fa-dribbble text-2xl"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer className="bg-[#2D2D2D] text-white py-8">
        <div className="container mx-auto px-6 text-center">
          <p className="mb-4">© {new Date().getFullYear()} John Doe. All rights reserved.</p>
          <p className="text-gray-400 text-sm">
            Designed and built with <i className="fas fa-heart text-[#4A90E2]"></i> by John Doe
          </p>
        </div>
      </footer>
    </div>
  );
};

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);