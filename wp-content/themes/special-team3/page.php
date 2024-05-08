<?php


use function FakerPress\get;


get_header();
?>
<div class="position-relative overflow-hidden">


    <?php
    include "nav.php";
    ?>



    <div class="position-absolute  overflow-hidden p-0 ">
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

<div class="banner">
    <?php
        $args = array(
            'post_type' => 'page', 
            'posts_per_page' => 3, 
            'orderby' => 'date',
            'order' => 'DESC' ,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
    ?>
    <div class="banner-item">
        <a href="<?php the_permalink(); ?>">
            <?php
                
                $content = apply_filters('the_content', get_the_content());
             
                preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
                
                if ($matches) :
            ?>
            <div class="cover-wrapper">
                <img src="<?php echo $matches[1]; ?>" alt="<?php the_title(); ?>">
            </div>
                
            <?php endif; ?>
        </a>
        <a class="txt-wrap" href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
            <p>Scopri di più</p>
        </a>
    </div>
    <?php
            endwhile;
        endif;
        wp_reset_postdata(); 
    ?>
</div>

<?php

    include "footerStyle.php";
    get_footer();
