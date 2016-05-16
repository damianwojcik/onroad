jQuery(document).ready(function($){

	// Init functions
	owl_init();
	mobile_menu_toggle();
	searchbox();


	//add placeholder to wp searchform
	$(document).find('#searchform input').attr('placeholder', 'Wpisz wyszukiwaną frazę...');


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


	// remove console.log after fix
	function searchbox(){

		var $toggle = 0;
		console.log($toggle);

		$(".searchbox-toggle").click(function() {

			if($toggle == 0){
	      $(".search-panel").stop().slideToggle(500);
				$("#searchform").find('input#s').focus();
				$toggle = 1;
			}else{
				$("#searchform").find('input#s').focusout();
				$toggle = 0;
			}

			console.log($toggle);

	    });

		$('#searchform input#s').on('focusout',function(){

			$('.search-panel').removeClass('active');
			$('.search-panel').stop().slideToggle(500);
			$toggle = 0;
			console.log($toggle);

		});

	}


});
