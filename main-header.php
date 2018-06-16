<header>
    <div class="row mobile-header hidden-desktop">
        <a href="/">
            <img src="/activos/assets/img/li_mobile_head.jpg" alt="La Iguana">
        </a>

        <div class="row social-box center-block text-center">
			<?php get_template_part( "social-nav"); ?>
        </div>
    </div>

    <div class="row main-header hidden-mobile">
        <a id="titlelink" href="/"></a>
        <div class="text-right twitter-follow">

            <a  title="Sigue a LaIguanaTV (@la_iguanatv) en Twitter"
                href="https://twitter.com/intent/follow?&amp;ref_src=twsrc%5Etfw&amp;region=follow_link&amp;screen_name=la_iguanatv&amp;tw_p=followbutton">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/twitter-seguir.png" alt="La Iguana">
            </a>
        </div>

		<?php get_template_part( "search-box"); ?>

        <div class="social-box">
			<?php get_template_part( "social-nav"); ?>
        </div>
    </div>
</header>