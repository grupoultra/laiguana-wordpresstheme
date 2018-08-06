<?php
    $aboutPosts = new WP_Query(array(
        'no_found_rows' => true,
        'category_name' => $category,
        'posts_per_page' => $amount,
        'offset' => $offset,
        'orderby' => $orderby,
        'order' => $order

    ));
    if ($aboutPosts->have_posts()) : 
        while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?>  
        <div class=" nota ucard h-normal vstretch round-corners margin-top-10">
            <a class="nolink" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('home_thumbnail_medium'); ?>

                <h2 class="titulo">
                    <?php echo wp_trim_words( get_the_title(), 20 ); ?>
                </h2>
            </a>
            <div class="hidden-mobile">
                <?php the_excerpt(); ?>
            </div>
        </div>

    <?php  
        endwhile;
    endif;
    wp_reset_query();
    ?>
