<?php if (is_search()) { ?>
  <h2>Wyniki wyszukiwania</h2> <br />
<?php }else{?>
  <h2>Lista artykułów</h2> <br />
<?php } ?>

<ul class="article-tiles">

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post();  ?>

    <?php

      $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
      $title = get_the_title();
      $day = get_the_date('l');
      $date = get_the_date('M');
      $content = get_the_content();
      $trimmed_content = wp_trim_words( $content, 15 );

    ?>

    <li>

      <?php if( !empty($thumbnail) ): ?>

        <a href="<?php the_permalink(); ?>" class="tile-img-link">

          <div class="tile-img" style="background-image: url(<?php echo $thumbnail[0]; ?>)"></div>

        </a>

      <?php endif; ?>

      <span class="date"><?php echo $day; ?>, <?php echo get_the_date('Y-m-d'); ?></span>

      <h3><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h3>

      <p>
        <?php echo $trimmed_content; ?>
      </p>

      <?php the_tags( '<ul class="article-tags"><li>', '</li><li>', '</li></ul>' ); ?>

      <a href="<?php the_permalink(); ?>" class="btn btn-arrow-right">Więcej</a>

    </li>

  <?php endwhile; ?>

</ul>

<div class="nav-previous alignleft"><?php next_posts_link( 'Poprzednie' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Następne' ); ?></div>

<?php else : ?>

  <p><?php _e('Przepraszamy, niestety nie znaleziono żadnych wpisów spełniających Twoje kryteria.'); ?></p>

<?php endif; ?>
