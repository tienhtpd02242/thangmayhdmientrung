(function( $ ){
  $(document).ready(function(){
   owlCarouselHome();
   toggleIntroduceSS();;
   window.sr = new scrollReveal();

   // Menu Mobile
   $('.menu-trigger').click(function(){
     $(this).toggleClass('active');
     $('.menu-main-menu-container').toggleClass('mobile');
   });

  });

  function toggleIntroduceSS(){
    $('.introduce-section .item-intr .headline').click( function() {
      $(this).next().slideToggle();
      $(this).toggleClass('current');
    });
  }

  function owlCarouselHome(){
    $(".slider-hero").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        dots: true,
        nav: true,
        animateOut: 'fadeOut',
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      });

      $('.wrap-construction').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        dots: true,
        margin: 20,
        responsive:{
          0: {
            items: 1
          },
          500:{
            items: 1
          },
            768:{
                items:3
            },
            1000:{
              items: 4,
            }

        }
      });

      $('.service-section .wrap-service').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        dots: true,
        margin: 20,
        responsive:{
          0: {
            items: 1
          },
          500:{
            items: 1
          },
            768:{
                items:3
            },
            1000:{
              items: 4,
            }

        }
      });
  }

})( jQuery );
