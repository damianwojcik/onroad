jQuery(document).ready(function($){

	// Init functions
	owl_init();
	mobile_menu_toggle();
	searchbox();


	var $body = $('body'),
		$wind = $(window),
		windW = $wind.width(),
		windH = $wind.height();


	function owl_init(){
		$('.owl-carousel').owlCarousel({
			items: 1,
		    loop: true,
		    autoplay: false,
		    autoplayTimeout: 4000,
		    autoplayHoverPause: true,
		    dotsContainer: '.customDots'
		});

		$('.owl-dot').click( function(){
			owl.trigger('to.owl.carousel', [$(this).index(), 300])
		});

	}

    function mobile_menu_toggle(){
	    $(".menu-toggle").click(function() {
	        $(".mobile-navigation").stop().slideToggle(500);
	        $body.toggleClass('menu-open');
	    });
    }


	function searchbox(){

		$(".searchbox-toggle").click(function(e) {

					e.preventDefault();
	        $(".search-panel").stop().slideToggle(500);
					$(".searchbox-toggled").find('input').focus();

	    });

		$('.searchbox-toggled input').on('focusout',function(){

			$('.search-panel').removeClass('active');
			$('.search-panel').stop().slideToggle(500);

		});

	}


});
