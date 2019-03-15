var navHeight = 60;
document.documentElement.style.setProperty('--nav-height', navHeight + 'px');

$(document).ready(function(){
  responsiveHomeScreen();
  $('.paroller').paroller(); // paroller init

  $('#navigation').sticky({topSpacing:0});

  // add scroll spy
  $('body').scrollspy({target: ".menu-nav", offset: navHeight + 10});

  // collapse navbar on click
  $('.nav-link').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  $('.slider').appear();

  $(document.body).on('appear', '.slider', function(event, $affected){
    $(this)[0].classList.add('slide-in');
  });

  $.force_appear();

  window.onresize = function(){
    responsiveHomeScreen();
    updateParoller();
  }

  window.onscroll = function() {
    backTopButtonEnable();
    alwaysEnableFirstNavItem();
  }

  $('body').removeClass('fade-out');
});

function getViewportHeight(){
  return window.innerHeight
  || document.documentElement.clientHeight
  || document.body.clientHeight;
}

function responsiveHomeScreen() {
  $(".wrapper-home").css("height", getViewportHeight());
}

function alwaysEnableFirstNavItem() {
  if ($(".navbar-custom .navbar-collapse .menu-nav .nav-item .nav-link.active")[0]){
  } else {
    document.getElementById("default-link").classList.add("active");
  }
}

function updateParoller() {
  //todo
  $('.paroller').paroller();
}

window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#fa7268",
        "text": "#ffffff"
      },
      "button": {
        "background": "transparent",
        "text": "#ffffff",
        "border": "#ffffff"
      }
    }
  })});
