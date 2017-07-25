

<div class="row">
    <div class="owl-carousel-destacados">
        <?php
            $aboutPosts = new WP_Query(array(
            'category_name' => 'Destacados',
            'posts_per_page' => 3,
            ));

            if ($aboutPosts->have_posts()) :
            while ($aboutPosts->have_posts()) :
                $aboutPosts->the_post();?>  

        <div class="destacado-item">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('destacado'); ?>
            </a>
            <div class="destacado-caption">
                <a class="destacado-title-a " href="${nota.getPath()}" title="${nota.getTitulo()}">
                    <?php the_title()?>
                </a>

                <p class="destacado-date">Publicada el <?php the_date()?></p>
            </div>
        </div>

        <?php
            endwhile;

            echo paginate_links(array(
                'total' => $aboutPosts->max_num_pages
            ));

            endif;

        ?>
    </div>
</div>

