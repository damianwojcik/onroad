<?php get_header(); ?>

<!-- =================================================
	main
================================================== -->
<main>


	<!-- =================================================
		section featured
	================================================== -->
	<?php get_template_part("partials/section", "featured"); ?>
	


	<!-- =================================================
		section intro
	================================================== -->
	<?php get_template_part("partials/section", "intro"); ?>


	<!-- =================================================
		section info
	================================================== -->
	<?php get_template_part("partials/section", "info"); ?>
	

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
