<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="refresh" content="240">
		<title><?php echo(single_post_title( '' ) . " | " . get_bloginfo()); ?></title>
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
 
		<!-- Start Alexa Certify Javascript &ndash;&gt;--> 
		<script type="text/javascript"> 
		  _atrk_opts = { atrk_acct:"trjMk1a4eFf2L7", domain:"laiguana.tv",dynamic: true}; 
		  (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })(); 
		</script> 
		<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=trjMk1a4eFf2L7" style="display:none" height="1" width="1" alt="" /></noscript> 
		 
		<!-- Clickio --> 
		<script async type="text/javascript" src="//s.clickiocdn.com/t/pb205553.js"></script>
		<script async type="text/javascript" src="//s.clickiocdn.com/t/common_258.js"></script>
		
		<!--  Publicidad embimedia nativa en el home  -->
		<script type="text/javascript">
		  window._taboola = window._taboola || [];
		  _taboola.push({home:'auto'});
		  !function (e, f, u, i) {
			if (!document.getElementById(i)){
			  e.async = 1;
			  e.src = u;
			  e.id = i;
			  f.parentNode.insertBefore(e, f);
			}
		  }(document.createElement('script'),
		  document.getElementsByTagName('script')[0],
		  '//cdn.taboola.com/libtrc/embi-media-laiguana/loader.js',
		  'tb_loader_script');
		  if(window.performance && typeof window.performance.mark == 'function')
			{window.performance.mark('tbl_ic');}
		</script>
	</head>

<body <?php body_class("body"); ?>>
    <div id="white-container" class="container">
	<?php
		if(is_home()){
			get_template_part( 'banners/home/desktop/HD-HB1' );
		} elseif (is_category()){
			get_template_part( "banners/category/desktop/CD-HB1");	
		} elseif (is_singular()){
			get_template_part( 'banners/nota/desktop/ND-HB1' );
		}
		get_template_part( 'marquee' );
		get_template_part( 'main', 'header' );
		get_template_part( 'menu' )
	?>






