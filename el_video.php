<div class="col-g clean vstretch" style="overflow: hidden;">
	<div class="stretch el-video-container">
		<img class="" src="<?php echo get_bloginfo('template_url') ?>/assets/img/elvideo_header.png" alt="El video" style="width: 100%; heigth: auto; margin-bottom: 10px">
            <?php 
		// get_template_part( "elvideo_container_youtube"); 
		?>

<?php
    $aboutPosts = new WP_Query(array(
        'no_found_rows' => true,
        'category_name' => 'lo_mas_jot',
        'posts_per_page' => 1,
		'orderby' => 'modified',
		'order'   => 'DESC',
    ));
    if ($aboutPosts->have_posts()) : 
        while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?> 
	  <div class="text-center">
		<?php the_content(); ?>
	  </div>

    <?php  
        endwhile; 
	  endif;
	      wp_reset_query();
	?>
    </ul>
		<div class="clearfix"></div>

	</div>
	<div class="clearfix"></div>

</div>
