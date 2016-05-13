<?php
  $categories = get_the_category();
  $category_id = $categories[0]->cat_ID;
?>

<div class="span4 aside">

  <aside>

    <div class="container">

      <?php if(is_category()) {

        //if category is articles deals load recent_articles in aside
        if($category_id == 4){

          get_template_part("partials/aside", "recent_articles");

        //if category is deals load deals_listing in aside
        }elseif($category_id == 2){

          get_template_part("partials/aside", "deals_listing");
        }

      }else{ ?>

      <!-- =================================================
        aside related_articles
      ================================================== -->
      <?php get_template_part("partials/aside", "recent_articles"); ?>


      <!-- =================================================
        aside deals_listing
      ================================================== -->
      <?php get_template_part("partials/aside", "deals_listing"); ?>


    </div>
    <!-- END container -->

  </aside>

  <?php } ?>

</div>
<!-- END span4 aside -->
