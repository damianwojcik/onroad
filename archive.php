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

                <!-- partial for articles -->

                <?php if($category_id == 2){ ?>

    							<?php get_template_part("partials/loop", "article_tile"); ?>

    						<?php } elseif($category_id == 4){ ?>

    							<?php get_template_part("partials/loop", "deals_listing"); ?>

    						<?php } else{ ?>

                  <h2>Ta kategoria nie posiada jeszcze strony archiwum.</h2>

                <?php } ?>

								<a href="<?= SITE_URL; ?>" class="btn btn-transparent-small">Pokaż więcej</a>

							</article>

						</div>

					</div>

				</main>

			</div>
			<!-- END span8 main -->


      <!-- =================================================
        aside
      ================================================== -->
      <?php get_template_part("partials/aside"); ?>


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
