<!DOCTYPE html>
<html lang="en">
<head>
    <!---  
    There are a few ways to configure your website to function like this,
    where typing either "www.example.com" or "example.com" will lead to the same website. 
    Here are a few common methods:

      Use a "Canonical" Link: This is a way to tell search engines which version of your website
       you prefer to be indexed. You can add a link in the head section of your website with
        rel="canonical" and href set to your preferred domain.
    -->
    <link rel="canonical" href="https://www.ashbie.tech" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashbie's Portfolio</title>
    <!-- My Favicon -->
    <link rel="icon" type="image/icon" href="/assets/img/from_wwwDfaviconDcc.ico">
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Inter&display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/64fab6af73.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- My css -->
    <link rel="stylesheet" href="test.css">
    
</head>
<body>
    <!-- Navbar.Main -->
<nav id="main-navbar" class="navbar">
    
      <a id="anchor1-in-nav" class="nav-branding" href="index.html"><img src="assets/img/logo_cropped.png" alt="logo"></a>
    
    
  <!-- How that lady did her navbar -->
      
      
      <div class="click-out"></div>
      <ul id="the-ul" class="nav-menu">
        
          <li class="nav-item"><a href="#about_me" class="nav-link"><span class="numbers">01.</span>About</a></li>
          <li class="nav-item"><a href="#projects" class="nav-link"><span class="numbers">02.</span>Projects</a></li>
          <!-- <li class="nav-item"><a href="#experience" class="nav-link"><span class="numbers">03.</span>Experience</a></li> -->
          <li class="nav-item"><a href="#contact_me" class="nav-link"><span class="numbers">03.</span>Contact</a></li>
          <li class="nav-item"><a href="resume.html" target="_blank" class="bttn" id="resume-bttn">Resume</a></li>
        
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    
  </nav>
  <!-- Left-vertical Navbar -->
  <nav id="lvn" class="vertical-navbars">
    <ul id="lvn-ul" class="vertical-navbars-ul">
      <li>
        <a href="https://www.linkedin.com/in/ashbie-b-mweemba-6bba351a5/" target="_blank"><span class="fa-brands fa-linkedin" aria-hidden="true"></span><span class="sr-only"> LinkedIn</span></a>
      </li>
      <li><a href="https://github.com/ashbie" target="_blank"><span class="fa-brands fa-github" aria-hidden="true"></span><span class="sr-only"> GitHub</span></a></li>
      <li><a href="https://twitter.com/ashbie_b" target="_blank"><span class="fa-brands fa-twitter" aria-hidden="true"></span><span class="sr-only"> Twitter</span></a></li>
      <li><a href="https://www.instagram.com/ashbie.mweemba/" target="_blank"><span class="fa-brands fa-instagram" aria-hidden="true"></span><span class="sr-only"> Instagram</span></a></li>
    </ul>
    <div id="lvn-vl"></div>
  </nav>
  
  <!-- Right vertical navbar -->
  <nav id="rvn" class="vertical-navbars">
    <ul class="vertical-navbars-ul">
      <li>
        <a href="mailto:ashbie.b.mweemba@gmail.com" id="email-address" target="_blank">ashbie.b.mweemba@gmail.com</a>
      </li>
      
    </ul>
    <div id="rvn-vl"></div>
  </nav>
  
  <section id="intro">
    <div class="percent"></div>
    <p class="name">Hi, my name is <span>Ashbie B. Mweemba.</span></p>
  
    <h2>I build things for the web.</h2>
  
    <p class="software-engineer">I’m a software engineer specializing in building (and occasionally designing) exceptional digital experiences.</p>
  </section>

  <section id="about_me">
    <h2 class="section_heading"><span class="numbers-section">01.</span> About Me</h2>
    <span class="grid-about-me" style="padding-bottom: 2rem; margin: 0 auto;">
      <div class="grid-text" >
        <p class="text" id="about-me-text">
          Hello! My name is Ashbie and I enjoy creating things that live on
          the internet. My interest in web development started back in 2018
          when I tried to build an Uber-like website — turns out that trying
          to clone a site taught me a lot about HTML &amp; CSS! My main
          focus these days is building accessible, inclusive products and
          digital experiences. Here are a few technologies I’ve been working
          with recently:
        </p>

        <span id="technologies">
          <ul class="ul_1">
            <li>TypeScript</li>
            <li>React</li>
            <li>GraphQL &amp; Rest APIs</li>
          </ul>

          <ul class="ul_2">
            <li>Node.js</li>
            <li>MongoDB</li>
            <li>JavaScript (ES6+)</li>
          </ul>
        </span>
      </div>
      <div class="grid-img">
        
        <img src="assets/img/face.jpeg" alt="image of Ashbie">
       
      </div>
    </span>
  </section>

  <section id="experience">
    
  </section>

  <section id="projects">
    <h2><span class="numbers-section">02.</span> Some Things I've Built</h2>
    <article class="project-articles">
      <div id="grid-text-jpj" class="project-grid-text">
        <h4 class="featured-project">Featured Project</h4>
    
        <h3 class="project-name">Jour-Par-Jour</h3>
      
      
        <p class="project-description">
          A home-sharing web application that lets users sign in via
          google, create listings, and book other listings that were
          created by other users
        </p>
      
        <h4 class="technologies-used-title">Technologies used include:</h4>
        <ul class="technologies-list">
          <li>Apollo</li>
          <li>TypeScript</li>
          <li>Node.js</li>
          <li>GraphQL</li>
          <li>React</li>
        </ul>
        <span id="desktop-links" class="grid-icon-links">
          <a href="https://github.com/ashbie/airbnb-clone" target="_blank"  >
            <span class="fa-brands fa-github"></span></a>
            <a href="https://jour-par-jour.herokuapp.com/" target="_blank"  >
          <span class="fa-solid fa-arrow-up-right-from-square" ></span></a>
        </span>
      </div>
    
      <div id="grid-image-jpj" class="project-grid-image">
        <img src="assets/img/jour-par-jour.png" alt="photo of jour-par-jour project"/>

        <span class="icon-links">
          <a href="https://github.com/ashbie/airbnb-clone" target="_blank"  >
            <span class="fa-brands fa-github"></span></a>
            <a href="https://jour-par-jour.herokuapp.com/" target="_blank"  >
          <span class="fa-solid fa-arrow-up-right-from-square" ></span></a>
        </span>
      </div>  

      
    </article>

    <article  class="project-articles">
      <div  id="grid-text-clicknpay" class="project-grid-text">
        <h4 class="featured-project">Featured Project</h4>
    
        <h3 class="project-name">Click & Pay</h3>
      
      
        <p class="project-description">
          A digital distribution website for the purchase of music, movies and video games.
        </p>
      
        <h4 class="technologies-used-title">Technologies used include:</h4>
        <ul id="clicknpay-tech" class="technologies-list">
          <li>Ajax</li>
          <li>JQuery</li>
          <li>JavaScript</li>
          <li>PHP</li>
          <li>MySQL</li>
        </ul>
        <span class="grid-icon-links">
          <a href="https://github.com/ashbie//clicknpay.git" target="_blank"  >
            <span class="fa-brands fa-github"></span></a>
            <a href="https://clicknpay.herokuapp.com/" target="_blank"  >
          <span class="fa-solid fa-arrow-up-right-from-square" ></span></a>
        </span>  
      </div>
    
      <div id="grid-image-clicknpay" class="project-grid-image">
        <img src="assets/img/clicknpay2.png" alt="photo of clicknpay project"/>

        <span class="icon-links">
          <a href="https://github.com/ashbie//clicknpay.git" target="_blank"  >
            <span class="fa-brands fa-github"></span></a>
            <a href="https://clicknpay.herokuapp.com/" target="_blank"  >
          <span class="fa-solid fa-arrow-up-right-from-square" ></span></a>
        </span>  
      </div>
      
    </article>
  </section>
  



  
  <section id="contact_me">
    <div class="percent"></div>
    <p class="whats_next">03. What's next</p>
  
    <h2>Get In Touch</h2>
  
    <p class="message">My inbox is always open. Whether you have a question or just want to say hi, I’ll try my best to get back to you!</p>
    <p><a href="mailto:ashbie.b.mweemba@gmail.com" target="_blank" class="bttn">Say Hello</a></p>
    
  </section>

 



  <div id="second-last-element"></div>

<div id="footer-container">
  <section id="footer">
    <!-- Bottom Links -->
    <nav id="bottom-links" >
      <ul id="bottom-links-ul" class="vertical-navbars-ul  ">
        <li>
          <a href="https://www.linkedin.com/in/ashbie-b-mweemba-6bba351a5/" target="_blank"><span class="fa-brands fa-linkedin" aria-hidden="true"></span><span class="sr-only"> LinkedIn</span></a>
        </li>
        <li><a href="https://github.com/ashbie" target="_blank"><span class="fa-brands fa-github" aria-hidden="true"></span><span class="sr-only"> GitHub</span></a></li>
        <li><a href="https://twitter.com/ashbie_b" target="_blank"><span class="fa-brands fa-twitter" aria-hidden="true"></span><span class="sr-only"> Twitter</span></a></li>
        <li><a href="https://www.instagram.com/ashbie.mweemba/" target="_blank"><span class="fa-brands fa-instagram" aria-hidden="true"></span><span class="sr-only"> Instagram</span></a></li>
      </ul>
    </nav>

    <div>
      <p>Built by Ashbie Beenzu Mweemba</p>
    </div>
  </section>
</div>

  

  <!-- My JS -->
  <script src="test.js"></script>
</body>
</html>
