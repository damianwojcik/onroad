<?php

	add_theme_support( 'post-thumbnails' );

	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
	add_action( 'wp_footer', 'enqueue_scripts' );


	function enqueue_styles() {

		// load styles
		wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' , '', NULL);
		wp_enqueue_style( 'site_styles', THEME_URL .'/style.css', '', NULL);
		// wp_enqueue_style( 'site_styles_unmin', THEME_URL .'/style_unmin.css');
		// wp_enqueue_style( 'responsive_site_styles_unmin', THEME_URL .'/responsive_unmin.css');

	}


	function enqueue_scripts() {

		// load scripts
		wp_enqueue_script("jquery");
		wp_enqueue_script( 'site_scripts', THEME_URL . '/assets/js/scripts.js', '', NULL);

	}

	// Adds class to pagination links
	add_filter('next_posts_link_attributes', 'posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes');

	function posts_link_attributes() {
	    return 'class="btn btn-transparent-small"';
	}
