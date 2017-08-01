<?php get_header() ?>

<?php
    if(is_category( )){
        echo "Estas en una categoria";
    } elseif(is_home()) {
        get_template_part( "destacados");
    } elseif(is_single()) {
        echo "Single";
    } else {
        echo "No se donde estás";
    }
?>
<?php get_footer() ?>
