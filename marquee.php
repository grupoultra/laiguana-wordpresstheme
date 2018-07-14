<div class="marquee-section row">
  <span class="title col-xs-2">
    #LoÚltimo
  </span>
  <div class="marquee col-xs-10">

    <?php
      $aboutPosts = new WP_Query(array(
        'category_name' => 'General',
        'posts_per_page' => 40,
      ));

      if ($aboutPosts->have_posts()) :
        while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?>

        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_title()?>
        </a>

        <span class="separator"> | </span>

        <?php
        endwhile;
      endif;
      wp_reset_query();
      ?>
  </div>
</div>