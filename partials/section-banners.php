<?php if( have_rows('section_banners', 'option') ): ?>

	<?php while ( have_rows('section_banners', 'option') ) : the_row(); ?>

		<section class="banners">

			<div class="container">

				<div class="row">


					<div class="owl-carousel-banners">

						<?php if( have_rows('banner', 'option') ): ?>

							<?php while ( have_rows('banner', 'option') ) : the_row(); ?>

							<?php

								$image = get_sub_field('image');
								$link = get_sub_field('link');

								if( empty($link) ){ $link = '#'; }

							?>

							<div class="owl-item">

								<a target="_blank" href="<?php if( !empty($link) ): ?><?php echo $link; ?><?php endif; ?>">

									<div class="banner-img b-lazy"  data-src="<?php echo $image['url']; ?>"></div>

								</a>

							</div>
							<!-- END owl-item -->

							<?php endwhile; ?>

						<?php endif; ?>

					</div>
					<!-- END owl-carousel-banners -->

				</div>

			</div>


		</section>

	<?php endwhile; ?>

<?php endif; ?>
<!-- END section banners -->
