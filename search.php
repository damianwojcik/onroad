<?php get_header(); ?>

<?php
  $categories = get_the_category();
  $category_id = $categories[0]->cat_ID;
?>

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

                <!-- article tile loop -->
    						<?php get_template_part("partials/loop", "article_tile"); ?>


								<a href="<?= SITE_URL; ?>" class="btn btn-transparent-small">Pokaż więcej</a>

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
