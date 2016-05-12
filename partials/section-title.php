
	<section class="title" style="background-image:url('<?= THEME_URL; ?>/assets/img/slides/slide-1.jpg');">

		<div class="container">

			<div class="row">

				<div class="wrap">

					<h1>
						<?php if( is_category() ){ ?>

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
