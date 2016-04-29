
<!-- =================================================
	section banners
================================================== -->
<?php if( have_rows('section_banners', 'option') ):

	while ( have_rows('section_banners', 'option') ) : the_row(); ?>

<section class="banners">

	<div class="container">

		<div class="row">

			<div class="span12">

				<ul>

					<?php if( have_rows('banner', 'option') ):

						while ( have_rows('banner', 'option') ) : the_row();

						$image = get_sub_field('image');
						$link = get_sub_field('link');

						if( empty($link) ){
							$link = '#';
						}

						?>

					<li>

						<a href="<?php if( !empty($link) ): ?><?php echo $link; ?><?php endif; ?>">

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

						</a>

					</li>

					<?php

						endwhile;

					endif;

					?>

				</ul>

			</div>

		</div>

	</div>

</section>

<?php

	endwhile;

endif;

?>
<!-- END section banners -->


<!-- =================================================
	footer
================================================== -->
<footer>

	<div class="container">

		<div class="row-tight">

			<div class="span1">

				<?php $logo_footer = get_field('logo_footer', 'option');

				if( !empty($logo_footer) ): ?>

				<a href="<?= SITE_URL; ?>"><img src="<?php echo $logo_footer['url']; ?>" alt="<?php echo $logo_footer['alt']; ?>"></a>

				<?php endif; ?>

			</div>
			<!-- END span2 -->

			<div class="span9">

				<nav>

					<?php dynamic_sidebar('main_menu'); ?>
					
				</nav>

			</div>
			<!-- END span8 -->

			<div class="span2">

				<p>
					2016 &copy; <a href="http://time4.pl/">Time4.pl</a>
				</p>

			</div>
			<!-- END span2 -->

		</div>
		<!-- END row -->

	</div>

</footer>


<!-- End Document
================================================== -->

<?php wp_footer(); ?>
</body>
</html>