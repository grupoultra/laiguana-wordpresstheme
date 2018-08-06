<?php
    $aboutPosts = new WP_Query(array(
        'no_found_rows' => true,
        'posts_per_page' => 5,
    ));
    if ($aboutPosts->have_posts()) : ?>

<div class="ucard trio-item h-small round-left">
    <img class="card-img-top" src="<?php echo get_bloginfo('template_url') ?>/assets/img/lo-mas-reciente_header.png" alt="Lo + Reciente">
        <div class="trio-item-body" >

            <ul class="list-group list-group-flush" style="background-color: white">
            <?php
                $nota_index = 0;
                while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?>

                <li class="list-group-item trio-list-item">
                    <a href="<?php the_permalink(); ?>">
                        <h4 class="titulo hcenter clean">
                            <?php echo wp_trim_words( get_the_title(), 10 ); ?>
                        </h3>
                    </a>
                </li>

            <?php
                $nota_index++;
                endwhile; ?>

            </ul>
        </div>
</div>

<?php
    endif;
    wp_reset_query();
    ?>

