// Hello.
//
// This is The Scripts used for ___________ Theme
//
//

function main() {

(function () {
   'use strict';


     $(window).load(function() {

      // will first fade out the loading animation 
      $("#loader").fadeOut("slow", function(){

        // will fade out the whole DIV that covers the website.
        $("#preloader").delay(300).fadeOut("slow");

      });       

    })
     
   /* ==============================================
  	Testimonial Slider
  	=============================================== */ 

  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });

    /*====================================
    Show Menu on Book
    ======================================*/
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 550;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
            $(' .navbar-default a').addClass('on_new');
            //$(' .navbar-nav').removeClass('menu-border');
            //$(' .navbar-nav a').removeClass('btn');

           // $(' .navbar-default a').css({"color": "#720021",});
          
            $(' .logoieee').css({"visibility": "hidden",});
            $(' .logoieeesmall').css({"visibility": "visible",});
            $(' .logofsb').css({"visibility": "hidden",});
             $(' .logoimpsmall').css({"visibility": "visible",});

             $(' .navbar-default').css({"border-bottom": "2px","border-style": "solid","border-color": "#ddd",});
             
             //$(' .navbar-default .navbar-nav').css({"padding": "0px",});
             //$('  .navbar-nav li > a').css({"padding": "10px",});


        } else {
            $('.navbar-default').removeClass('on');
            $(' .navbar-default a').removeClass('on_new');
            //$(' .navbar-nav').addClass('menu-border');
            //$(' .navbar-nav a').addClass('btn');
            //$('  .navbar-nav li > a').css({"padding": "4px",});

            //$(' .navbar-default a').css({"color": "#fff",});
            $(' .logoieee').css({"visibility": "visible",});
             $(' .logoieeesmall').css({"visibility": "hidden",});
            $(' .logofsb').css({"visibility": "visible",});
            $(' .logoimpsmall').css({"visibility": "hidden",});
            $(' .navbar-default').css({"border-bottom": "0px",});
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    })

  	$(document).ready(function() {
  	  $("#team").owlCarousel({
  	 
  	      navigation : false, // Show next and prev buttons
  	      slideSpeed : 300,
  	      paginationSpeed : 400,
  	      autoHeight : true,
  	      itemsCustom : [
				        [0, 1],
				        [450, 2],
				        [600, 2],
				        [700, 2],
				        [1000, 4],
				        [1200, 4],
				        [1400, 4],
				        [1600, 4]
				      ],
  	  });

  	  $("#clients").owlCarousel({
  	 
  	      navigation : false, // Show next and prev buttons
  	      slideSpeed : 300,
  	      paginationSpeed : 400,
  	      autoHeight : true,
  	      itemsCustom : [
				        [0, 1],
				        [450, 2],
				        [600, 2],
				        [700, 2],
				        [1000, 4],
				        [1200, 5],
				        [1400, 5],
				        [1600, 5]
				      ],
  	  });

      $("#testimonial").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
        });

  	});

  	/*====================================
    Portfolio Isotope Filter
    ======================================*/
    $(window).load(function() {

      
        var $container = $('#lightbox');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });



}());


}
main();