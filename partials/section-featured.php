	
	<section class="featured">

		<div class="container">

			<div class="row">

				<?php if( have_rows('featured_boxes', 'option') ): ?>

					<?php while ( have_rows('featured_boxes', 'option') ) : the_row(); ?>

						<?php 

							$title = get_sub_field('title');
							$content = get_sub_field('content');
							$button_txt = get_sub_field('button_txt');

						?>

							<div class="span6">

								<div class="featured-box">

									<div class="row">

										<h3><span>01. </span><?php if( !empty($title) ): ?><?php echo $title; ?><?php endif; ?></h3>

									</div>

									<div class="row">

									<?php if( have_rows('banners', 'option') ): ?>

										<ul>

										<?php while ( have_rows('banners', 'option') ) : the_row(); ?>

											<?php if( have_rows('banner', 'option') ): ?>

												<?php while ( have_rows('banner', 'option') ) : the_row();  ?>

													<?php 

													$logo = get_sub_field('logo');
													$link = get_sub_field('link');

													?>

													<?php if( empty($link) ){ $link = '#'; } ?>

													<li>

														<a href="<?php if( !empty($link) ): ?><?php echo $link; ?><?php endif; ?>">

															<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

														</a>

													</li>


													<?php endwhile; ?>

												<?php endif; ?>
												<!-- END if exist single banner -->


											<?php endwhile; ?>

										</ul>

										<?php endif; ?>

									</div>
									<!-- END row -->


									<div class="row">

										<div class="wrap">

											<?php if( !empty($content) ): ?>

												<p><?php echo $content; ?></p>

											<?php endif; ?>

										</div>

									</div>
									<!-- END row -->


									<?php if( !empty($button_txt) ): ?>

										<div class="row">

											<a href="#" class="btn btn-arrow-right"><?php echo $button_txt; ?></a>

										</div>

									<?php endif; ?>

								</div>

							</div>
							<!-- END span6 -->

						<?php endwhile; ?>

					<?php endif; ?>

			</div>

		</div>

	</section>
	<!-- END section featured -->
