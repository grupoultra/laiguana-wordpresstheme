<div class="row">
        <?php
            $aboutPosts = new WP_Query(array(
                'category_name' => 'Destacados',
                'posts_per_page' => 4,
            ));

            if ($aboutPosts->have_posts()) : ?>
                <div class="owl-carousel-destacados owl-carouse">
                <?php 
                while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?>  

                <div class="destacado-item">
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

        <?php  endwhile; ?>
                </div>
        <?php
            endif;
            wp_reset_query();
        ?>
</div>

