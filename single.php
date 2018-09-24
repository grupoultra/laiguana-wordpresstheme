<?php
    get_header() ;
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part( "note_header");?>

<div class="margin-top-10">
    <div class="col-g">
    <?php get_template_part( "banners/nota/desktop/ND-HM1"); ?>
    <?php get_template_part( "banners/nota/mobile/NM-HS2"); ?>
    <div class="articulo">
        <?php the_content(); ?>
    </div>
    <?php
        get_template_part( "banners/nota/desktop/ND-N1");        
        get_template_part( "banners/nota/desktop/ND-P1");       
        get_template_part( "banners/nota/mobile/NM-C1");
        get_template_part( "banners/nota/desktop/ND-HM2");
        get_template_part( "single_comments");
    ?>

    </div>
    <div class="col-p">
    <?php
        $imagesLoMasLeido = 1;
        get_template_part( "banners/nota/desktop/ND-NV1");
        get_template_part( "banners/nota/desktop/ND-V2");
        get_template_part( "banners/nota/desktop/ND-C1");
        get_template_part( "lo_mas_leido");
    ?>
    </div>
</div>
<div class="clearfix"></div>
<?php get_template_part( "banners/nota/desktop/ND-HL1"); ?>
<?php get_template_part( "banners/nota/mobile/NM-HS3"); ?>
    <?php

        endwhile;
    endif;

    ?>
<?php get_footer() ?>
