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
  <title>Diana Campos</title>
</head>
<body>

<header class="header">
  <div class="header-nav">
      <a href="/" class="image-logo-name">  <!--LOGO IMAGE NAME-->
        <picture>
          <source loading="lazy" srcset="build/img/image-logo.webp" type="image/webp">
          <img loading="lazy" src="src/img/image-logo.jpg" alt="Logo Image">
        </picture>
      </a>
      <div class="mobile-menu">
        <i class="fa-solid fa-bars"></i>
      </div>
      <nav class="nav">
      <ul>
        <li><a href="#header">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>      
    </nav>
  </div>
</header>
  <div id="header" class="header-container">
    <div class="header-text">
      <p>FrontEnd Developer Student</p>
      <h1>Hi, I'm <span>Diana</span>Campos From Mexico</h1>
    </div>
    <div class="header-image">  <!--IMAGE BACKGROUND-->      
        <picture>
          <source loading="lazy" srcset="build/img/image-background.webp" type="image/webp">
          <img loading="lazy" src="src/img/image-background.png" alt="Background Image">
        </picture>
    </div>
  </div>

                        <!------------- ABOUT -------------->
<section id="about" class="about">
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
        <p class="about-text">I am a Psychologist looking for the job of my dreams, which allows me to set new goals, feel new motivations within a challenging environment that challenges my knowledge and skills. I enjoy well-structured code and am passionate about knowing that it can always improve.</p><br>
        <p class="about-text">I am currently a Web Development student on my own, and if I am not practicing you can find me exercising or enjoying the afternoon with my boyfriend or my cats.</p>
        <div class="tab-titles">
          <p class="tab-links skills">Skills</p>
          <p class="tab-links experience">Experience</p>
          <p class="tab-links education">Education</p>
        </div>
        <div class="tab-contents skillsCont">
          <ul>
            <li><span>Organizational capacity:</span><br>Anticipation, planning, adaptation and time management to fulfill the requested tasks.</li>
            <li><span>​Communication Skills:</span><br>listening and communication skills, managing to communicate my ideas, opinions and intentions in a clear, assertive and open to debate manner.</li>
            <li><span>​Flexibility:</span><br>I have managed to adapt to the different activities that the position where I have worked has required.</li>
          </ul>
        </div>
        <div class="tab-contents experienceCont">
          <ul>
            <li><span></span><br>For now I have no experience in any company, all the knowledge that I have acquired and projects that I have carried out are thanks to the learning that I obtained from the internet on my own.</li>
          </ul>
        </div>
        <div class="tab-contents educationCont">
          <ul>
            <li><span>​Bachelor's Degree</span><br>​Psychology 2013-2018</li>
            <li><span>Udemy Course</span><br>Complete web course with HTML, CSS, JS AJAX, PHP, and MySQL: Juan Pablo de la Torre. 344/798 classes.</li>
            <!--<li><span>Education 3</span><br>Insert your education</li>-->
          </ul>
        </div>
      </div>
    </div>   
  </div>
</section>

                        <!------------- SERVICES -------------->
<section id="services" class="services">
  <div class="container">
    <h1>My Services</h1>
    <div class="services-list">
      <div class="services-list__front">
        <i class="icon fa-sharp fa-solid fa-code"></i>
        <h2>Frontend</h2>
        <p>I have carried out different projects that are related to the Frontend area. My next step is to take <b>React</b> courses and start doing projects with this framework.</p>
        <a href="#">Learn more</a>
        <i class="icon2 fa-brands fa-html5"></i>
        <i class="icon2 fa-brands fa-css3-alt"></i>
        <i class="icon2 fa-brands fa-js"></i>
      </div>
      <div class="services-list__back">
        <i class="icon fa-solid fa-gears"></i>
        <h2>Backend</h2>
        <p>I have developed simple CRUDs with <b>PHP</b> and <b>SQL</b>. However, it is an area in which I would like to continue training by learning to do CRUDs with other languages.</p>
        <a href="#">Learn more</a>
        <i class="icon2 fa-brands fa-php"></i>
        <i class="icon2 fa-solid fa-database"></i>
      </div>
      <div class="services-list__prep">
        <i class="icon fa-solid fa-wrench"></i>
        <h2>Preprocessors and tools</h2>
        <p>I have done projects using tools like <b>Gulp</b>, <b>npm</b> and <b>GIT</b>. I also use <b>SASS</b> as a pre-processor to improve the style sheet code and <b>BEM</b> as a design methodology. I would like to learn other tools that allow me to improve and optimize my projects. Like for example, <b>VITE</b>, <b>SUITE CSS</b>, <b>ESLINT</b> and <b>Figma</b>.</p>
        <a href="#">Learn more</a>
        <i class="icon2 fa-brands fa-gulp"></i>
        <i class="icon2 fa-brands fa-sass"></i>
        <i class="icon2 fa-brands fa-git-alt"></i>
        <i class="icon2 fa-brands fa-npm"></i>
      </div>
    </div>
  </div>
</section>

                        <!------------- PORTFOLIO -------------->
<section id="portfolio" class="portfolio">
  <div class="container">
    <h1>My Work</h1>
    <div class="work-list">
      <div class="work">
        <picture>
            <source loading="lazy" srcset="build/img/work-10.webp" type="image/webp">
            <img loading="lazy" src="src/img/work-10.jpg" alt="Work Image">
        </picture>
        <div class="layer">
          <h3>Real State</h3>
          <p>Web page designed to show, add, update and delete properties with login.</p>
          <div>
            <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            <a href="#"><i class="fa-solid fa-code"></i></a>
          </div>
        </div>
      </div>
      <div class="work">
        <picture>
            <source loading="lazy" srcset="build/img/work-3.webp" type="image/webp">
            <img loading="lazy" src="src/img/work-3.jpg" alt="Work Image">
        </picture>
        <div class="layer">
          <h3>BarberShop</h3>
          <p>Web page created to schedule appointments for haircuts and other services.</p>
          <div>
            <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            <a href="#"><i class="fa-solid fa-code"></i></a>
          </div>
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
          <div>
            <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            <a href="#"><i class="fa-solid fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="btn">See more</a>
  </div>
</section>

                        <!------------- CONTACT -------------->
<section id="contact" class="contact">

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
          <form>
        <!--<form id="form" action="" method="POST" target="">-->
          <input type="text" name="Name" placeholder="Your Name" required>
          <input type="email" name="Email" placeholder="Your Email" required>
          <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
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


