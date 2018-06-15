<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script type="text/javascript">
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-33062755-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>

<body <?php body_class("body"); ?>>
    <div id="white-container" class="container">
	<?php
		if(is_home()){
			get_template_part( 'HD-HB1' );
		} elseif (is_singular()){
			get_template_part( 'ND-HB1' );
		}
		get_template_part( 'main', 'marquee' );
		get_template_part( 'main', 'header' );
		get_template_part( 'main', 'menu' )
	?>






