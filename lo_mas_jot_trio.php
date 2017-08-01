<?php
    $aboutPosts = new WP_Query(array(
        'category_name' => 'lo_mas_jot',
        'posts_per_page' => 3,
    ));
    if ($aboutPosts->have_posts()) : ?>

<div class="ucard trio-item h-small round-left">
	<div class="ucard h-normal stretch clean no-border">
		<img class="card-img-top" src="<?php echo get_bloginfo('template_url') ?>/assets/img/lo-mas-jot_header.jpg" alt="Lo + jot" >

        <div class="trio-item-body" >

            <ul class="list-group list-group-flush" style="padding-top: 5px; margin-bottom: 0px; height: 421px;">

            <?php while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?> 

                <li class="list-group-item trio-list-item">
                    <a href="<?php the_title() ?>">
                        <h4 class="titulo hcenter clean">
                            <?php the_title(); ?>
                        </h3>
                    </a>
                </li>
            <?php endwhile; ?>
            
            </ul>

    	</div>
	</div>
</div>
<?php endif;
    wp_reset_query();
 ?>