require('./bootstrap');

(function ($){

    /* Preloader */
	$(window).on('load', function() {
		var preloaderFadeOutTime = 500;
		function hidePreloader() {
			var preloader = $('.spinner-wrapper');
			setTimeout(function() {
				preloader.fadeOut(preloaderFadeOutTime);
			}, 500);
		}
		hidePreloader();
	});

    $(window).on('scroll', function(e){
        if ($(this).scrollTop() > 200) {
            $('.navbar-container').addClass('bg-dark');
            $('.brand-img').addClass('d-none');
            $('.brand-text').removeClass('d-none');
            $('.top-bar').removeClass('d-lg-flex')
          } else {
            $('.brand-img').removeClass('d-none');
            $('.navbar-container').removeClass('bg-dark');
            $('.brand-text').addClass('d-none');
            $('.top-bar').addClass('d-lg-flex')


          }
    });

    $('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	
    $('#navbarCollapse').on('show.bs.collapse', function () {
        $('.navbar-collapse').addClass('bg-dark');
        $('.navbar').addClass('bg-dark');
    });
    $('#navbarCollapse').on('hidden.bs.collapse', function () {
        $('.navbar-collapse').removeClass('bg-dark');
        $('.navbar').removeClass('bg-dark');
    });

    //Styling post body
    $('#postBody').parent().addClass('table-responsive');
    $('#postBody').children('table').addClass('table table-striped table-hover');

})(jQuery);
