( function() {

    var app = {
        
        initHpSlider: function() {
            var carousel = jQuery('.hp-slider');
            carousel.slick({
              centerMode: true,
              centerPadding: '18.75%',
              slidesToShow: 1,
              dots: true,
               responsive: [
                {
                  breakpoint: 751,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    centerMode: false
                  }
                },
              ]
            });
        },

        initNewsSlider: function() {
          var carousel = jQuery('.news-list');
         
           
              carousel.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                prevArrow: jQuery('.news-prev'),
                nextArrow: jQuery('.news-next'),
                responsive: [
                    {
                        breakpoint: 9999,
                        settings: "unslick"
                    },
                    {
                      breakpoint: 751,
                       settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          infinite: true,
                            
                        }
                    }
                ]
              });
         
          
        },
       
       initSmoothScroll: function() {
            jQuery('.top-link').click(function(e){
                e.preventDefault();
                jQuery('html, body').animate({
                    scrollTop: jQuery( jQuery(this).attr('href') ).offset().top -110
                }, 500);
                return false;
            });
        },

        initMobileMenu: function() {
            jQuery('.burger-menu ').click(function(e){
                e.preventDefault();
                jQuery('.mobile-menu-container').toggleClass("visible");
                jQuery('body').toggleClass('hidden');
                jQuery('.burger-menu').toggleClass('open');
            });
        },
        
        
    }

    
    jQuery(document).ready( function() {
        
        /* Initialize hp slider */
        app.initHpSlider();
    
        /* Initialize smooth scroll top */
        app.initSmoothScroll();

        app.initMobileMenu();

        app.initNewsSlider();
        
    });
    
    jQuery(window).on('load', function(){
       
    })

    jQuery(window).on('resize', function(){
      
       
    })


})();