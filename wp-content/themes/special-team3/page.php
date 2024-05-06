<?php

use function FakerPress\get;

get_header(); 
?>
<div class="position-relative">

<?php
include "nav.php";
?>
<!-- <div class="custom-background">

// add_theme_support( 'custom-background' );
</div> -->

<div class="container-fluid position-absolute  overflow-hidden p-0 ">
    <!-- Logo -->
    <?php
    // Recupera l'URL del logo dal campo personalizzato 'logo' utilizzando ACF
    $foto_url = get_field('foto');

    // Verifica se è stato fornito un URL del logo
    if (!empty($foto_url)) {
      echo '<img src="' . esc_url($foto_url) . '" alt="Foto" class="vw-100 vh-100" style="max-height: 50rem;" >';
     
    }
    ?>
    </div>
</div>


<?php
the_content();

include "footerStyle.php";
get_footer();