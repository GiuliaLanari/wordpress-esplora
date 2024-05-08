<?php


use function FakerPress\get;


get_header();
?>
<div class="position-relative overflow-hidden ">


    <?php
    include "nav.php";
    ?>
  



<div class="style-culture">
<?php
    the_content();
?>
</div>
<div id="primary" class="content-area">

    <main id="main" class="site-main site-culture" role="main">
    <h3 class="text-center">Migliori posti per dormire:</h3>
    <div class="row w-75 mx-auto">
        <?php
        // Recupera la categoria selezionata dall'utente
        $category_selection = get_field('category_selection'); 
        $selected_category_food=get_cat_ID( "Culture" );
        $selected_category_var=get_cat_ID( $category_selection );

        // Query degli articoli della categoria selezionata
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category__and' => array($selected_category_food, $selected_category_var)
        );
        $query = new WP_Query($args);

        // Loop per visualizzare gli articoli
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="col-md-4 p-3">
                <div class="card h-100">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="featured-image overflow-hidden">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="card-content p-2">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                    </div>
                </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <p><?php esc_html_e('Nessun articolo trovato.', 'textdomain'); ?></p>
        <?php endif; ?>
    </div>
    </main><!-- #main -->
</div>

<?php
    include "footerStyle.php";
    get_footer();