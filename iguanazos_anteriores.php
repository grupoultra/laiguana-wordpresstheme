<div class="orange-border round-right vstretch">
<?php    
    $aboutPosts = new WP_Query(array(
    'category_name' => 'iguanazos',
    'posts_per_page' => 3,
    'offset' => 1
));
if ($aboutPosts->have_posts()) : ?>
    <img  class="card-img-top" src="<?php echo get_bloginfo('template_url') ?>/assets/img/iguant_header.png" alt="Iguanazos Anteriores" style="width: 100%">
    <?php while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?> 
    <div class="iguanant">
        <?php the_post_thumbnail('iguanazos_anteriores', array('class' => 'iguanant-img img-responsive', 'alt' => get_the_title())) ?>
    </div>
<?php 
endwhile;
endif; 
    wp_reset_query();
?>
</div>

