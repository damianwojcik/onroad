<?php get_header(); ?>

<!-- =================================================
	section content
================================================== -->
<section class="content">

	<div class="container shadow">

		<div class="row-tight">

			<div class="span8 main">

				<main>

					<div class="container">

						<div class="row">

							<!-- =================================================
								module breadcrumbs
							================================================== -->
							<?php get_template_part("partials/module", "breadcrumbs"); ?>


							<!-- =================================================
								article/page content
							================================================== -->
							<article>

								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

								<?php 

									$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
									$title = get_the_title();

								?>

									<?php if( !empty($title) ): ?>

										<h2><?php echo $title; ?></h3>

									<?php endif; ?>


									<?php if( !empty($thumbnail) ): ?>

										<div class="full-width-wrapper" style="background-image: url(<?php echo $thumbnail[0]; ?>);"></div>

									<?php endif; ?>


									<?php the_content(); ?>

								<?php endwhile; endif; ?>

								<a href="<?= SITE_URL; ?>" class="btn btn-transparent btn-back">Wróć</a>

							</article>

						</div>

					</div>

				</main>

			</div>
			<!-- END span8 main -->

			<div class="span4 aside">

				<aside>

					<div class="container">

						<!-- =================================================
							aside related_articles
						================================================== -->
						<?php get_template_part("partials/aside", "recent_articles"); ?>


						<!-- =================================================
							aside deals_listing
						================================================== -->
						<?php get_template_part("partials/aside", "deals_listing"); ?>


					</div>
					<!-- END container -->

				</aside>

			</div>
			<!-- END span4 aside -->

		</div>

	</div>

</section>
<!-- END section content -->



<!-- =================================================
	section info-page
================================================== -->
<?php get_template_part("partials/section", "info_page"); ?>


<?php get_footer(); ?>