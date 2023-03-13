document.addEventListener('DOMContentLoaded', function() {
  eventListenerSk();
  eventListenerEx();
  eventListenerEd();
  eventListenerFront()
  eventListenerBack()
  eventListenerPrep()
  eventListenerMobile();
});

//----------------------EVENTS LISTENERS---------------------------
//  ABOUT
function eventListenerSk() {
  const tabLinks = document.querySelector('.skills');
    tabLinks.addEventListener('click', aboutDetailsSk);    
}

function eventListenerEx() {
  const tabLinks = document.querySelector('.experience');
    tabLinks.addEventListener('click', aboutDetailsEx);    
}

function eventListenerEd() {
  const tabLinks = document.querySelector('.education');
    tabLinks.addEventListener('click', aboutDetailsEd);    
}

//  SERVICES
function eventListenerFront() {
  const tabService = document.querySelector('.services-list__front');
    tabService.addEventListener('click', serviceDetailsFront);    
}

function eventListenerBack() {
  const tabService = document.querySelector('.services-list__back');
    tabService.addEventListener('click', serviceDetailsBack);    
}

function eventListenerPrep() {
  const tabService = document.querySelector('.services-list__prep');
    tabService.addEventListener('click', serviceDetailsPrep);    
}

//  MOBILE
function eventListenerMobile() {
  const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', mobileMenu2);    
}
//----------------------VARIABLES---------------------------
const activeLinkSk = document.querySelector('.skills');
const activeContSk = document.querySelector('.skillsCont');

const activeLinkEx = document.querySelector('.experience');
const activeContEx = document.querySelector('.experienceCont');

const activeLinkEd = document.querySelector('.education');
const activeContEd = document.querySelector('.educationCont');

const activeServices = document.querySelector('.services-list');

//----------------------EVENTS FROM ABOUT---------------------------
//SKILLS:
function aboutDetailsSk() {
  activeLinkSk.classList.toggle('active-link');
  activeContSk.classList.toggle('active-tab');
  
  if(activeLinkEx.classList.contains('active-link') || activeLinkEd.classList.contains('active-link')) {
    activeLinkEx.classList.remove('active-link');
    activeLinkEd.classList.remove('active-link');
  };
  if(activeContEx.classList.contains('active-tab') || activeContEd.classList.contains('active-tab')) {
    activeContEx.classList.remove('active-tab');
    activeContEd.classList.remove('active-tab');
  };
};
//EXPERIENCE:
function aboutDetailsEx() {

  activeLinkEx.classList.toggle('active-link');
  activeContEx.classList.toggle('active-tab');
  
  if(activeLinkSk.classList.contains('active-link') || activeLinkEd.classList.contains('active-link')) {
    activeLinkSk.classList.remove('active-link');
    activeLinkEd.classList.remove('active-link');
  };
  if(activeContSk.classList.contains('active-tab') || activeContEd.classList.contains('active-tab')) {
    activeContSk.classList.remove('active-tab');
    activeContEd.classList.remove('active-tab');
  };
};
//EDUCATION:
function aboutDetailsEd() {

  activeLinkEd.classList.toggle('active-link');
  activeContEd.classList.toggle('active-tab');
  
  if(activeLinkSk.classList.contains('active-link') || activeLinkEx.classList.contains('active-link')) {
    activeLinkSk.classList.remove('active-link');
    activeLinkEx.classList.remove('active-link');
  };
  if(activeContSk.classList.contains('active-tab') || activeContEx.classList.contains('active-tab')) {
    activeContSk.classList.remove('active-tab');
    activeContEx.classList.remove('active-tab');
  };
};
//----------------------EVENTS FROM SERVICES---------------------------
function serviceDetailsFront() {

  activeServices.classList.toggle('active-front');
  //activeContEd.classList.toggle('active-tab');
  if(activeServices.classList.contains('active-back') || activeServices.classList.contains('active-prep')){
    activeServices.classList.remove('active-back') || activeServices.classList.remove('active-prep');
  };
  /*if(activeContSk.classList.contains('active-tab') || activeContEx.classList.contains('active-tab')) {
    activeContSk.classList.remove('active-tab');
    activeContEx.classList.remove('active-tab');
  };*/
};

function serviceDetailsBack() {

  activeServices.classList.toggle('active-back');
  //activeContEd.classList.toggle('active-tab');
  
 if(activeServices.classList.contains('active-front') || activeServices.classList.contains('active-prep')){
    activeServices.classList.remove('active-front') || activeServices.classList.remove('active-prep');
  };
  /*if(activeContSk.classList.contains('active-tab') || activeContEx.classList.contains('active-tab')) {
    activeContSk.classList.remove('active-tab');
    activeContEx.classList.remove('active-tab');
  };*/
};

function serviceDetailsPrep() {

  activeServices.classList.toggle('active-prep');
  //activeContEd.classList.toggle('active-tab');
  
  if(activeServices.classList.contains('active-front') || activeServices.classList.contains('active-back')){
    activeServices.classList.remove('active-front') || activeServices.classList.remove('active-back');
  };
  /*if(activeContSk.classList.contains('active-tab') || activeContEx.classList.contains('active-tab')) {
    activeContSk.classList.remove('active-tab');
    activeContEx.classList.remove('active-tab');
  };*/
};

//----------------------EVENTS FROM MOBILE MENU---------------------------
function mobileMenu2(){
  const activeMobile = document.querySelector('.nav');

  activeMobile.classList.toggle('active-mobile');
  
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
  //window.location.href=`mailto:dcampos0495@gmail.com?subject=${name}%7C%20has%20contacted%20you%20from%20your%20Portolio&body=Name%3A%20${name}%0AEmail%3A%20${email}%0AMessage%3A%20${message}`
