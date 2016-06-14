jQuery(document).ready(function($){

	// Init functions
	owl_slider_init();
	owl_banners_init();
	mobile_menu_toggle();
	searchbox();


	//add placeholder to wp searchform
	$(document).find('#searchform input').attr('placeholder', 'Wpisz wyszukiwaną frazę...');


	var $body = $('body'),
		$wind = $(window),
		windW = $wind.width(),
		windH = $wind.height();


	function owl_slider_init(){
		$('.owl-carousel').owlCarousel({
			items: 1,
		    loop: true,
			animateOut: 'fadeOut',
		    autoplay: true,
		    autoplayTimeout: 6000,
		    autoplayHoverPause: true,
		    dotsContainer: '.customDots'
		});

		$('.owl-dot').click( function(){
			owl.trigger('to.owl.carousel', [$(this).index(), 300])
		});

	}

	function owl_banners_init(){
		$('.owl-carousel-banners').owlCarousel({
			autoplay: true,
			autoplayTimeout: 4000,
		    loop:true,
		    margin:0,
		    nav: false,
		    items: 6,
			dots: false,
		    // autoWidth: true,
		    responsive:{
				1270:{
					items:6
				},
				1024:{
					items:4
				},
				768:{
					items:3
				},
		        0:{
		            items:2
		        }
		    }
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
		// console.log($toggle);

		$(".searchbox-toggle").click(function() {

			if($toggle == 0){
	      $(".search-panel").stop().slideToggle(500);
				$("#searchform").find('input#s').focus();
				$toggle = 1;
			}else{
				$("#searchform").find('input#s').focusout();
				$toggle = 0;
			}

			// console.log($toggle);

	    });

		$('#searchform input#s').on('focusout',function(){

			$('.search-panel').removeClass('active');
			$('.search-panel').stop().slideToggle(500);
			$toggle = 0;
			// console.log($toggle);

		});

	}


});
