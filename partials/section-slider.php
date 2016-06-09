
	<?php

		$args = array('posts_per_page' => 3,
		'post_type' => 'slide',
		'orderby' => 'date',
		'order'=> 'ASC',);

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
					$button_link = get_field('button_link');

				?>

				<!-- BEGIN slide -->
				<div class="slide" style="background-image:url(<?php echo $image['url']; ?>);">

					<div class="container">

						<div class="row">

							<div class="span6">

								<div class="wrap">

									<div class="inner-wrap">

										<?php if( ( !empty($title) ) or ( ( !empty($subtitle) ) ) ): ?>

											<h1>
												<?php echo $title; ?>

												<?php if( !empty($subtitle) ): ?><small><?php echo $subtitle; ?></small><?php endif; ?>

											</h1>

										<?php endif; ?>


										<?php if( !empty($button_txt) ): ?>

											<a href="<?php echo $button_link; ?>" class="btn btn-transparent"><?php echo $button_txt; ?></a>

										<?php endif; ?>


									</div>
									<!-- END inner-wrap -->

									<!-- <ul class="customDots owl-dots">
										<li class="owl-dot"></li>
										<li class="owl-dot"></li>
										<li class="owl-dot"></li>
									</ul> -->

								</div>
								<!-- END wrap -->

							</div>
							<!-- END span6 -->

						</div>

					</div>

				</div>
				<!-- END slide -->

			<?php } // END foreach ?>

		</div>
		<!-- END owl-carousel -->

	</section>
	<!-- END section slider -->

	<?php } // END if !empty($posts_array) ?>
