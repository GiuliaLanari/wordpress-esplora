<?php
get_header();
include "nav.php";

the_post(); ?>
<div class="my-2  text-center">
<h1 style="color: green; background-color:white"><?php the_title(); ?></h1>
</div>

<div class="contatti">
    <?php the_content(); ?>
</div>




<?php 
include "footerStyle.php";
get_footer();