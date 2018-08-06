
<?php

    $aboutPosts = new WP_Query( array(
        'no_found_rows' => true,
        'posts_per_page' => 6,
        'meta_key' => 'wpb_post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'
    ));
    if ($aboutPosts->have_posts()) : ?>

<div class="list-news-card <?php if ($imagesLoMasLeido <= 0) :?>single-size<?php endif?> lomasleido hidden-mobile margin-top-10">

    <img class="card-img-top" src="<?php echo get_bloginfo('template_url') ?>/assets/img/lo-mas-leido_header.jpg" alt="Lo + Polémico">

    <ul class="list-group list-group-flush" style="background-color: white">
    <?php
        $nota_index = 0;
        while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?>

        <li class="list-group-item clean <?php if ($nota_index == 0) :?>with-image<?php endif?>">
            <a href="<?php the_permalink(); ?>">
                <?php if ($nota_index == 0 || $imagesLoMasLeido > 0) :?>
                    <?php the_post_thumbnail('home_thumbnail_small') ?>
                <?php endif;?>

                <h3 class="titulo">
                    <?php echo wp_trim_words( get_the_title(), 20 ); ?>
                    <?php echo wpb_get_post_views(get_the_ID());?>
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

