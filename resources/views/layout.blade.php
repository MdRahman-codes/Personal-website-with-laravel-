<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ashik | Web Developer & Cybersecurity Enthusiast</title>
  <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>
<body>
  <!-- Particle Background Canvas -->
  <canvas id="particles"></canvas>

  <!-- Custom Cursor -->
  <!-- <div class="cursor"></div>
  <div class="cursor-follower"></div> -->

  <!-- ========== NAVBAR ========== -->
  <nav class="navbar" id="navbar">
    <div class="nav-container">
      <a href="#home" class="logo">
        <span class="logo-bracket">&lt;</span>
        <span class="logo-text">ASHIK</span>
        <span class="logo-bracket">/&gt;</span>
      </a>

      <ul class="nav-links" id="navLinks">
        <li><a href="#home" class="nav-btn">Home</a></li>
        <li><a href="#about" class="nav-btn">About</a></li>
        <li><a href="#skills" class="nav-btn">Skills</a></li>
        <li><a href="#cyberlab" class="nav-btn">Cyber Lab</a></li>
        <li><a href="#projects" class="nav-btn">Projects</a></li>
        <li><a href="#journey" class="nav-btn">Journey</a></li>
        <li><a href="#contact" class="nav-btn">Contact</a></li>
      </ul>

      <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>

@yield('content')








    <!-- ========== FOOTER ========== -->
  <footer class="footer">
    <div class="container">
      <p>© 2026 Ashik. Built with ❤️ using HTML, CSS & JavaScript</p>
      <p class="footer-tagline">&lt; Keep Learning. Keep Building. Keep Securing. /&gt;</p>
    </div>
  </footer>

  <script src="{{ asset("assets/js/script.js") }}"></script>
</body>
</html>
