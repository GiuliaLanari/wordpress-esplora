<?php

get_header(); 
?>
<nav class="nav-custom"> 
            
           <img class="logo-custom" src="<?php echo site_url("/wp-content/themes/special-team3/assets/img/epic-road.png") ?>" alt="Logo ">
    
            <div class="menu-extended">
                
                <div class="subnav-custom">
                    
                    <button id="partenze" class="nav-btn" onclick="openPartenze()"><a href="#">Partenze</a></button>
                    <div id="customPartenze" class="overlay">
                        <!-- Button to close the overlay navigation -->
                        <a href="javascript:void(0)" class="closebtn" onclick="closePartenze()">&times;</a>
                        <div id="overlayContent" class="overlay-content">
                            <a href="#">Offere Last minute</a>
                            <a href="#">Dicembre</a>
                            <a href="#">Ponte dell'Immacolata</a>
                            <a href="#">Capodanno</a>
                        </div>
                    </div>
                   
                </div>

                <div class="subnav-custom">
                    
                    <button id="destinazioni" class="nav-btn" onclick="openDestinazioni()"><a href="#">Destinazioni</a></button>
                    <div id="customDestinazioni" class="overlay">
                        <!-- Button to close the overlay navigation -->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeDestinazioni()">&times;</a>
                        <div id="overlayContent" class="overlay-content">
                            <a href="#">Isole Faroer</a>
                            <a href="#">Dolomiti</a>
                            <a href="#">Costa Rica</a>
                        </div>
                    </div>
                </div>

                <div class="subnav-custom"> 
                    
                    <button id="fasce-eta" class="nav-btn" onclick="openFasceEta()"><a href="#">Fasce età</a></button>
                    <div id="customFasceEta" class="overlay">
                        <!-- Button to close the overlay navigation -->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeFasceEta()">&times;</a>
                        <div id="overlayContent" class="overlay-content">
                            <a href="#">25-35</a>
                            <a href="#">35-55</a>
                            <a href="#">55+</a>
                        </div>
                    </div>
                    
                </div>

               <div class="subnav-custom">
                    
                    <button id="trip-types" class="nav-btn" onclick="openTypes()"><a href="#">Trip types</a></button>
                    <div id="customTypes" class="overlay">
                        <!-- Button to close the overlay navigation -->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeTypes()">&times;</a>
                        <div id="overlayContent" class="overlay-content">
                            <a href="#">Trekking</a>
                            <a href="#">Skytour</a>
                            <a href="#">Mercatini di Natale</a>
                            <a href="#">Città d'Arte</a>
                        </div>
                    </div>
                   
               </div>

                <div class="subnav-custom">
                    
                    <button id="info" class="nav-btn" onclick="openInfo()"><a href="#">Info</a></button>
                    <div id="customInfo" class="overlay">
                        <!-- Button to close the overlay navigation -->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeInfo()">&times;</a>
                        <div id="overlayContent" class="overlay-content">
                            <a href="#">Policy</a>
                            <a href="#">FAQ</a>
                        </div>
                    </div>
                    
                </div class="subnav-custom">

                <button id="user-btn" class="user-btn"><a href="#"><i class="fa-solid fa-user"></i></a></button>
                <button id="chat-btn" class="user-btn"><a href="https://wa.me/+393284156599/?text=Ciao%20Epic%20Road!"><i class="fa-solid fa-comments"></i></a></button>
            
            </div>
    
            <div class="menu-condensed">
                <button id="user-btn" class="user-btn"><a href="#"><i class="fa-solid fa-user"></i></a></button>

                <button id="burgerMenu" class="nav-btn" onclick="openNav()"><i class="fa-solid fa-bars icon-menu"></i></button>
                    <div id="customBurger" class="overlay">
                        <!-- Button to close the overlay navigation -->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div id="overlayContent" class="overlay-content">
                            <a href="#">Partenze</a>
                            <a href="#">Destinazioni</a>
                            <a href="#">Fasce di età</a>
                            <a href="#">Trip Types</a>
                            <a href="#">Info</a>
                        </div>
                    </div>

            </div>
          
        </nav>



<?php
get_footer();