<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?= THEME_URL; ?>/favicon.ico" type="image/png">


	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/base.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/gridset.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/style.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/responsive.css">


	<!-- JS
	================================================== -->
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<script src="<?= THEME_URL; ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?= THEME_URL; ?>/assets/js/scripts.js"></script>


	<!-- HTML 5 SUPPORT
	================================================== -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>
<body <?php body_class(); ?>>



<!-- =================================================
	section search-panel TOGGLED
================================================== -->
<section class="search-panel">

	<div class="container">

		<div class="row">

			<form class="searchbox-toggled">
					
				<input type="search" placeholder="Wpisz wyszukiwaną frazę..." name="search">

				<button type="submit" class="searchbox-toggled-submit"></button>

			</form>

		</div>

	</div>

</section>
<!-- END search-panel -->


<!-- =================================================
	header
================================================== -->
<header>


	<!-- =================================================
		section navigation
	================================================== -->
	<section class="navigation">

		<div class="container">

			<div class="row-tight">

				<div class="span1">

					<div class="logo">

						<?php $logo_header = get_field('logo_header', 'option');

						if( !empty($logo_header) ): ?>

						<a href="<?= SITE_URL; ?>"><img src="<?php echo $logo_header['url']; ?>" alt="<?php echo $logo_header['alt']; ?>"></a>

						<?php endif; ?>

					</div>

				</div>
				<!-- END span1 -->

				<div class="span11">

					<nav>

						<?php dynamic_sidebar('main_menu'); ?>

					</nav>


					<!-- search-panel toggle -->
					<button class="searchbox-toggle"></button>


					<!-- mobile nav toggle-->
					<a class="nav-toggle" href="#">

						<div class="menu-toggle">

							<div class="menu-bars">

								<span class="menu-bar"></span>
								<span class="menu-bar"></span>
								<span class="menu-bar"></span>

							</div>

						</div>

					</a>

				</div>
				<!-- END span11 -->

			</div>

		</div>

	</section>
	<!-- END section navigation -->


	<!-- =================================================
		section mobile-navigation
	================================================== -->
	<section class="mobile-navigation">

		<nav>

			<?php dynamic_sidebar('main_menu'); ?>

		</nav>

	</section>
	<!-- END mobile-navigation -->


	<?php if( is_home() ){ ?>

	<!-- =================================================
		section slider
	================================================== -->
	<?php $args = array(
		'posts_per_page'   => 3,
		'post_type'        => 'slide',
		);

	$posts_array = get_posts( $args );

	?>

	<?php if (!empty($posts_array)){ ?>

	<section class="slider">

		<div class="owl-carousel">
							
			<?php foreach ($posts_array as $post) { ?>

				<?php 

					$image = get_field('image');
					$title = get_field('title');
					$subtitle = get_field('subtitle');
					$button_txt = get_field('button_txt');

				?>

			<!-- BEGIN slide -->
			<div class="slide" style="background-image:url(<?php echo $image['url']; ?>);">

				<div class="container">

					<div class="row">

						<div class="span6">

							<div class="wrap">

								<div class="inner-wrap">
									
									<?php if( !empty($title) ): ?>

									<h1>
										<?php echo $title; ?>

										<?php if( !empty($subtitle) ): ?><small><?php echo $subtitle; ?></small><?php endif; ?>

									</h1>

									<?php endif; ?>


									<?php if( !empty($button_txt) ): ?>

									<a href="#" class="btn btn-transparent"><?php echo $button_txt; ?></a>

									<?php endif; ?>


								</div>

								<ul class="customDots owl-dots">
									<li class="owl-dot"></li>
									<li class="owl-dot"></li>
									<li class="owl-dot"></li>
								</ul>

							</div>

						</div>

					</div>

				</div>

			</div>
			<!-- END slide -->

			<?php } // END foreach ?>


		</div>

	</section>
	<!-- END section slider -->

	<?php } // END if has posts ?>

	<?php } // END if home ?>

</header>