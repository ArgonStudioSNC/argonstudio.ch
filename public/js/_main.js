var navHeight = 60;
document.documentElement.style.setProperty('--nav-height', navHeight + 'px');

$(document).ready(function(){
  $(".wrapper-home").css("height", getViewportHeight());
  $('.paroller').paroller(); // paroller init
  $('.paroller-element').paroller({
    factor: -0.1,
    type: 'foreground',
    direction: 'horizontal',
  });

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

  $('body').removeClass('fade-out');

  function getViewportHeight(){
    return window.innerHeight
    || document.documentElement.clientHeight
    || document.body.clientHeight;
  }

  window.addEventListener('resize', function() {
    // responsize home screen
    $(".wrapper-home").css("height", getViewportHeight());

    //todo update paroller
    $('.paroller').paroller();
  });

  window.addEventListener('scroll',
    function(e) {
      // back to top element
      if ($(".navbar-custom .navbar-collapse .menu-nav .nav-item .nav-link.active")[0]){
      } else {
        document.getElementById("default-link").classList.add("active");
      }
    }, false
  );

  // horizontal parallax on clip elements
  var parallaxMaster = document.querySelector('#parallax-svg-master');
  var svgElement = document.querySelector('#parallax-svg');
  var clipElement = document.querySelector('#parallax-clip');
  var svgPoint = svgElement.createSVGPoint();
  var initialX= parseFloat(clipElement.getAttribute('x'));

  function updateSVGParallax(svgXCoord){
    clipElement.setAttribute('x', initialX + svgXCoord);
  }

  function screenToSVG(val, svg){
    return val * svg.getScreenCTM().inverse().a;
  }

  window.addEventListener('scroll',
    function(e) {
      var st = window.getComputedStyle(parallaxMaster, null);
      var tr = st.getPropertyValue("-webkit-transform") ||
         st.getPropertyValue("-moz-transform") ||
         st.getPropertyValue("-ms-transform") ||
         st.getPropertyValue("-o-transform") ||
         st.getPropertyValue("transform") ||
         "fail...";

      var mat = tr.match(/^matrix\((.+)\)$/);
      var xCoord = mat ? parseFloat(mat[1].split(', ')[4]) : 0;
      updateSVGParallax(screenToSVG(xCoord ,svgElement));
    }, false
  );
});

window.addEventListener("load",
  function(){
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
    })
  }, false
);
