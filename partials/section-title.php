
	<section class="title" style="background-image:url('<?= THEME_URL; ?>/assets/img/title-bg.jpg');">

		<div class="container">

			<div class="row">

				<div class="wrap">

					<h1>

						<?php if( is_category() or is_tag() ){ ?>

							<?php echo single_cat_title(); ?>

						<?php }else{ ?>

							<?php the_title(); ?>

						<?php } ?>

					</h1>

				</div>

			</div>

		</div>

	</section>
	<!-- END section slider -->
