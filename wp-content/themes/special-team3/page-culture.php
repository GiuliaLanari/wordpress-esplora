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
    

<?php
    include "footerStyle.php";
    get_footer();