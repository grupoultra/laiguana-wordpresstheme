<div class="col-g clean vstretch" style="overflow: hidden;">
	<div class="stretch el-video-container">
		<img class="" src="<?php echo get_bloginfo('template_url') ?>/assets/img/elvideo_header.png" alt="El video" style="width: 100%; heigth: auto; ">
            <?php 
		// get_template_part( "elvideo_container_youtube"); 
		?>


<?php
    $aboutPosts = new WP_Query(array(
        'category_name' => 'el_video',
        'posts_per_page' => 1,
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
