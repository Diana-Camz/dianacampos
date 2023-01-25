document.addEventListener('DOMContentLoaded', function() {
  eventListenerSk();
  eventListenerEx();
  eventListenerEd();
  eventListenerMobile();
});

//----------------------EVENTS LISTENERS---------------------------
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

function eventListenerMobile() {
  const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', mobileMenu2);    
}

//----------------------EVENTS FROM SKILLS---------------------------
function aboutDetailsSk() {
  const activeLinkSk = document.querySelector('.skills');
  const activeContSk = document.querySelector('.skillsCont');

  const activeLinkEx = document.querySelector('.experience');
  const activeContEx = document.querySelector('.experienceCont');

  const activeLinkEd = document.querySelector('.education');
  const activeContEd = document.querySelector('.educationCont');

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
//----------------------EVENTS FROM EXPERIENCE---------------------------
function aboutDetailsEx() {
  const activeLinkSk = document.querySelector('.skills');
  const activeContSk = document.querySelector('.skillsCont');

  const activeLinkEx = document.querySelector('.experience');
  const activeContEx = document.querySelector('.experienceCont');

  const activeLinkEd = document.querySelector('.education');
  const activeContEd = document.querySelector('.educationCont');

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
//----------------------EVENTS FROM EDUCATION---------------------------
function aboutDetailsEd() {
  const activeLinkSk = document.querySelector('.skills');
  const activeContSk = document.querySelector('.skillsCont');

  const activeLinkEx = document.querySelector('.experience');
  const activeContEx = document.querySelector('.experienceCont');

  const activeLinkEd = document.querySelector('.education');
  const activeContEd = document.querySelector('.educationCont');

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
//----------------------EVENTS FROM MOBILE MENU---------------------------
function mobileMenu2(){
  const activeMobile = document.querySelector('.nav');

  activeMobile.classList.toggle('active-mobile');
  
}

 
