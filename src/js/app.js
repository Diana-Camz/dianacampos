document.addEventListener('DOMContentLoaded', function() {
  eventListenerSk();
  eventListenerEx();
  eventListenerEd();
  //eventListenerAbout();
  eventListenerFront()
  eventListenerBack()
  eventListenerPrep()
  eventListenerMobile();
  eventListenerMobileDisabled()
});

//----------------------EVENTS LISTENERS---------------------------
//  ABOUT
/*function eventListenerAbout() {
  const tabLinks = document.querySelectorAll('.about-titles__link');
  for (let i = 0; i < tabLinks.length; i++){
    tabLinks[i].addEventListener('click', aboutDetails);
  }   
}*/
function eventListenerSk() {
  const tabLinks = document.querySelector('.about-titles__link--skills');
    tabLinks.addEventListener('click', aboutDetailsSk);    
};

function eventListenerEx() {
  const tabLinks = document.querySelector('.about-titles__link--experience');
    tabLinks.addEventListener('click', aboutDetailsEx);    
};

function eventListenerEd() {
  const tabLinks = document.querySelector('.about-titles__link--education');
    tabLinks.addEventListener('click', aboutDetailsEd);    
};

//  SERVICES
function eventListenerFront() {
  const tabService = document.querySelector('.service__front');
    tabService.addEventListener('click', serviceDetailsFront);    
};

function eventListenerBack() {
  const tabService = document.querySelector('.service__back');
    tabService.addEventListener('click', serviceDetailsBack);    
};

function eventListenerPrep() {
  const tabService = document.querySelector('.service__prep');
    tabService.addEventListener('click', serviceDetailsPrep);    
};

//  MOBILE
function eventListenerMobile() {
  const mobileMenu = document.querySelector('.mobile-icon');
    mobileMenu.addEventListener('click', mobileActive);    
};

function eventListenerMobileDisabled() {
  const mobileMenu = document.querySelectorAll('.header-nav__li');
   
    for (let i = 0; i < mobileMenu.length; i++) {
      mobileMenu[i].addEventListener("click", mobileDisabled);
    };
};
//----------------------VARIABLES---------------------------
/*const activeLink = document.querySelector('.about-titles__link');
const activeCont = document.querySelector('.about-content');*/
const activeLinkSk = document.querySelector('.about-titles__link--skills');
const activeContSk = document.querySelector('.about-content--skills');

const activeLinkEx = document.querySelector('.about-titles__link--experience');
const activeContEx = document.querySelector('.about-content--experience');

const activeLinkEd = document.querySelector('.about-titles__link--education');
const activeContEd = document.querySelector('.about-content--education');

const activeServices = document.querySelector('.services');

//----------------------EVENTS FROM ABOUT---------------------------
//SKILLS:
/*function aboutDetails() {
  activeLink.classList.toggle('about-titles__link--active');
  activeCont.classList.toggle('about-content--active');
}*/
function aboutDetailsSk() {
  activeLinkSk.classList.toggle('about-titles__link--active');
  activeContSk.classList.toggle('about-content--active');
  
  if(activeLinkEx.classList.contains('about-titles__link--active') || activeLinkEd.classList.contains('about-titles__link--active')) {
    activeLinkEx.classList.remove('about-titles__link--active');
    activeLinkEd.classList.remove('about-titles__link--active');
  };
  if(activeContEx.classList.contains('about-content--active') || activeContEd.classList.contains('about-content--active')) {
    activeContEx.classList.remove('about-content--active');
    activeContEd.classList.remove('about-content--active');
  };
};
//EXPERIENCE:
function aboutDetailsEx() {

  activeLinkEx.classList.toggle('about-titles__link--active');
  activeContEx.classList.toggle('about-content--active');
  
  if(activeLinkSk.classList.contains('about-titles__link--active') || activeLinkEd.classList.contains('about-titles__link--active')) {
    activeLinkSk.classList.remove('about-titles__link--active');
    activeLinkEd.classList.remove('about-titles__link--active');
  };
  if(activeContSk.classList.contains('about-content--active') || activeContEd.classList.contains('about-content--active')) {
    activeContSk.classList.remove('about-content--active');
    activeContEd.classList.remove('about-content--active');
  };
};
//EDUCATION:
function aboutDetailsEd() {

  activeLinkEd.classList.toggle('about-titles__link--active');
  activeContEd.classList.toggle('about-content--active');
  
  if(activeLinkSk.classList.contains('about-titles__link--active') || activeLinkEx.classList.contains('about-titles__link--active')) {
    activeLinkSk.classList.remove('about-titles__link--active');
    activeLinkEx.classList.remove('about-titles__link--active');
  };
  if(activeContSk.classList.contains('about-content--active') || activeContEx.classList.contains('about-content--active')) {
    activeContSk.classList.remove('about-content--active');
    activeContEx.classList.remove('about-content--active');
  };
};
//----------------------EVENTS FROM SERVICES---------------------------
function serviceDetailsFront() {
  activeServices.classList.toggle('service__front--active');
  
  if(activeServices.classList.contains('service__back--active') || activeServices.classList.contains('service__prep--active')){
    activeServices.classList.remove('service__back--active') || activeServices.classList.remove('service__prep--active');
  };
};

function serviceDetailsBack() {
  activeServices.classList.toggle('service__back--active');
  
 if(activeServices.classList.contains('service__front--active') || activeServices.classList.contains('service__prep--active')){
    activeServices.classList.remove('service__front--active') || activeServices.classList.remove('service__prep--active');
  };
};

function serviceDetailsPrep() {
  activeServices.classList.toggle('service__prep--active');
  
  if(activeServices.classList.contains('service__front--active') || activeServices.classList.contains('service__back--active')){
    activeServices.classList.remove('service__front--active') || activeServices.classList.remove('service__back--active');
  };
};

//----------------------EVENTS FROM MOBILE MENU---------------------------
function mobileActive(){
  const activeMobile = document.querySelector('.header-nav');

  activeMobile.classList.toggle('mobile-icon--active');
  
};

function mobileDisabled(){
  const disabledMobile = document.querySelector('.header-nav');

  disabledMobile.classList.remove('mobile-icon--active');

  
};

//----------------------SEND EMAIL FROM FORM---------------------------

/*const formId = document.querySelector('#form');
//const mailToId = document.querySelector('#mailTo')

formId.addEventListener('submit', handleSubmit);

function handleSubmit(e){
  e.preventDefault();
  //console.log("enviado desde formulario");
  const form = new FormData(this);
  //console.log(form.get('Message'));
  const name = document.querySelector('Name');
  const email = document.querySelector('Email');
  const message = document.querySelector('Message');

  console.log(name);
  window.location.href=`mailto:dcampos0495@gmail.com?subject=${name}%7C%20has%20contacted%20you%20from%20your%20Portolio&body=Name%3A%20${name}%0AEmail%3A%20${email}%0AMessage%3A%20${message}`
}*/