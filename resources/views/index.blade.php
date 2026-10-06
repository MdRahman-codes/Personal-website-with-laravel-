
@extends('layout')

@section("content")

  <!-- ========== HERO SECTION ========== -->
  <section id="home" class="hero">
    <div class="hero-content">
      <div class="hero-text">
        <p class="hero-greeting">Hi, I'm</p>
        <h1 class="hero-name">
          <span class="name-part">Ashik</span>
        </h1>
        <h2 class="hero-title">
          <span class="typing" id="typingText"></span>
          <span class="cursor-blink">|</span>
        </h2>
        <p class="hero-desc">
          I'm learning Web Development and building a strong foundation in Cybersecurity.
          Passionate about creating interactive interfaces and protecting digital systems.
        </p>
        <div class="hero-buttons">
          <a href="#projects" class="btn btn-primary">Explore My Work</a>
          <a href="#contact" class="btn btn-secondary">Let's Connect</a>
        </div>
      </div>

      <div class="hero-image-wrapper">
        <div class="image-glow"></div>
        <div class="image-frame">
          <img src="{{ asset('assets/image/Ashik_Photo.jpg') }}" alt="Ashik" class="profile-img" />
        </div>
        <div class="floating-badge badge-1">Web Dev</div>
        <div class="floating-badge badge-2">Cyber Sec</div>
        <div class="floating-badge badge-3">Philomath</div>
        <!-- <div class="floating-badge badge-3">Problem Solver</div> -->
      </div>
    </div>

    <div class="scroll-indicator">
      <div class="mouse">
        <div class="wheel"></div>
      </div>
      <span>Scroll Down</span>
    </div>
  </section>

  <!-- ========== ABOUT SECTION ========== -->
  <section id="about" class="section about">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">// About Me</span>
        <h2 class="section-title">Who I Am</h2>
      </div>

      <div class="about-grid">
        <div class="about-text">
          <p>
            I'm currently learning <strong>Web Development</strong> and exploring the world of
            <strong>Cybersecurity</strong>. I enjoy understanding how websites work, building
            interactive interfaces, and learning how systems can be protected from security threats.
          </p>
          <p>
            My goal is to become a skilled Full-Stack Developer with strong Cybersecurity knowledge
            so I can build secure, modern, and beautiful web applications.
          </p>
        </div>

        <div class="about-cards">
          <div class="info-card">
            <div class="card-icon">💻</div>
            <h3>Web Development</h3>
            <p>Building modern & interactive websites</p>
          </div>
          <div class="info-card">
            <div class="card-icon">🔐</div>
            <h3>Cybersecurity</h3>
            <p>Protecting systems & understanding threats</p>
          </div>
          <div class="info-card">
            <div class="card-icon">🧠</div>
            <h3>Problem Solving</h3>
            <p>Turning ideas into working solutions</p>
          </div>
          <div class="info-card">
            <div class="card-icon">📚</div>
            <h3>Continuous Learning</h3>
            <p>Always improving & exploring new tech</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SKILLS SECTION ========== -->
  <section id="skills" class="section skills">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">// Skills</span>
        <h2 class="section-title">What I'm Learning</h2>
      </div>

      <div class="skills-grid">
        <div class="skill-category">
          <h3 class="category-title">
            <span class="cat-icon">🌐</span> Web Development
          </h3>
          <div class="skill-list">
            <div class="skill-item">
              <span class="skill-name">HTML</span>
              <span class="skill-level learning">Learning</span>
            </div>
            <div class="skill-item">
              <span class="skill-name">CSS</span>
              <span class="skill-level learning">Learning</span>
            </div>
            <div class="skill-item">
              <span class="skill-name">JavaScript</span>
              <span class="skill-level learning">Learning</span>
            </div>
            <div class="skill-item">
              <span class="skill-name">MYSQL</span>
              <span class="skill-level learning">Learning</span>
            </div>
            <div class="skill-item">
              <span class="skill-name">PHP</span>
              <span class="skill-level learning">Learning</span>
            </div>
            <div class="skill-item">
              <span class="skill-name">Git & GitHub</span>
              <span class="skill-level exploring">Exploring</span>
            </div>
          </div>
        </div>

        <div class="skill-category">
          <h3 class="category-title">
            <span class="cat-icon">🛡️</span> Cybersecurity
          </h3>
          <div class="skill-list">
            <div class="skill-item">
              <span class="skill-name">Networking</span>
              <span class="skill-level exploring">Exploring</span>
            </div>
            <div class="skill-item">
              <span class="skill-name">Linux Basics</span>
              <span class="skill-level exploring">Exploring</span>
            </div>
            <div class="skill-item">
              <span class="skill-name">Web Security</span>
              <span class="skill-level exploring">Exploring</span>
            </div>
            <div class="skill-item">
              <span class="skill-name">Ethical Hacking</span>
              <span class="skill-level exploring">Exploring</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CYBER LAB SECTION ========== -->
  <section id="cyberlab" class="section cyberlab">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">// Cyber Lab</span>
        <h2 class="section-title">Security Playground</h2>
      </div>

      <div class="terminal-wrapper">
        <div class="terminal">
          <div class="terminal-header">
            <div class="terminal-dots">
              <span class="dot red"></span>
              <span class="dot yellow"></span>
              <span class="dot green"></span>
            </div>
            <span class="terminal-title">ashik@cyber-lab:~</span>
          </div>
          <div class="terminal-body" id="terminalBody">
            <div class="terminal-line">
              <span class="prompt">ashik@cyber-lab:~$</span>
              <span class="command">whoami</span>
            </div>
            <div class="terminal-output">ashik — Web Developer & Cybersecurity Enthusiast</div>

            <div class="terminal-line">
              <span class="prompt">ashik@cyber-lab:~$</span>
              <span class="command">scan --status</span>
            </div>
            <div class="terminal-output">
              <span class="status ok">[✓]</span> Network Fundamentals<br />
              <span class="status ok">[✓]</span> Linux Basics<br />
              <span class="status ok">[✓]</span> Web Security Basics<br />
              <span class="status progress">[→]</span> Ethical Hacking<br />
              <span class="status progress">[→]</span> Penetration Testing
            </div>

            <div class="terminal-line">
              <span class="prompt">ashik@cyber-lab:~$</span>
              <span class="command">echo "Keep Learning. Keep Securing."</span>
            </div>
            <div class="terminal-output">Keep Learning. Keep Securing.</div>

            <div class="terminal-line">
              <span class="prompt">ashik@cyber-lab:~$</span>
              <span class="command typing-cursor" id="terminalCursor"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PROJECTS SECTION ========== -->
  <section id="projects" class="section projects">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">// Projects</span>
        <h2 class="section-title">My Work</h2>
        <p class="section-subtitle">Projects will grow as I learn more. Currently building my foundation.</p>
      </div>

      <div class="projects-grid">
        <div class="project-card">
          <div class="project-preview">
            <div class="preview-placeholder">
              <span>🚀</span>
              <p>Personal Portfolio</p>
            </div>
          </div>
          <div class="project-info">
            <h3>Cyber Portfolio Website</h3>
            <p>My personal portfolio built with pure HTML, CSS & JavaScript featuring cyber-themed animations.</p>
            <div class="project-tags">
              <span>HTML</span>
              <span>CSS</span>
              <span>JavaScript</span>
            </div>
            <div class="project-links">
              <a href="#" class="project-btn">View Project</a>
              <a href="#" class="project-btn ghost">GitHub</a>
            </div>
          </div>
        </div>

        <div class="project-card coming-soon">
          <div class="project-preview">
            <div class="preview-placeholder">
              <span>🔒</span>
              <p>Coming Soon</p>
            </div>
          </div>
          <div class="project-info">
            <h3>Security Tools Lab</h3>
            <p>Interactive cybersecurity tools and demos. Will be added as I progress.</p>
            <div class="project-tags">
              <span>Coming Soon</span>
            </div>
          </div>
        </div>

        <div class="project-card coming-soon">
          <div class="project-preview">
            <div class="preview-placeholder">
              <span>🌐</span>
              <p>Coming Soon</p>
            </div>
          </div>
          <div class="project-info">
            <h3>More Projects</h3>
            <p>New projects will appear here as I continue learning and building.</p>
            <div class="project-tags">
              <span>Stay Tuned</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== JOURNEY SECTION ========== -->
  <section id="journey" class="section journey">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">// Learning Journey</span>
        <h2 class="section-title">My Path</h2>
      </div>

      <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <span class="timeline-year">2026</span>
            <h3>Started Web Development</h3>
            <p>Began learning HTML, CSS and the fundamentals of building websites.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <span class="timeline-year">2026</span>
            <h3>JavaScript Journey</h3>
            <p>Diving into JavaScript to make websites interactive and dynamic.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <span class="timeline-year">Now</span>
            <h3>Cybersecurity Exploration</h3>
            <p>Learning networking, Linux, web security and ethical hacking basics.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-dot future"></div>
          <div class="timeline-content">
            <span class="timeline-year">Future</span>
            <h3>More to Come...</h3>
            <p>Backend, frameworks, advanced security, and real-world projects.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CURRENTLY LEARNING ========== -->
  <section class="section currently">
    <div class="container">
      <div class="currently-box">
        <h3>Currently Learning</h3>
        <div class="learning-tags">
          <span class="tag active">HTML</span>
          <span class="tag active">CSS</span>
          <span class="tag active">JavaScript</span>
        </div>
        <p class="exploring-text">Exploring...</p>
        <div class="learning-tags">
          <span class="tag">Cybersecurity</span>
          <span class="tag">Networking</span>
          <span class="tag">Linux</span>
          <span class="tag">Web Security</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CONTACT SECTION ========== -->
  <section id="contact" class="section contact">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">// Contact</span>
        <h2 class="section-title">Let's Connect</h2>
        <p class="section-subtitle">Have a project idea or just want to say hi?</p>
      </div>

      <div class="contact-content">
        <p class="contact-desc">Let's build something awesome together.</p>
        <div class="contact-buttons">
          <a href="mailto:rahmanmdakash2303@gmail.com" class="btn btn-primary">Email</a>
          <a href="https://github.com/MdRahman-codes" class="btn btn-secondary" target="_blank">GitHub</a>
          <a href="https://www.linkedin.com/in/MdRahman-codes" class="btn btn-secondary" target="_blank">LinkedIn</a>
        </div>
      </div>
    </div>
  </section>

@endsection
