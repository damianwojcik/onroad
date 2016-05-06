
	<?php if( have_rows('section_info', 'option') ): ?>

		<?php while ( have_rows('section_info', 'option') ) : the_row(); ?>

		<?php

			$title = get_sub_field('title');
			$intro = get_sub_field('intro');
			$button_txt = get_sub_field('button_txt');
			$button_link = get_sub_field('button_link');

		?>

		<section class="info">

			<div class="container">

				<div class="row">

					<div class="span8">

						<div class="wrap">


							<?php if( !empty($title) ): ?>

								<h2>
									<?php echo $title; ?>
								</h2>

							<?php endif; ?>


							<?php if( !empty($intro) ): ?>

								<p>
									<?php echo $intro; ?>
								</p>

							<?php endif; ?>


							<div class="row">

								<?php if( have_rows('info-box', 'option') ): ?>

									<?php $i = 1; ?>

									<?php while ( have_rows('info-box', 'option') ) : the_row(); ?>

										<?php $title = get_sub_field('title'); ?>

											<div class="span6">

												<div class="info-wrap">

													<div class="info-heading">

														<span class="enum-large">0<?php echo $i; ?>.</span>

														<h3>
															<small>
																Oddział
															</small>
															<?php if( !empty($title) ): ?><?php echo $title; ?><?php endif; ?>
														</h3>

													</div>
													<!-- END info-heading -->

													<?php if( have_rows('list', 'option') ): ?>

														<?php while ( have_rows('list', 'option') ) : the_row(); ?>

															<?php $list_title = get_sub_field('list_title'); ?>


															<h4><?php if( !empty($list_title) ): ?><?php echo $list_title; ?><?php endif; ?></h4>

															<ul>

																<?php if( have_rows('list_element', 'option') ): ?>

																	<?php while ( have_rows('list_element', 'option') ) : the_row(); ?>

																		<?php $content = get_sub_field('content'); ?>


																		<?php if( !empty($content) ): ?>

																			<li><?php echo $content; ?></li>

																		<?php endif; ?>


																	<?php endwhile; ?>

																<?php endif; //END if list element ?>

															</ul>

														<?php endwhile; ?>

													<?php endif; // END if list ?>

												</div>
												<!-- END inner-wrap -->

											</div>
											<!-- END span6 -->

										<?php $i++; ?>

									<?php endwhile; ?>

								<?php endif; ?>

							</div>
							<!-- END row-tight -->


							<?php if( !empty($button_txt) ): ?>

								<div class="row">

									<a href="<?php echo $button_link; ?>" class="btn btn-large"><?php echo $button_txt; ?></a>

								</div>

							<?php endif; ?>

						</div>
						<!-- END wrap -->

					</div>
					<!-- END span8 -->


					<div class="span4">

						<?php if( have_rows('info-box', 'option') ): ?>

							<?php while ( have_rows('info-box', 'option') ) : the_row(); ?>

								<?php

								$title = get_sub_field('title');
								$image = get_sub_field('image');

								?>

								<div class="info-photobox" style="background-image: url('<?php if( !empty($image) ): ?><?php echo $image['url']; ?><?php endif; ?>');">

									<div class="info-photobox-wrap">

										<h3>

											<small>
												Oddział
											</small>

											<?php if( !empty($title) ): ?><?php echo $title; ?><?php endif; ?>

										</h3>

										<a href="#" class="arrow-right"></a>

									</div>

								</div>
								<!-- END info-photo-box -->

							<?php endwhile; ?>

						<?php endif; ?>

					</div>
					<!-- END span4 -->

				</div>
				<!-- END row -->

			</div>

		</section>

		<?php endwhile; ?>

	<?php endif; ?>
	<!-- END section info -->
