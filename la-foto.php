
<?php
    $aboutPosts = new WP_Query(array(
        'no_found_rows' => true,
        'category_name' => 'la_foto',
        'posts_per_page' => 1,
    ));
    if ($aboutPosts->have_posts()) : ?>

<div  class="row image-row la-foto margin-top-10">
    <?php    while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?>
        <?php the_post_thumbnail('destacado') ?>
    <?php endwhile; ?>

    <div class="lafoto-titulo">

        <div class="col-xs-2 clean">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/lafoto_title.jpg" alt="La foto"
				 class="img-responsive lafoto-etiqueta">
        </div>


        <div class="col-xs-1 col-xs-offset-9">
            <img class="img-responsive" src="<?php echo get_bloginfo('template_url') ?>/assets/img/igua_tag.png" alt="La Iguana">
        </div>
    </div>

    <div class="lafoto-texto">
        <span>
            <?php the_title() ?>
        </span>
    </div>
</div>

<?php endif; ?>
