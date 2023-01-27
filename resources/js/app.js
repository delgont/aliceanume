
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});


'use strict';


var window_w = $(window).innerWidth();

$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut(); 
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
      $('.navbar-wrapper').addClass('fixe');
    } else {
      $('.back-to-top').fadeOut('slow');
      $('.navbar-wrapper').removeClass('fix');

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

  // Testimonials carousel
  $(".team-carousel").owlCarousel({
    autoplay: false,
    items : 4,
    dots: false,
    loop: true,
    margin : 10,
    nav : true,
    navText : [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>'
    ],
    responsive : {
      0 : { "items" : 1, "stagePadding" : 15 },
      600 : { "items" : 2, "stagePadding" : 20 },
      780 : { "items" : 3 },
      1000 : { "items" : 4 },
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

  $('#contactForm').submit(function(e){
    e.preventDefault();
    let url = $(this).attr('action');
    let type = $(this).attr('method');
    let data = new FormData(this);

    //success message holder
    let successHolder = $(this).find('#contactAlert');

    //Error holders
    let nameError = $(this).find('.error-name');
    let emailError = $(this).find('.error-email');
    let subjectError = $(this).find('.error-subject');
    let messageError = $(this).find('.error-message');

    //clear the error messages from error holders
    nameError.html('');
    emailError.html('');
    subjectError.html('');
    messageError.html('');

    $.ajax({
      type : type,
      url : url,
      data : data,
      contentType: false,
      processData: false,
      cache: false,
      success : function(response) {
        if(response.success != undefined && response.success == true){
          successHolder.addClass('show');
          successHolder.find('.message-holder').html(response.message);
          $('#contactForm').trigger('reset');
        }
      },
      statusCode : {
        422 : function(response, status, jqhxr) {
          //displaying validation errors on the error holders
          (response.responseJSON.errors.name != undefined) ? nameError.text(response.responseJSON.errors.name) : nameError.text('');
          (response.responseJSON.errors.email != undefined) ? emailError.text(response.responseJSON.errors.email) : emailError.text('');
          (response.responseJSON.errors.subject != undefined) ? subjectError.text(response.responseJSON.errors.subject) : subjectError.text('');
          (response.responseJSON.errors.message != undefined) ? messageError.text(response.responseJSON.errors.message) : messageError.text('');
        },
        500 : function(response, status, jqhxr) {
          alert('Internal server error ... try later');
        }
      }
    });

  });

   // Testimonials carousel
   $(".testimonial-carousel").owlCarousel({
    autoplay: false,
    smartSpeed: 1000,
    center: true,
    dots: false,
    loop: true,
    nav : true,
    navText : [
        '<i class="fa fa-arrow-left"></i>',
        '<i class="fa fa-arrow-right"></i>'
    ],
    responsive: {
        0:{
            items:1
        },
        768:{
            items:2
        }
    }
  });

  $(window).on('load', function () {
    var mediaIsotope = $('.isotope-container').isotope({
      itemSelector: '.isotope-item'
    });
  });

  
	/*------------------
		Background set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

  /*------------------
		Gallery
	--------------------*/
	$('.gallery').find('.gallery-item').each(function() {
		var pi_height1 = $(this).width(),
		pi_height2 = pi_height1/2;
		
		if($(this).hasClass('gi-long') && window_w > 991){
			$(this).css('height', pi_height2);
		}else{
			$(this).css('height', Math.abs(pi_height1));
		}
	});

	$('.gallery').masonry({
		itemSelector: '.gallery-item',
		columnWidth: '.grid-sizer'
	});



  // Initiate the wowjs animation library
  // WOW().init();

  

})(jQuery);


