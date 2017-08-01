<div class="col-g">
	<div class="card stretch green-border round-left"  style="overflow: hidden">
    <?php    
        $aboutPosts = new WP_Query(array(
        'category_name' => 'iguanazos',
        'posts_per_page' => 1,
    ));
    if ($aboutPosts->have_posts()) : 
            while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?> 
    
		<img class="iguanazos-header-image" src="<?php echo get_bloginfo('template_url') ?>/assets/img/iguanazos_header.png" alt="Iguanazos">

        <?php the_post_thumbnail('iguanazos', array('class' => 'img-responsive', 'alt' => get_the_title())) ?>
    <?php 
        endwhile; 
    endif; 
    wp_reset_query();
    ?>
	</div>
</div>

