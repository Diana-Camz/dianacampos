                            <!------------- HEADER -------------->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/build/css/app.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/dec3fe7f9b.js" crossorigin="anonymous"></script>
  <title>Personal Portfolio Website</title>
</head>
<body>

<header id="header">
  <div class="container">
    <nav>
      <a href="/" class="image-logo-name">  <!--LOGO IMAGE NAME-->
        <picture>
          <source loading="lazy" srcset="build/img/image-logo.webp" type="image/webp">
          <img loading="lazy" src="src/img/image-logo.jpg" alt="Logo Image">
        </picture>
      </a>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>      
    </nav>    
    <div class="header-text">
      <p>Front-End Developer Student</p>
      <h1>Hi, I'm <span>Diana</span><br>Campos From Mexico</h1>
    </div>
  </div>
  <div class="image">  <!--IMAGE NAME BACKGROUND-->      
      <picture>
        <source loading="lazy" srcset="build/img/image-background.webp" type="image/webp">
        <img loading="lazy" src="src/img/image-background.png" alt="Background Image">
      </picture>
  </div>
</header>

                        <!------------- ABOUT -------------->
<section class="about">
  <div class="container">
    <div class="row">
      <div class="about-col-1">
        <picture>
          <source loading="lazy" srcset="build/img/user.webp" type="image/webp">
          <img loading="lazy" src="src/img/user.jpg" alt="User Image">
        </picture>
      </div>
      <div class="about-col-2">
        <h1>About me</h1>
        <p>I am a Psychologist looking for the job of my dreams, which allows me to set new goals, feel new motivations within a challenging environment that challenges my knowledge and skills. All within the endless learning that the IT area provides. I enjoy well-structured code and am passionate about knowing that it can always improve. I am currently a Web Development student on my own, and if I am not practicing you can find me exercising or enjoying the afternoon with my boyfriend or my cats.</p>
        <div class="tab-titles">
          <p class="tab-links skills">Skills</p>
          <p class="tab-links experience">Experience</p>
          <p class="tab-links education">Education</p>
        </div>
        <div class="tab-contents skillsCont">
          <ul>
            <li><span>Skill 1</span><br>Insert your skill</li>
            <li><span>Skill 2</span><br>Insert your skill</li>
            <li><span>Skill 3</span><br>Insert your skill</li>
          </ul>
        </div>
        <div class="tab-contents experienceCont">
          <ul>
            <li><span>Experience 1</span><br>Insert your experience</li>
            <li><span>Experience 2</span><br>Insert your experience</li>
            <li><span>Experience 3</span><br>Insert your experience</li>
          </ul>
        </div>
        <div class="tab-contents educationCont">
          <ul>
            <li><span>Education 1</span><br>Insert your education</li>
            <li><span>Education 2</span><br>Insert your education</li>
            <li><span>Education 3</span><br>Insert your education</li>
          </ul>
        </div>
      </div>
    </div>    
  </div>
</section>

                        <!------------- SERVICES -------------->
<section class="services">
  <div class="container">
    <h1>My Services</h1>
    <div class="services-list">
      <div>
        <i class="fa-sharp fa-solid fa-code"></i>
        <h2>Service 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis vel cumque voluptatem quisquam vero voluptatum doloremque.</p>
        <a href="#">Learn more</a>
      </div>
      <div>
        <i class="fa-sharp fa-solid fa-crop-simple"></i>
        <h2>Service 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis vel cumque voluptatem quisquam vero voluptatum doloremque.</p>
        <a href="#">Learn more</a>
      </div>
      <div>
        <i class="fa-brands fa-app-store"></i>
        <h2>Service 3</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis vel cumque voluptatem quisquam vero voluptatum doloremque.</p>
        <a href="#">Learn more</a>
      </div>
    </div>
  </div>
</section>

                        <!------------- PORTFOLIO -------------->
<section class="portfolio">
  <div class="container">
    <h1>My Work</h1>
    <div class="work-list">
      <div class="work">
        <picture>
            <source loading="lazy" srcset="build/img/work-10.webp" type="image/webp">
            <img loading="lazy" src="src/img/work-10.jpg" alt="Work Image">
        </picture>
        <div class="layer">
          <h3>Social Media App</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatibus placeat molestias maxime, beatae saepe.</p>
          <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </div>
      <div class="work">
        <picture>
            <source loading="lazy" srcset="build/img/work-3.webp" type="image/webp">
            <img loading="lazy" src="src/img/work-3.jpg" alt="Work Image">
        </picture>
        <div class="layer">
          <h3>Music App</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatibus placeat molestias maxime, beatae saepe.</p>
          <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </div>
      <div class="work">
        <picture>
            <source loading="lazy" srcset="build/img/work-8.webp" type="image/webp">
            <img loading="lazy" src="src/img/work-8.png" alt="Work Image">
        </picture>
        <div class="layer">
          <h3>Online Shopping App</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatibus placeat molestias maxime, beatae saepe.</p>
          <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
      </div>
    </div>
    <a href="#" class="btn">See more</a>
  </div>
</section>

                        <!------------- CONTACT -------------->
<section class="contact">

  <div class="container">
  <h1>Contact Me</h1>
    <div class="row">
      <div class="contact-left">
        <p><i class="fa-solid fa-envelope"></i>dcampos0495@gmail.com</p>
        <p><i class="fa-solid fa-square-phone"></i>+52 1 312 109 6301</p>
        <div class="social-icons">
          <a href="https://www.facebook.com/dianacamza/"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://www.linkedin.com/in/diana-campos-zamora-a43a6b159/"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://github.com/Diana-Camz"><i class="fa-brands fa-github"></i></i></a>
          <a href="https://www.instagram.com/diana_camz/"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <a href="src/img/my-cv-diana-campos.pdf" download class="btn btn2">Download CV</a>
      </div>
      <div class="contact-right">
        <form action="">
          <input type="text" name="name" placeholder="Your Name" required>
          <input type="email" name="email" placeholder="Your Email" required>
          <textarea name="message" rows="6" placeholder="Your Message"></textarea>
          <button type="submit" class="btn btn2">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

                        <!------------- FOOTER -------------->
<footer>
  <div class="copyright">
    <p>Copyright ©Diana Made with<i class="fa-regular fa-heart"></i>by Easy Tutorials</p>
  </div>
</footer>


<script src="build/js/bundle.min.js"></script>
</body>
</html>


