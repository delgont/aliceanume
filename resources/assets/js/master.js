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


  $('.courses-owl-carousel').owlCarousel({
    loop : true,
    items : 4,
    margin : 10,
    stagePadding : 1,
    responsive : {
      0 : { "items" : 1, "stagePadding" : 15 },
      600 : { "items" : 1, "stagePadding" : 20 },
      780 : { "items" : 2 },
      1000 : { "items" : 3 },
    }
  });

  
  $('.events-owl-carousel').owlCarousel({
    loop : true,
    items : 4,
    margin : 10,
    responsive : {
      0 : { "items" : 1, "stagePadding" : 20 },
      600 : { "items" : 1 },
      780 : { "items" : 2 },
      1000 : { "items" : 2 },
    }
  });




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
