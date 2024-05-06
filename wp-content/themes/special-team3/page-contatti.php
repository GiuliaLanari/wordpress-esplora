<?php
get_header();
include "nav.php";

the_post(); ?>
<div class="my-2  text-center">
<h1><?php the_title(); ?></h1>
</div>

<div class="contatti text-white">
    <?php the_content(); ?>
</div>



<?php get_footer();