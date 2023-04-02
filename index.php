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
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/dec3fe7f9b.js" crossorigin="anonymous"></script>
  <title>Diana Campos</title>
</head>
<body>

<header class="header-sticky">
  <div class="header">
      <a href="/">  <!--LOGO IMAGE NAME-->
        <picture>
          <source loading="lazy" srcset="build/img/image-logo.webp" type="image/webp">
          <img class="header__img" loading="lazy" src="src/img/image-logo.jpg" alt="Logo Image">
        </picture>
      </a>
      <div class="mobile-icon">
        <i class="fa-solid fa-bars"></i>
      </div>
      <nav class="header-nav">
      <ul class="header-nav__ul">
        <li class="header-nav__li"><a class="header-nav__a" href="#main">Home</a></li>
        <li class="header-nav__li"><a class="header-nav__a" href="#about">About</a></li>
        <li class="header-nav__li"><a class="header-nav__a" href="#services">Services</a></li>
        <li class="header-nav__li"><a class="header-nav__a" href="#portfolio">Portfolio</a></li>
        <li class="header-nav__li"><a class="header-nav__a" href="#contact">Contact</a></li>
      </ul>      
    </nav>
  </div>
</header>

<main id="main">
  <div class="main">
    <div class="main-text">
      <p>FrontEnd Developer Student</p>
      <h1 class="main-text__h1">Hi, I'm <span class="main-text__span">Diana</span>Campos From Mexico</h1>
    </div>
    <div>  <!--IMAGE BACKGROUND-->      
        <picture>
          <source loading="lazy" srcset="build/img/image-background.webp" type="image/webp">
          <img class="main-image" loading="lazy" src="src/img/image-background.png" alt="Background Image">
        </picture>
    </div>
  </div>
</main>

                        <!------------- ABOUT -------------->
<section id="about">
  <div class="container">
    <div class="about">
      <div class="about-col-1">
        <picture class="about-col-1__picture">
          <source loading="lazy" srcset="build/img/user.webp" type="image/webp">
          <img class="about-col-1__img" loading="lazy" src="src/img/user.jpg" alt="User Image">
        </picture>
      </div>
      <div class="about-col-2">
        <h1  class="about-col-2__h1">About me</h1>
        <p class="about-col-2__p">I am a Psychologist looking for the job of my dreams, which allows me to set new goals, feel new motivations within a challenging environment that challenges my knowledge and skills. I enjoy well-structured code and am passionate about knowing that it can always improve.</p><br>
        <p class="about-col-2__p">I am currently a Web Development student on my own, and if I am not practicing you can find me exercising or enjoying the afternoon with my boyfriend or my cats.</p>
        <div class="about-titles">
          <p class="about-titles__link about-titles__link--skills">Skills</p>
          <div class="about-content about-content--skills">
            <ul class="about-content__ul">
              <li class="about-content__li"><span class="about-content__li--span">Organizational capacity:</span><br>Anticipation, planning, adaptation and time management to fulfill the requested tasks.</li>
              <li class="about-content__li"><span class="about-content__li--span">​Communication Skills:</span><br>listening and communication skills, managing to communicate my ideas, opinions and intentions in a clear, assertive and open to debate manner.</li>
              <li class="about-content__li"><span class="about-content__li--span">​Flexibility:</span><br>I have managed to adapt to the different activities that the position where I have worked has required.</li>
            </ul>
          </div>
          <p class="about-titles__link about-titles__link--experience">Experience</p>
          <div class="about-content about-content--experience">
            <ul>
              <li class="about-content__li"><span></span><br>For now I have no experience in any company, all the knowledge that I have acquired and projects that I have carried out are thanks to the learning that I obtained from the internet on my own.</li>
            </ul>
          </div>
          <p class="about-titles__link about-titles__link--education">Education</p>
          <div class="about-content about-content--education">
            <ul>
              <li class="about-content__li"><span class="about-content__li--span">​Bachelor's Degree</span><br>​Psychology 2013-2018</li>
              <li class="about-content__li"><span class="about-content__li--span">Udemy Course</span><br>Complete web course with HTML, CSS, JS AJAX, PHP, and MySQL: Juan Pablo de la Torre. 344/798 classes.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>   
  </div>
</section>

                        <!------------- SERVICES -------------->
<section id="services">
  <div class="container">
    <h1 class="container__h1">My Services</h1>
    <div class="services">
      <div class="service service__front">
        <i class="service__icon fa-sharp fa-solid fa-code"></i>
        <h2 class="service__h2">Frontend</h2>
        <p class="service__p">I have carried out different projects that are related to the Frontend area. My next step is to take <b class="service__b">React</b> courses and start doing projects with this framework.</p>
        <!--<a href="#" class="service__a">Learn more</a>-->
        <i class="service__icon2 fa-brands fa-html5"></i>
        <i class="service__icon2 fa-brands fa-css3-alt"></i>
        <i class="service__icon2 fa-brands fa-js"></i>
      </div>
      <div class="service service__back">
        <i class="service__icon fa-solid fa-gears"></i>
        <h2 class="service__h2">Backend</h2>
        <p class="service__p">I have developed simple CRUDs with <b class="service__b">PHP</b> and <b class="service__b">SQL</b>. However, it is an area in which I would like to continue training by learning to do CRUDs with other languages.</p>
        <!--<a href="#" class="service__a">Learn more</a>-->
        <i class="service__icon2 fa-brands fa-php"></i>
        <i class="service__icon2 fa-solid fa-database"></i>
      </div>
      <div class="service service__prep">
        <i class="service__icon fa-solid fa-wrench"></i>
        <h2 class="service__h2">Preprocessors and tools</h2>
        <p class="service__p">I have done projects using tools like <b class="service__b">Gulp</b>, <b class="service__b">npm</b> and <b class="service__b">GIT</b>. I also use <b class="service__b">SASS</b> as a pre-processor to improve the style sheet code and <b class="service__p">BEM</b> as a design methodology. I would like to learn other tools that allow me to improve and optimize my projects. Like for example, <b class="service__b">VITE</b>, <b class="service__b">SUITE CSS</b>, <b class="service__b">ESLINT</b> and <b class="service__b">Figma</b>.</p>
        <!--<a href="#" class="service__a">Learn more</a>-->
        <i class="service__icon2 fa-brands fa-gulp"></i>
        <i class="service__icon2 fa-brands fa-sass"></i>
        <i class="service__icon2 fa-brands fa-git-alt"></i>
        <i class="service__icon2 fa-brands fa-npm"></i>
      </div>
    </div>
  </div>
</section>

                        <!------------- PORTFOLIO -------------->
<section id="portfolio">
  <div class="container">
    <h1 class="container__h1">My Work</h1>
    <div class="portfolio">
      <div class="proyect">
        <picture>
            <source loading="lazy" srcset="build/img/work-10.webp" type="image/webp">
            <img class="proyect__img" loading="lazy" src="src/img/work-10.jpg" alt="Work Image">
        </picture>
        <div class="proyect-info">
          <h3 class="proyect-info__h3">Real State</h3>
          <p>Web page designed to show, add, update and delete properties with login.</p>
          <div>
            <a class="proyect-info__a" href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            <a class="proyect-info__a" href="#"><i class="fa-solid fa-code"></i></a>
          </div>
        </div>
      </div>
      <div class="proyect">
        <picture>
            <source loading="lazy" srcset="build/img/work-3.webp" type="image/webp">
            <img class="proyect__img" loading="lazy" src="src/img/work-3.jpg" alt="Work Image">
        </picture>
        <div class="proyect-info">
          <h3 class="proyect-info__h3">BarberShop</h3>
          <p>Web page created to schedule appointments for haircuts and other services.</p>
          <div>
            <a class="proyect-info__a" href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            <a class="proyect-info__a" href="#"><i class="fa-solid fa-code"></i></a>
          </div>
        </div>
      </div>
      <div class="proyect">
        <picture>
            <source loading="lazy" srcset="build/img/work-8.webp" type="image/webp">
            <img class="proyect__img" loading="lazy" src="src/img/work-8.png" alt="Work Image">
        </picture>
        <div class="proyect-info">
          <h3 class="proyect-info__h3">Online Shopping App</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatibus placeat molestias maxime, beatae saepe.</p>
          <div>
            <a class="proyect-info__a" href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            <a class="proyect-info__a" href="#"><i class="fa-solid fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="button">See more</a>
  </div>
</section>

                        <!------------- CONTACT -------------->
<section id="contact">
  <div class="container">
  <h1 class="container__h1">Contact Me</h1>
    <div class="contact">
      <div class="contact-info">
        <p class="contact-info__p"><i class="contact-info__p--i fa-solid fa-envelope"></i>dcampos0495@gmail.com</p>
        <div class="contact-icons">
          <a class="contact-icons__a" href="https://www.linkedin.com/in/diana-camz"><i class="fa-brands fa-linkedin"></i></a>
          <a class="contact-icons__a" href="https://github.com/Diana-Camz"><i class="fa-brands fa-github"></i></i></a>
          <a class="contact-icons__a" href="https://www.facebook.com/dianacamza/"><i class="fa-brands fa-facebook"></i></a>
          <a class="contact-icons__a" href="https://www.instagram.com/diana_camz/"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <a href="src/img/my-cv-diana-campos.pdf" download class="button button--info">Download CV</a>
      </div>
      <div class="contact-form">
          <form class="form">
        <!--<form id="form" action="" method="POST" target="">-->
          <input type="text" name="Name" placeholder="Your Name" class="form__input" required>
          <input type="email" name="Email" placeholder="Your Email" class="form__input" required>
          <textarea name="Message" rows="6" placeholder="Your Message" class="form__input"></textarea>
          <button type="submit" class="button button--form">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

                        <!------------- FOOTER -------------->
<footer>
  <div class="footer">
    <p>Copyright ©Diana Made with<i class="footer__i fa-regular fa-heart"></i>by Easy Tutorials</p>
  </div>
</footer>


<script src="build/js/bundle.min.js"></script>
</body>
</html>

<!--<section id="about">
  <div class="container">
    <div class="about">
      <div class="about-col-1">
        <picture class="about-col-1__picture">
          <source loading="lazy" srcset="build/img/user.webp" type="image/webp">
          <img class="about-col-1__img" loading="lazy" src="src/img/user.jpg" alt="User Image">
        </picture>
      </div>
      <div class="about-col-2">
        <h1  class="about-col-2__h1">About me</h1>
        <p class="about-col-2__p">I am a Psychologist looking for the job of my dreams, which allows me to set new goals, feel new motivations within a challenging environment that challenges my knowledge and skills. I enjoy well-structured code and am passionate about knowing that it can always improve.</p><br>
        <p class="about-col-2__p">I am currently a Web Development student on my own, and if I am not practicing you can find me exercising or enjoying the afternoon with my boyfriend or my cats.</p>
        <div class="about-titles">
          <p class="about-titles__link about-titles__link--skills">Skills</p>
          <p class="about-titles__link about-titles__link--experience">Experience</p>
          <p class="about-titles__link about-titles__link--education">Education</p>
        </div> </div>
        <div class="about-content about-content--skills">
          <ul>
            <li class="about-content__li"><span class="about-content__li--span">Organizational capacity:</span><br>Anticipation, planning, adaptation and time management to fulfill the requested tasks.</li>
            <li class="about-content__li"><span class="about-content__li--span">​Communication Skills:</span><br>listening and communication skills, managing to communicate my ideas, opinions and intentions in a clear, assertive and open to debate manner.</li>
            <li class="about-content__li"><span class="about-content__li--span">​Flexibility:</span><br>I have managed to adapt to the different activities that the position where I have worked has required.</li>
          </ul>
        </div>
        <div class="about-content about-content--experience">
          <ul>
            <li class="about-content__li"><span></span><br>For now I have no experience in any company, all the knowledge that I have acquired and projects that I have carried out are thanks to the learning that I obtained from the internet on my own.</li>
          </ul>
        </div>
        <div class="about-content about-content--education">
          <ul>
            <li class="about-content__li"><span class="about-content__li--span">​Bachelor's Degree</span><br>​Psychology 2013-2018</li>
            <li class="about-content__li"><span class="about-content__li--span">Udemy Course</span><br>Complete web course with HTML, CSS, JS AJAX, PHP, and MySQL: Juan Pablo de la Torre. 344/798 classes.</li>
          </ul>
        </div>
        --- comentario</div>
      </div>
    </div>   
  </div>
</section>-->
