	<?php

		$args = array('posts_per_page' => 4, 'category' => '2');

		$posts_array = get_posts( $args );

	?>

	<?php if (!empty($posts_array)){ ?>

	<section class="news">

		<div class="container">

			<div class="row">

				<div class="span12">

					<h2>Aktualności</h2>

					<a href="<?php echo get_category_link( 2 ); ?> " class="btn btn-transparent-orange">Więcej aktualności</a>

				</div>
				<!-- END span12 -->

			</div>

			<div class="row">

				<?php foreach ($posts_array as $post) { ?>

					<?php

						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
						$title = get_the_title();
						$content = get_post_field('post_content');
						$trimmed_content = wp_trim_words( $content );
						$day = get_the_date('d');
						$month = get_the_date('M');

					?>

					<div class="span3">
						
						<article>

							<div class="row">

								<span class="date">
									<?php echo $day; ?>
									<small>
										<?php echo $month; ?>
									</small>
								</span>

							</div>
							<!-- END row -->

							<div class="row">

								<div class="article-img" style="background-image: url(<?php echo $thumbnail[0]; ?>);"></div>

								<h3><?php echo $title; ?></h3>

								<p>
									<?php echo $trimmed_content; ?>
								</p>

								<a href="<?php the_permalink(); ?>" class="more">Więcej</a>

							</div>
							<!-- END row -->

						</article>

					</div>
					<!-- END span3 -->

				<?php } // END foreach ?>

			</div>
			<!-- END row -->

		</div>


		<!-- MOBILE only -->
		<a href="#" class="btn btn-transparent-orange mobile">Więcej aktualności</a>


	</section>
	<!-- END section news -->

	<?php } // END if !empty($posts_array) ?>
