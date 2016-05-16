<h2>Lista promocji</h2>

<ul class="deals_listing-full">

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post();  ?>

    <?php

      $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
      $title = get_the_title();
      $day = get_the_date('l');
      $date = get_the_date('M');
      $value = get_field('value');
      $description = get_field('description');
      $trimmed_description = wp_trim_words( $description, 25 );

    ?>

    <li>

      <a href="<?php the_permalink(); ?>" class="tile-img-link">
        <div class="tile-img" style="background-image: url(<?php echo $thumbnail[0]; ?>)"></div>
      </a>

      <div class="wrap">

        <h3><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h3>

        <span class="date"><?php echo $day; ?>, <?php echo get_the_date('Y-m-d'); ?></span>

        <div class="inner-wrap">

          <span class="value"><?php echo $value; ?></span>

          <span class="description"><?php echo $trimmed_description; ?></span>

        </div>

        <a href="<?php the_permalink(); ?>" class="btn btn-arrow-right">Więcej</a>

      </div>
      <!-- END wrap -->

    </li>

  <?php endwhile; ?>

</ul>

<div class="nav-previous alignleft"><?php next_posts_link( 'Poprzednie' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Następne' ); ?></div>

<?php else : ?>

  <p><?php _e('Przepraszamy, niestety nie znaleziono żadnych wpisów spełniających Twoje kryteria.'); ?></p>

<?php endif; ?>
