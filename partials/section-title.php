<?php
	$categories = get_the_category();
	$category_name = str_replace('"', "", $categories[0]->name);
?>

<section class="title" style="background-image:url('<?= THEME_URL; ?>/assets/img/title-bg.jpg');">

	<div class="container">

		<div class="row">

			<div class="wrap">

				<h1>

					<?php

						if (is_category()) {
						  single_cat_title();
						} elseif (is_single()) {
						  echo $category_name;
						} elseif (is_search()) {
							echo 'Szukaj';
						} elseif (is_tag()) {
							single_tag_title('Tag: ');
						} else {
						  the_title();
						}

					?>

				</h1>

			</div>

		</div>

	</div>

</section>
<!-- END section slider -->
