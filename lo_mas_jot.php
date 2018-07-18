<?php
    $aboutPosts = new WP_Query(array(
        'category_name' => 'lo_mas_jot',
        'posts_per_page' => 3,
    ));
    if ($aboutPosts->have_posts()) : ?>
<div class="col-p h-normal hidden-mobile">
	<div class="ucard h-normal stretch round-right clean no-border">
		<img class="card-img-top" src="<?php echo get_bloginfo('template_url') ?>/assets/img/lohot_header.jpg" alt="Lo + jot" >

		<ul class="orange-border list-group list-group-flush" style="padding-top: 5px; margin-bottom: 0px; height: 435px;">

        <?php while ($aboutPosts->have_posts()) : $aboutPosts->the_post();?>

			<li class="list-group-item clean">
				<h3 class="titulo">
					<a class="nolink" href="<?php the_permalink() ?>">
                        <?php
                            the_post_thumbnail('lo_mas_jot', array('class' => 'no-margin no-padding', "style" => 'width:100%; height: 80px;'));
                            the_title();
                        ?>
					</a>
				</h3>
			</li>
        <?php endwhile; ?>

		</ul>

	</div>
</div>
<?php endif;
    wp_reset_query();
 ?>
