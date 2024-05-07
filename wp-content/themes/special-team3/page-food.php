<?php
get_header();
include "nav.php";

the_post(); ?>
<div class="title-food" >
<h1><?php the_title(); ?></h1>
</div>

<div class="content-food">
    
    <!-- <div style="background:  #0091b5 ;">
        <h1 style="color: white ;" >Attractions</h1>
        <h2 style="color: white">h2</h2>
        <h3 style="color: white">h3</h3>
    </div>
    <div style="background:    #a349a4;">
        <h1 style="color: white">Culture</h1>
        <h2 style="color: white">h2</h2>
        <h3 style="color: white">h3</h3>
    </div>
    <div style="background:   #eeba00 ;">
        <h1 style="color: white">food</h1>
        <h2 style="color: white">h2</h2>
        <h3 style="color: white">h3</h3>
    </div>
    <div style="background:  #db5000 ;">
        <h1 style="color: white">Contatti</h1>
        <h2 style="color: white">h2</h2>
        <h3 style="color: white">h3</h3>
    </div> -->

    <div class="container-md style-food" >
    <?php the_content(); ?>

    </div>

</div>




<?php 
include "footerStyle.php";
get_footer();