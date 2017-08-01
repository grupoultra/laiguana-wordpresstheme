<?php 
    get_header(); 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>

<?php get_template_part( "destacados"); ?>

<div class="col-g">
    <?php 
        $offset = 0;
        $amount = 1;
        $category = 'C1';
        include(locate_template('Nota.php'));
        $category = 'C2';
        include(locate_template('Nota.php'));
        $category = 'C3';
        include(locate_template('Nota.php'));
        $category = 'C4';
        include(locate_template('Nota.php'));
    ?>
    <div class="clearfix"></div>
    <?php 
        get_template_part( "HD-HM1");
        get_template_part( "HD-HS2");

        $amount = 4;        
        $category = 'General';
        include(locate_template('Nota.php'));
    ?>

    <div class="clearfix"></div>
    <?php 
        get_template_part( "HD-HS3");
    
    ?>    
</div>

<div class="col-p">
    <?php 
        get_template_part( "HD-V1");
        $imagesLoMasLeido = 0;
        include(locate_template('lo_mas_leido.php'));               
        get_template_part( "HD-C1"); 
        get_template_part( "lo_mas_polemico"); 
    ?>
    
</div>

<div class="clearfix"></div>

<?php get_template_part( "HD-HL1"); ?>

<div class="margin-top-10">
    <div class="col-g">
        <?php 
            get_template_part( "iguanazos");
            $amount = 6;        
            $category = 'General';
            $offset = 4;
            include(locate_template('Nota.php'));
        ?>
        
    </div>
    <div class="col-p">
        <?php 
            get_template_part( "iguanazos_anteriores");
            get_template_part( "HD-C2");
            get_template_part( "Cara_a_cara");             
            get_template_part( "HD-V2");            
        ?>
    </div>

    <div class="clearfix"></div>

    <?php get_template_part( "HD-HL2"); ?>
</div>

<?php get_template_part( "la-foto"); ?>

<div class="margin-top-10">
    <div class="col-g">
        <?php 
            $amount = 6;        
            $category = 'General';
            $offset = 10;
            include(locate_template('Nota.php'));
        ?>
        
    </div>
    <div class="col-p">
        <?php 
            get_template_part( "HD-C3");
            get_template_part( "guerra_twitter");
            get_template_part( "HD-V3");            
        ?>
    </div>

    <div class="clearfix"></div>

    <?php get_template_part( "HD-HL3"); ?>
</div>

<div class="lomasjot el-video margin-top-10">
    <div class="col-g">
        <?php get_template_part( "el_video"); ?>
    </div>
    <div class="col-p">
        <?php get_template_part( "lo_mas_jot"); ?>
    </div>
</div>

<div class="clearfix"></div>

<?php get_template_part( "HD-HB2"); ?>

<div class="margin-top-10">
    <div class="col-g">
        <?php 
            $amount = 6;        
            $category = 'General';
            $offset = 16;
            include(locate_template('Nota.php'));?>
            <div class="clearfix"></div>
        <?php get_template_part( "HD-HM4"); ?>
    </div>
    <div class="col-p">
        <?php get_template_part( "lo_mas_reciente"); ?>
        <?php get_template_part( "HD-V4"); ?>
    </div>
</div>

<div class="clearfix"></div>

<?php 
    get_template_part( "noticias_anteriores"); 
?>

<div class="clearfix"></div>

<?php
    get_template_part( "HD-HL4"); 
    get_template_part( "HM-C4");     
?>

<div class="trio" >
<?php
    get_template_part( "lo_mas_reciente_trio"); 
    get_template_part( "lo_mas_polemico_trio"); 
    get_template_part( "lo_mas_jot_trio"); 
?>
</div>
<div class="clearfix"></div>

<?php
    get_template_part( "HD-HL5"); 
    get_template_part( "HM-HS7"); 
?>

<?php get_footer() ?>
