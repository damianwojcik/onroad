
<?php if( have_rows('section_banners', 'option') ): ?>

	<?php while ( have_rows('section_banners', 'option') ) : the_row(); ?>

		<section class="banners">

			<div class="container">

				<div class="row">

					<div class="span12">

						<ul>

							<?php if( have_rows('banner', 'option') ): ?>

								<?php $i = 1; ?>

								<?php while ( have_rows('banner', 'option') ) : the_row(); ?>

								<?php

								$image = get_sub_field('image');
								$image_bw = get_sub_field('image_bw');
								$link = get_sub_field('link');


								if( empty($link) ){ $link = '#'; }

								?>

									<li id="banner-<?php echo $i; ?>">

										<a href="<?php if( !empty($link) ): ?><?php echo $link; ?><?php endif; ?>">

											<div class="banner-img"></div>

										</a>

									</li>

									<?php $i = $i + 1; ?>

								<?php endwhile; ?>

							<?php endif; ?>

						</ul>

					</div>

				</div>

			</div>

		</section>

	<?php endwhile; ?>

<?php endif; ?>
<!-- END section banners -->
