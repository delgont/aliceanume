jQuery(document).ready(function($) {

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
      $('.navbar-wrapper').addClass('fixed-top');
    } else {
      $('.back-to-top').fadeOut('slow');
      $('.navbar-wrapper').removeClass('fixed-top');

    }
  });


  // OwlCarousel
  $('[data-toggle="owlcarousel"], [data-toggle="owl-carousel"]').each(function() {
    var $this = $(this),
      owlCarouselSettings = $this.data('owlcarousel-settings') || {};

    $this.owlCarousel(owlCarouselSettings);
  });


  let coursesOwl = $('.courses-owl-carousel');
  let mainSliderOwl = $('.main-slider-owl')

  coursesOwl.owlCarousel(
    {
      autoplay : true,
      dots : true,
      margin : 10,
      stagePadding : 0,
      nav : true,
      dotsContainer: '.courses-owl-dots-container',
      responsive : {
        0 : { "items" : 2 },
        600 : { "items" : 2 },
        780 : { "items" : 1 },
        1000 : { "items" : 2 },
      }
    }
  );

  mainSliderOwl.owlCarousel(
    {
      autoplay : true,
      loop : true,
      items : 1,
    }
  );

  $('.control-btn').on('click', function(){
    coursesOwl.trigger('next.owl');
  });

  $('.dev').on('click', function(e){
    e.preventDefault();
    //$('#devModal').modal('show');
    alert('The page your trying to access is under development. Please try again later.')
  });

  //Preloader (if the #preloader div exists)
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('fast', function () {
        $(this).remove();
      });
    }
  });


  // Initiate the wowjs animation library
  new WOW().init();

  

});
