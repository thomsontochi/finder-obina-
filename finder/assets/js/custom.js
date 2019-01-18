(function ($) {

  "use strict";

    // PRE LOADER
    $(window).load(function(){
      $('.preloader').fadeOut(1000); // set duration in brackets    
    });


    // MENU
    $('.menu-burger').on('click', function() {
      $('.menu-bg, .menu-items, .menu-burger').toggleClass('fs');
      $('.menu-burger').text() == "☰" ? $('.menu-burger').text('✕') : $('.menu-burger').text('☰');
    });


    // ABOUT SLIDER
    $('body').vegas({
        slides: [
            { src: '/../finder/assets/img/img1.jpg' },
            { src: '/../finder/assets/img/img2.jpg' },
            { src: '/../finder/assets/img/img3.jpg'}
        ],
        timer: false,
        transition: [ 'zoomOut', ]
    });

})(jQuery);