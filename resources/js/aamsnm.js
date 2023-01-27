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

    $('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	$(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 60) {
                $('.fixed-top').addClass('bg-');
            } else {
                $('.fixed-top').removeClass('bg-');
            }
        } else {
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('bg-dark').css('top', -45);
            } else {
                $('.fixed-top').removeClass('bg-dark').css('top', 0);
            }
        }
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
