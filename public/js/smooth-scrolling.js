$(document).ready(function(){
    // Add smooth scrolling to all links
    $(".smooth-scrolling").on('click', function(event) {
        $this = this;
        // Make sure we access an element from the same page
        if (this.pathname.indexOf(window.location.pathname) == 0){
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: (hash != "") ? ($(hash).offset().top - navHeight) : 0
            }, 800, 'swing', function(){

                if (!$this.classList.contains('silent')){
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    if(history.pushState) {
                        history.pushState(null, null, hash);
                    }
                    else {
                        location.hash = hash;
                    }
                }
            });
        } // End if
    });
});
