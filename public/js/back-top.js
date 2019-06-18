var active = false;

$(document).ready(function(){
  window.addEventListener('scroll', function() {
    var height = window.innerHeight
    || document.documentElement.clientHeight
    || document.body.clientHeight;
    var scrollTop = document.documentElement.scrollTop;

    if (scrollTop > height/1.5 && !active) {
      $("#back-top").fadeTo('fast', 0.5);
      active = true;
    } else if (scrollTop <= height/1.5 && active){
      $("#back-top").fadeOut('fast', 0);
      active = false;
    }

    $("#back-top").hover(function(){
      $(this).css("opacity", 1);
    },function(){
      $(this).css("opacity", 0.5);
    });
  }, false);
});
