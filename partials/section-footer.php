<footer>

	<div class="container">

		<div class="row-tight">

			<div class="span1">

				<?php $logo_footer = get_field('logo_footer', 'option'); ?>

				<?php if( !empty($logo_footer) ): ?>

					<a href="<?= SITE_URL; ?>"><img src="<?php echo $logo_footer['url']; ?>" alt="<?php echo $logo_footer['alt']; ?>"></a>

				<?php endif; ?>

			</div>
			<!-- END span2 -->


			<div class="span9">

				<nav>

					<?php dynamic_sidebar('footer_menu'); ?>

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
