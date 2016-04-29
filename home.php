<?php get_header(); ?>

<!-- =================================================
	main
================================================== -->
<main>

	<!-- =================================================
		section featured
	================================================== -->

	<section class="featured">

		<div class="container">

			<div class="row">

				<?php if( have_rows('featured_boxes', 'option') ):

					while ( have_rows('featured_boxes', 'option') ) : the_row(); 

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

										<?php while ( have_rows('banner', 'option') ) : the_row(); 

											$logo = get_sub_field('logo');
											$link = get_sub_field('link');

											if( empty($link) ){
												$link = '#';
											}

											?>

											<li>

												<a href="<?php if( !empty($link) ): ?><?php echo $link; ?><?php endif; ?>">

													<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

												</a>

											</li>


											<?php endwhile; ?>

										<?php endif; ?>


									<?php endwhile; ?>

								</ul>

								<?php endif; ?>

							</div>
							<!-- END row -->


							<div class="row">

								<div class="wrap">
									
									<p><?php if( !empty($content) ): ?><?php echo $content; ?><?php endif; ?></p>

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

					<?php

						endwhile;

					endif;

					?>

			</div>

		</div>

	</section>
	<!-- END section featured -->


	<!-- =================================================
		section intro
	================================================== -->
	<?php if( have_rows('section_intro', 'option') ):

	while ( have_rows('section_intro', 'option') ) : the_row(); 

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

						<h2>
							<?php if( !empty($headline) ): ?><?php echo $headline; ?><?php endif; ?>
						</h2>

						<?php if( !empty($content) ): ?><?php echo $content; ?><?php endif; ?>

					</div>

				</div>
				<!-- END span4 -->

			</div>

		</div>

	</section>

	<?php

		endwhile;

	endif;

	?>
	<!-- END section intro -->


	<!-- =================================================
		section info
	================================================== -->
	<?php if( have_rows('section_info', 'option') ):

	while ( have_rows('section_info', 'option') ) : the_row(); 

		$title = get_sub_field('title');
		$intro = get_sub_field('intro');
		$button_txt = get_sub_field('button_txt');

		?>

	<section class="info">

		<div class="container">

			<div class="row">

				<div class="span8">

					<div class="wrap">

						<h2>
							<?php if( !empty($title) ): ?><?php echo $title; ?><?php endif; ?>
						</h2>

						<p>
							<?php if( !empty($intro) ): ?><?php echo $intro; ?><?php endif; ?>
						</p>

						<div class="row">

							<?php if( have_rows('info-box', 'option') ):

							$i = 1;

							while ( have_rows('info-box', 'option') ) : the_row(); 

								$title = get_sub_field('title');
								
								?>

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

									<?php if( have_rows('list', 'option') ):

									while ( have_rows('list', 'option') ) : the_row(); 

										$list_title = get_sub_field('list_title');

										?>

									<h4><?php if( !empty($list_title) ): ?><?php echo $list_title; ?><?php endif; ?></h4>

									<ul>

										<?php if( have_rows('list_element', 'option') ):

										while ( have_rows('list_element', 'option') ) : the_row(); 

											$content = get_sub_field('content');

											?>

										<li><?php if( !empty($content) ): ?><?php echo $content; ?><?php endif; ?></li>

										<?php

											endwhile;

										endif;

										?>

									</ul>

									<?php

										endwhile;

									endif;

									?>

								</div>
								<!-- END inner-wrap -->

							</div>
							<!-- END span6 -->

							<?php

								$i++;

								endwhile;

							endif;

							?>

						</div>
						<!-- END row-tight -->


						<?php if( !empty($button_txt) ): ?>

						<div class="row">

							<a href="#" class="btn btn-large"><?php echo $button_txt; ?></a>

						</div>

						<?php endif; ?>

					</div>
					<!-- END wrap -->

				</div>
				<!-- END span8 -->


				<div class="span4">

					<?php if( have_rows('info-box', 'option') ):

						while ( have_rows('info-box', 'option') ) : the_row(); 

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

					<?php

						endwhile;

					endif;

					?>

				</div>
				<!-- END span4 -->

			</div>
			<!-- END row -->

		</div>

	</section>
	<?php

		endwhile;

	endif;

	?>
	<!-- END section info -->


	<!-- =================================================
		section news
	================================================== -->
	<section class="news">

		<div class="container">

			<div class="row">

				<div class="span12">

					<h2>Aktualności</h2>

					<a href="#" class="btn btn-transparent-orange">Więcej aktualności</a>

				</div>
				<!-- END span12 -->

			</div>

			<div class="row">

				<div class="span3">

					<article>

						<div class="row">

							<span class="date">
								29
								<small>
									MARZ
								</small>
							</span>

						</div>
						<!-- END row -->

						<div class="row">

							<div class="article-img" style="background-image: url('<?= THEME_URL; ?>/assets/img/articles/article-1.jpg');"></div>

							<h3>Zamiany w zakresie działalności Serwisu w Błoniu</h3>

							<p>
								Pragniemy poinformować, iż, z dniem 31 czerwca 2015 kończymy  jedną z naszych działalności prowadzonych w Błoniu...
							</p>

							<a href="#" class="more">Więcej</a>

						</div>
						<!-- END row -->

					</article>

				</div>
				<!-- END span3 -->


				<div class="span3">

					<article>

						<div class="row">

							<span class="date">
								29
								<small>
									MARZ
								</small>
							</span>

						</div>
						<!-- END row -->

						<div class="row">

							<div class="article-img" style="background-image: url('<?= THEME_URL; ?>/assets/img/articles/article-2.jpg');"></div>

							<h3>Delphi Diesel Centre - nowa autoryzacja dla Diesel Service w Błoniu</h3>

							<p>
								Stając na przeciw oczekowaniom naszych Klientów w lutym 2015 roku rozpoczeliśmy współpracę z marką...
							</p>

							<a href="#" class="more">Więcej</a>

						</div>
						<!-- END row -->

					</article>

				</div>
				<!-- END span3 -->


				<div class="span3">

					<article>

						<div class="row">

							<span class="date">
								29
								<small>
									MARZ
								</small>
							</span>

						</div>
						<!-- END row -->

						<div class="row">

							<div class="article-img" style="background-image: url('<?= THEME_URL; ?>/assets/img/articles/article-3.jpg');"></div>

							<h3>Zakończenie działalności serwisowej w Słubicach</h3>

							<p>
								Szanowni Klienci, informujemy, iż z dniem 31 grudnia 2014 roku, zakończyliśmy działalność serwisową w Słubicach...
							</p>

							<a href="#" class="more">Więcej</a>

						</div>
						<!-- END row -->

					</article>

				</div>
				<!-- END span3 -->


				<div class="span3">

					<article>

						<div class="row">

							<span class="date">
								29
								<small>
									MARZ
								</small>
							</span>

						</div>
						<!-- END row -->

						<div class="row">

							<div class="article-img" style="background-image: url('<?= THEME_URL; ?>/assets/img/articles/article-4.jpg');"></div>

							<h3>Wymiana tulei resorowych</h3>

							<p>
								 Vestibulum dapibus, mauris nec malesuada fames aringilla sed, vestibulum id, eleifend justo vel bibendum consectetuer lobortis quis...
							</p>

							<a href="#" class="more">Więcej</a>

						</div>
						<!-- END row -->

					</article>

				</div>
				<!-- END span3 -->

			</div>
			<!-- END row -->

		</div>


		<!-- MOBILE only -->
		<a href="#" class="btn btn-transparent-orange mobile">Więcej aktualności</a>


	</section>
	<!-- END section news -->

</main>
<?php get_footer(); ?>