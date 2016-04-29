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


	// function scrollTop_button(){
	// 	$('.scrollTop').click(function(){
	// 		$('html, body').animate({scrollTop : 0},800);
	// 		return false;
	// 	});
	// }


    function mobile_menu_toggle(){
	    $(".menu-toggle").click(function() {
	        $(".mobile-navigation").slideToggle(500);
	        $body.toggleClass('menu-open');
	    });
    }


	function searchbox(){

		$(".searchbox-toggle").click(function() {
	        $(".search-panel").slideToggle(500);
	        // $body.toggleClass('menu-open');
	    });

	}

	
});
