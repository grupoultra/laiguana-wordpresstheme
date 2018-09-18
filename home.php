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
        get_template_part( "banners/home/desktop/HD-N1");
        get_template_part( "banners/home/mobile/HM-HS2");
    ?>
</div>

<div class="col-p">
    <?php
        get_template_part( "banners/home/desktop/HD-V1");
        get_template_part( "banners/home/desktop/HD-V5");
    ?>
</div>


<div class="col-g">
    <?php
        $category = 'C5';
        include(locate_template('Nota.php'));
        $category = 'C6';
	include(locate_template('Nota.php'));
        $amount = 2;
        $category = 'General';
        $modified = 'modified';
        $order = 'DESC';
        include(locate_template('Nota.php'));
    ?>

</div>

<div class="col-p">
    <?php
        get_template_part( "banners/home/desktop/HD-C1");
        get_template_part( "lo_mas_leido");
    ?>
</div>

<div class="clearfix"></div>

<?php get_template_part( "banners/home/desktop/HD-HL1"); ?>
<?php get_template_part( "banners/home/mobile/HM-HS3"); ?>

<div class="margin-top-10">
    <div class="col-g">
        <?php get_template_part( "iguanazos"); ?>
    </div>
    <div class="col-p hidden-mobile">
        <?php get_template_part( "iguanazos_anteriores"); ?>
    </div>
    <div class="clearfix"></div>
    <?php get_template_part( "banners/home/mobile/HM-C1"); ?>
</div>

<div class="margin-top-10">
    <div class="col-g">
        <?php
            $amount = 6;
            $category = 'General';
            $modified = 'modified';
            $order = 'DESC';
            $offset = 2;
            include(locate_template('Nota.php'));
        ?>

    </div>

    <div class="col-p">
        <?php
            get_template_part( "banners/home/desktop/HD-C2");
            get_template_part( "Cara_a_cara");
            get_template_part( "banners/home/desktop/HD-V2");
        ?>
    </div>
    <div class="clearfix"></div>
    <?php get_template_part( "banners/home/desktop/HD-HL2"); ?>
    <?php get_template_part( "banners/home/mobile/HM-HS4"); ?>
</div>

<div class="clearfix"></div>

<?php get_template_part( "la-foto"); ?>

<?php get_template_part( "banners/home/mobile/HM-C2"); ?>

<div class="margin-top-10">
    <div class="col-g">
        <?php
            $amount = 6;
            $category = 'General';
            $modified = 'modified';
            $order = 'DESC';
            $offset = 8;
            include(locate_template('Nota.php'));
        ?>

    </div>

    <div class="col-p hidden-mobile">
        <?php
            get_template_part( "banners/home/desktop/HD-C3");
            get_template_part( "guerra_twitter");
            get_template_part( "banners/home/desktop/HD-V3");
        ?>
    </div>

    <div class="clearfix"></div>

    <?php get_template_part( "banners/home/desktop/HD-HL3"); ?>
    <?php get_template_part( "banners/home/mobile/HM-HS5"); ?>
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

<?php 
    get_template_part( "banners/home/desktop/HD-HB2");
    get_template_part( "banners/home/mobile/HM-C3");
?>

<div class="margin-top-10">
    <div class="col-g">
        <?php
            $amount = 6;
            $category = 'General';
            $modified = 'modified';
            $order = 'DESC';
            $offset = 14;
            include(locate_template('Nota.php'));?>
            <div class="clearfix"></div>
        <?php get_template_part( "banners/home/desktop/HD-HM4"); ?>
        <?php get_template_part( "banners/home/mobile/HM-HS6"); ?>
    </div>
    <div class="col-p">
        <?php get_template_part( "lo_mas_reciente"); ?>
        <?php get_template_part( "banners/home/desktop/HD-V4"); ?>
    </div>
</div>

<div class="clearfix"></div>

<?php
    get_template_part( "noticias_anteriores");
?>

<div class="clearfix"></div>

<?php
    get_template_part( "banners/home/desktop/HD-HL4");
    get_template_part( "banners/home/mobile/HM-C4");
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
    get_template_part( "banners/home/desktop/HD-HL5");
    get_template_part( "banners/home/mobile/HM-HS7");
?>

<?php get_footer() ?>
