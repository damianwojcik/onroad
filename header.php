<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?= THEME_URL; ?>/favicon.ico" type="image/png">

	
	<!-- HTML 5 SUPPORT
	================================================== -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<!-- =================================================
	section search-panel TOGGLED
================================================== -->
<?php get_template_part("partials/section", "searchpanel"); ?>		


<!-- =================================================
	header
================================================== -->
<header>


	<!-- =================================================
		section navigation
	================================================== -->
	<?php get_template_part("partials/section", "navigation"); ?>
	

	<?php if( is_home() ){ ?>

		<!-- =================================================
			section slider
		================================================== -->
		<?php get_template_part("partials/section", "slider"); ?>	
		

	<?php }else{ ?>

		<!-- =================================================
			section title
		================================================== -->
		<?php get_template_part("partials/section", "title"); ?>	


	<?php }//end else ?>

</header>