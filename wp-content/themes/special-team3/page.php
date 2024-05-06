<?php

get_header(); 

?>

<div class="container clearfix">
    <div class="header clearfix">
        <a href="http://localhost/wordpress-esplora/home/" class="header__logo"> <img  src="<?php echo site_url("/wp-content/themes/special-team3/assets/img/epic-road.png") ?>" alt="logo" class="position-absolute mt-2 ms-2 " width="15%"/></a>

    <?php
         wp_nav_menu(array(
             "theme_location" => "header",
             "depth"=>"2",
             "container"=>"false",
             "container_class"=> "yo dude what col-auto",
             "menu_class"=> "header__menu",
         ))
    ?>

    </div>

</div>









<?php

get_footer();