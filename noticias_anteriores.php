<div class="noticiasanteriores margin-top-10">
    <div class="card stretch green-border no-border">
        <img class="" src="<?php echo get_bloginfo('template_url') ?>/assets/img/anteriores_header.png" alt="Noticias anteriores" style="width: 100%; height: auto;">

        <div id="noticiasanteriores-container" class="owl-carousel2 noticiasanteriores-container no-padding no-margin ucard h-normal vstretch row orange-border">


<?php    $aboutPosts = new WP_Query(array(
        'category_name' => 'General',
        'posts_per_page' => 22,
    ));
    if ($aboutPosts->have_posts()) : 
        $nota_index = 0;
    
        while ($aboutPosts->have_posts()) : $aboutPosts->the_post();
        ?> 

                <?php if($nota_index % 2 == 0):?>
                <div class="noticiasanteriores-item">
                <?php endif;?>
                    <div class="thumbnail">
                        <a href="<?php the_title() ?>">
                            <?php the_post_thumbnail('noticias_anteriores', array('class' => 'img-responsive owl-lazy no-padding no-margin', 'alt' => get_the_title())) ?>

                            <div class="caption">
                                <h3 class="titulo"><?php the_title() ?></h3>
                            </div>
                        </a>
                    </div>
                <?php if($nota_index % 2 != 0):?>
                </div>
                <?php endif;?>
        <?php 
            $nota_index = $nota_index +1;
            endwhile;
            endif;
            wp_reset_query();
            ?>

        </div>
    </div>
</div>

