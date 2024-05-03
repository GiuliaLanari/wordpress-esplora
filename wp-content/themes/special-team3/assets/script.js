let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

/*partenze*/
/* Open */
function openPartenze() {
  document.getElementById("customPartenze").style.height = "100%";
}
/* Close */
function closePartenze() {
  document.getElementById("customPartenze").style.height = "0%";
}

/*destinazioni*/
function openDestinazioni() {
  document.getElementById("customDestinazioni").style.height = "100%";
}

function closeDestinazioni() {
  document.getElementById("customDestinazioni").style.height = "0%";
}

/*fasce di età*/
function openFasceEta() {
  document.getElementById("customFasceEta").style.height = "100%";
}

function closeFasceEta() {
  document.getElementById("customFasceEta").style.height = "0%";
}

/*trip types*/
function openTypes() {
  document.getElementById("customTypes").style.height = "100%";
}

function closeTypes() {
  document.getElementById("customTypes").style.height = "0%";
}

/*info*/
function openInfo() {
  document.getElementById("customInfo").style.height = "100%";
}

function closeInfo() {
  document.getElementById("customInfo").style.height = "0%";
}

/*hamburger menu*/
function openNav() {
  document.getElementById("customBurger").style.height = "400px";
}

function closeNav() {
  document.getElementById("customBurger").style.height = "0%";
}
