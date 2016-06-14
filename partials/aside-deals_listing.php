<?php

	$args = array('posts_per_page' => 5, 'category' => '4');
	$posts_array = get_posts( $args );

?>

<?php if (!empty($posts_array)){ ?>


<div class="row">

	<h3>Aktualne promocje</h3>

	<ul class="deals-listing">

		<?php foreach ($posts_array as $post) { ?>

			<?php

				$value = get_field('value');
				$description = get_field('description');
				$trimmed_description = wp_trim_words( $description, 20 );

			?>

			<li>
				<a href="<?php the_permalink(); ?>">
					<span class="value"><?php echo $value; ?></span>
					<span class="description"><?php echo $trimmed_description; ?></span>
				</a>
			</li>

		<?php } // END foreach ?>


	</ul>

</div>
<!-- END row -->

<?php } // END if !empty($posts_array) ?>
