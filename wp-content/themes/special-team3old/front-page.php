<?php

get_header(); 
?>
<div class="container-fluid">
<div class="row">

<div class="col-12 px-0 overflow-hidden position-relative " style="height: 100dvh;">

  <img  src="<?php echo site_url("/wp-content/themes/special-team3/assets/img/epic-road.png") ?>" alt="logo" class="position-absolute mt-2 ms-2 " width="20%"/>

    <video class="object-fit-cover w-100 " autoplay loop muted >
       <source src="./wp-content/themes/special-team3/assets/img/Egypt.mp4" type="video/mp4">
         Your browser does not support the video tag.
    </video>

    <a class="btn position-absolute btn-front-page" href="http://localhost/wordpress-esplora/home/" >Scopri di più!</a>


</div>
</div> 
</div>
<?php
get_footer();