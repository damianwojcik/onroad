	
	<?php if( have_rows('section_intro', 'option') ): ?>

		<?php while ( have_rows('section_intro', 'option') ) : the_row(); ?>

			<?php

				$photo_large = get_sub_field('photo_large');
				$photo_small = get_sub_field('photo_small');
				$headline = get_sub_field('headline');
				$content = get_sub_field('content');

			?>

			<section class="intro">

				<div class="container">

					<div class="row">

						<div class="span8">

							<div class="wrap">


								<!-- BEGIN wrap-photo-large -->
								<div class="wrap-photo-large">

									<div class="photo" style="background-image: url('<?php echo $photo_large['url']; ?>');">

										<?php if( !empty($photo_small) ): ?>

											<!-- BEGIN wrap-photo-small -->
											<div class="wrap-photo-small">

												<div class="photo" style="background-image: url('<?php echo $photo_small['url']; ?>');"></div>

											</div>
											<!-- END wrap-photo-small -->
											
										<?php endif; ?>

									</div>

								</div>
								<!-- END wrap-photo-large -->


							</div>
							<!-- END wrap -->

						</div>
						<!-- END span8 -->


						<div class="span4">

							<div class="wrap">


								<!-- headline -->
								<?php if( !empty($headline) ): ?>

									<h2>
										<?php echo $headline; ?>
									</h2>

								<?php endif; ?>


								<!-- content -->
								<?php if( !empty($content) ): ?><?php echo $content; ?><?php endif; ?>


							</div>

						</div>
						<!-- END span4 -->

					</div>

				</div>

			</section>

		<?php endwhile; ?>

	<?php endif;?>
	<!-- END section intro -->