<?php

	add_theme_support( 'post-thumbnails' );

	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
	add_action( 'wp_footer', 'enqueue_scripts' );


	function enqueue_styles() {

		// load styles
		wp_enqueue_style( 'reset_styles', THEME_URL .'/assets/css/base.css' );
		wp_enqueue_style( 'gridset', THEME_URL .'/assets/css/gridset.css' );
		wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' );
		wp_enqueue_style( 'owl_styles', THEME_URL .'/assets/css/owl.carousel.css' );
		wp_enqueue_style( 'site_styles', THEME_URL .'/style.css' );
		wp_enqueue_style( 'wpcore', THEME_URL .'/assets/css/wpcore.css' );
		wp_enqueue_style( 'responsive', THEME_URL .'/assets/css/responsive.css' );

	}


	function enqueue_scripts() {

		// load scripts
		wp_enqueue_script("jquery");
		wp_enqueue_script( 'owl_carousel', THEME_URL . '/assets/js/owl.carousel.min.js' );
		wp_enqueue_script( 'site_scripts', THEME_URL . '/assets/js/scripts.js' );

	}

	// Adds class to pagination links
	add_filter('next_posts_link_attributes', 'posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes');
	
	function posts_link_attributes() {
	    return 'class="btn btn-transparent-small"';
	}
