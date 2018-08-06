<?php
    $aboutPosts = new WP_Query(array(
        'no_found_rows' => true,
        'posts_per_page' => 12,
    ));
    if ($aboutPosts->have_posts()) : ?>

<div class="list-news-card single-size lomasreciente hidden-mobile margin-top-10">
    <img class="card-img-top" src="<?php echo get_bloginfo('template_url') ?>/assets/img/lo-reciente-head.jpg" alt="Lo + Reciente">

    <ul class="list-group list-group-flush" style="background-color: white">
    <?php 
        $nota_index = 0;
        while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?> 

        <li class="list-group-item clean <?php if ($nota_index == 0) :?>with-image<?php endif?>">
            <a href="<?php the_permalink(); ?>">
                <?php if ($nota_index == 0) :?>
                    <?php the_post_thumbnail('home_thumbnail_small') ?>
                <?php endif;?>

                <h3 class="titulo">
                    <?php echo wp_trim_words( get_the_title(), 20 ); ?>
                </h3>
            </a>
        </li>

    <?php  
        $nota_index++;
        endwhile; ?>
    
    </ul>
</div>

<?php 
    endif;
    wp_reset_query();
    ?>

