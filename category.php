<?php
    get_header() ;
    ?>

    <div class="margin-top-10">
        <div class="col-g">
            <?php if (have_posts()) : ?>
                <div class="articulo-titulo">
                    <span>
                        <?php single_cat_title(); ?>
                    </span>
                </div>

                <?php while (have_posts()) : the_post(); ?>

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
            <?php endwhile; ?>
            <div class="clearfix"></div>
            <div class="paging text-center margin-top-10">
            <?php
                echo paginate_links( array(
                    'prev_text' => '<< Anterior',
                    'next_text' => 'Siguiente >>'
                ) );?>
            </div>
            <?php
            else :
                echo '<p>No se encontraron artículos</p>';
            endif;
            ?>
        </div>
        <div class="col-p">
            <?php
                $imagesLoMasLeido = 1;
                include(locate_template('lo_mas_leido.php'));
                get_template_part( "banners/nota/desktop/ND-V1");
                get_template_part( "lo_mas_polemico");
                get_template_part( "banners/nota/desktop/ND-C1");
            ?>
        </div>
    </div>
<?php get_footer() ?>
