
 (function ($){

	$(window).scroll(function() {
		if ($(this).scrollTop() > 300) {
		  $('.back-to-top').fadeIn('slow');
		  $('.navbar-wrapper').addClass('fixed-top');
		} else {
		  $('.back-to-top').fadeOut('slow');
		  $('.navbar-wrapper').removeClass('fixed-top');
		}
	});
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	$('.slider').owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		autoplay: true,
		nav: true,
		dots: true,
		navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
		smartSpeed: 1000
	});

})(jQuery);
