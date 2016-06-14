<?php

	$args = array('posts_per_page' => 5, 'category' => '2');
	$posts_array = get_posts( $args );

?>

<?php if (!empty($posts_array)){ ?>

	<div class="row">

		<h3>
			Pozostałe aktualności
		</h3>

		<ul class="recent-articles">

			<?php foreach ($posts_array as $post) { ?>

				<?php

					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
					$title = get_the_title();
					$day = get_the_date('l');
					$date = get_the_date('M');

				?>

				<li>

					<?php if( !empty($thumbnail) ): ?>

						<a href="<?php the_permalink(); ?>" class="tile-img-link">

							<div class="tile-img b-lazy" data-src="<?php echo $thumbnail[0]; ?>"></div>

						</a>

					<?php endif; ?>

					<span class="date"><?php echo $day; ?>, <?php echo get_the_date('Y-m-d'); ?></span>

					<a href="<?php the_permalink(); ?>"><h4><?php echo $title; ?></h4></a>

				</li>

			<?php } // END foreach ?>

		</ul>

	</div>
	<!-- END row -->

	<?php } // END if !empty($posts_array) ?>
