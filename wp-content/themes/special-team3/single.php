<?php



use function FakerPress\get;



get_header();
?>
<div class="position-relative overflow-hidden ">


<div style="background-color: #002338; height:5rem">
<?php
    include "nav.php";
   
    ?>
</div>


  




<div class="style-articoli">
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</div>
    


<?php
    include "footerStyle.php";
    get_footer();