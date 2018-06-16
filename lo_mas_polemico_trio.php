<?php
    $aboutPosts = new WP_Query(array(
        'category_name' => 'lo_mas_polemico',
        'posts_per_page' => 5,
    ));
    if ($aboutPosts->have_posts()) : ?>

<div class="ucard trio-item h-small round-left">
    <img class="card-img-top" src="<?php echo get_bloginfo('template_url') ?>/assets/img/lo-mas-polemico_header.png" alt="Lo + Polémico">
    <div class="trio-item-body" >

        <ul class="list-group list-group-flush" style="background-color: white">
        <?php while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?>

            <li class="list-group-item trio-list-item">
                <a href="<?php the_permalink(); ?>">
                    <h4 class="titulo hcenter clean">
                        <?php echo wp_trim_words( get_the_title(), 10 ); ?>
                    </h3>
                </a>
            </li>

        <?php endwhile; ?>
        </ul>
    </div>

</div>

<?php
    endif;
    wp_reset_query();
    ?>

