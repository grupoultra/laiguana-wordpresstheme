<?php 
    get_header() ;
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part( "note_header");?>

<div class="margin-top-10">
    <div class="col-g">
    <?php get_template_part( "ND-HM1"); ?>
    <div class="articulo">
        <?php the_content(); ?>
    </div>
    <?php
        get_template_part( "ND-N1"); 
        get_template_part( "ND-HM2");         
        get_template_part( "single_comments");         
    ?>  

    </div>
    <div class="col-p">
    <?php
        $imagesLoMasLeido = 1;
        include(locate_template('lo_mas_leido.php'));               
        get_template_part( "ND-V1");     
        get_template_part( "lo_mas_polemico"); 
        get_template_part( "ND-C1");
    ?>
    </div>
</div>
<div class="clearfix"></div>
<?php get_template_part( "ND-HL1"); ?>
    <?php 

        endwhile;
    endif;
    
    ?>
<?php get_footer() ?>
