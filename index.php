<?php get_header() ?>

<?php
    if(is_category( )){
        echo "Estas en una categoria";
    } elseif(is_home()) {
        // echo "Este es el cuerpo de la página";
    } else {
        echo "No se donde estás";
    }
?>

<?php get_template_part( "destacados")?>


<?php get_footer() ?>
