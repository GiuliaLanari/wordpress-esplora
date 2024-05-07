<?php


use function FakerPress\get;


get_header();
?>
<div class="position-relative overflow-hidden">


    <?php
    include "nav.php";
    ?>



    <div class="container-fluid position-absolute  overflow-hidden p-0 ">
        <!-- Logo -->
        <?php
        // Verifica se la pagina ha un'immagine in evidenza
        if (has_post_thumbnail()) {
            // Recupera l'ID dell'immagine in evidenza
            $thumbnail_id = get_post_thumbnail_id();


            // Recupera l'URL dell'immagine in evidenza di dimensioni "thumbnail"
            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail')[0];


            // Visualizza l'immagine in evidenza
            echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . get_the_title() . '">';
        } else {
            // Se la pagina non ha un'immagine in evidenza, mostra un'immagine predefinita o un messaggio alternativo
            echo 'Nessuna immagine in evidenza disponibile.';
        }
        ?>

    </div>




    <?php
    the_content();
    
// ID delle pagine statiche desiderate
$page_ids = array(109, 101, 98);

// Ciclo attraverso gli ID delle pagine
foreach ($page_ids as $page_id) {
    // Ottieni l'estratto della pagina specifica
    $excerpt = get_post_field('post_excerpt', $page_id);

    // Output dell'estratto con un link alla pagina completa
    echo '<div class="page-excerpt">';
    echo '<h2><a href="' . get_permalink($page_id) . '">' . get_the_title($page_id) . '</a></h2>';
    echo '<p>' . $excerpt . '</p>';
    echo '</div>';
}


    include "footerStyle.php";
    get_footer();
