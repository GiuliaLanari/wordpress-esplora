<div class="navcontainer clearfix position-absolute">
    <div class="header clearfix row px-2">
        <div class="col-4">
            <a href="http://localhost/wordpress-esplora/home/" class="header__logo"> <img src="<?php echo site_url("/wp-content/themes/special-team3/assets/img/epic-road.png") ?>" alt="logo" class="position-absolute   " width="18%" /></a>
        </div>
        <div class="col-8">
            <?php
            wp_nav_menu(array(
                "theme_location" => "header",
                "depth" => "2",
                "navcontainer" => "false",
                "navcontainer_class" => "yo dude what",
                "menu_class" => "header__menu",
            ))
            ?>
        </div>
    </div>
</div>