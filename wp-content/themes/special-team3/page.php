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
    ?>

<div class="banner my-5">
    <?php
        $args = array(
            'post_type' => 'page', // Recupera solo le pagine
            'posts_per_page' => 3, // Numero massimo di pagine da recuperare
            'orderby' => 'date', // Ordina per data di pubblicazione
            'order' => 'DESC' // Ordine decrescente
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
    ?>
    <div class="banner-item">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
            <h2><?php the_title(); ?></h2>
            <span class="button">Scopri di più</span>
        </a>
    </div>
    <?php
            endwhile;
        endif;
        wp_reset_postdata(); // Reimposta i dati del post
    ?>
</div>

<?php

    include "footerStyle.php";
    get_footer();
