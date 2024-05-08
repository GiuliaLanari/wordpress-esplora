<?php


// use function FakerPress\get;


get_header();
?>
<div class="position-relative overflow-hidden ">

<div style="background-color: #002338; height:5rem">
<?php
    include "nav.php";
   
    ?>
</div>
    
  

<div style="height: 25rem;" class="style-error d-flex flex-column justify-content-center align-items-center">
<h1>Error..</h1>
<h4>to return to the home <a href="<?= site_url("/home") ?>" >click here! </a></h4>
</div>
    

<?php
    include "footerStyle.php";
    get_footer();