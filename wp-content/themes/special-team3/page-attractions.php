<?php


use function FakerPress\get;


get_header();
?>
<div class="position-relative overflow-hidden ">


    <?php
    include "nav.php";
    ?>
  



<div class="style-attractions">
<?php
    the_content();
   
?>
</div>


<!-- Prova recupero articles  -->
<div class="banner">
    <?php
   
      $args = array(
        'numberposts'	=> 4,
        'category'		=> 4,
    );
    $my_posts = get_posts( $args );
    // print_r($my_posts)
    
    if( ! empty( $my_posts ) ){
        $output = '<col>';
        print_r($my_posts[1]);
        // foreach ( $my_posts as $p ){
        //     // print_r($p);
        //     // $output = '<li><a href="' . get_permalink( $p->ID ) . '">' 
        //     // . $p->post_title . '</a></li>';
        // }
        $output .= '<col>';
    }
    // ?>

</div>
<!--  -->
<?php
    include "footerStyle.php";
    get_footer();