<div class="row">
        <?php
            $aboutPosts = new WP_Query(array(
                'no_found_rows' => true,
                'category_name' => 'Destacados',
                'posts_per_page' => 4,
            ));

            if ($aboutPosts->have_posts()) : ?>
                <div id="myCarousel" class="carousel slide owl-carousel-destacados owl-carouel"  data-ride="carousel">
                <div class="carousel-inner">

                <?php
                $destacado_index = 0;
                while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?>

                <div class="destacado-item item <?php if ($destacado_index == 0):?> active <?php endif; ?>">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('destacado'); ?>
                    </a>
                    <div class="destacado-caption">
                        <a class="destacado-title-a " href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title()?>
                        </a>

                        <p class="destacado-date">Publicada el <?php echo get_the_date()?></p>
                    </div>
                </div>

        <?php
            $destacado_index++;
            endwhile; ?>
                </div>

<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
                </div>
        <?php
            endif;
            wp_reset_query();
        ?>
</div>

