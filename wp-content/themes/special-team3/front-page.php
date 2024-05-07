<?php
/*
 * Template Name: Front Page Custom Template
 * Template Post Type: page
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/home.css">
  <?php wp_head(); ?>

  <?php
  // Recupera il valore del timer del countdown dal campo personalizzato 'timer' utilizzando ACF
  $countdown_timer = get_field('timer');

  // Converti la data nel formato Unix timestamp
  $countdown_date_unix = strtotime($countdown_timer);

  // Se è stato fornito un valore per il timer del countdown, calcola il tempo rimanente
  if (!empty($countdown_date_unix)) :
    $current_date_unix = time();
    $time_remaining = $countdown_date_unix - $current_date_unix;
    $formatted_countdown = '';

    // Se il countdown è già terminato
    if ($time_remaining <= 0) {
      $formatted_countdown = "Tempo scaduto";
    } else {
      // Calcola giorni, ore, minuti e secondi rimanenti
      $days = floor($time_remaining / (60 * 60 * 24));
      $hours = floor(($time_remaining % (60 * 60 * 24)) / (60 * 60));
      $minutes = floor(($time_remaining % (60 * 60)) / 60);
      $seconds = $time_remaining % 60;

      // Formatta il countdown
      $formatted_countdown = sprintf("%d giorni %d ore %d minuti %d secondi", $days, $hours, $minutes, $seconds);
    }
  ?>

    <script type="text/javascript">
      // Funzione per aggiornare dinamicamente il countdown
      function updateCountdown() {
        // Recupera l'elemento del countdown
        var countdownElement = document.getElementById("countdown-timer");

        // Se l'elemento non è presente, interrompi l'aggiornamento
        if (!countdownElement) return;

        // Recupera il valore del countdown
        var countdownValue = countdownElement.innerText;

        // Se il countdown è già terminato, non fare nulla
        if (countdownValue === "Tempo scaduto") return;

        // Parsing del countdown
        var countdownParts = countdownValue.split(" ");
        var days = parseInt(countdownParts[0]);
        var hours = parseInt(countdownParts[2]);
        var minutes = parseInt(countdownParts[4]);
        var seconds = parseInt(countdownParts[6]);

        // Calcola il tempo rimanente
        var timeRemaining = (days * 24 * 60 * 60 + hours * 60 * 60 + minutes * 60 + seconds - 1) * 1000;

        // Se il countdown è arrivato a zero, aggiorna il contenuto del countdown
        if (timeRemaining <= 0) {
          countdownElement.innerHTML = "Tempo scaduto";
        } else {
          // Calcola giorni, ore, minuti e secondi rimanenti
          days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
          hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
          seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

          // Formatta il countdown
          var formattedCountdown = days + " DAYS " + hours + " HOURS " + minutes + " MIN " + seconds + " SEC";

          // Aggiorna il contenuto del countdown
          countdownElement.innerHTML = formattedCountdown;

          // Aggiorna ogni secondo
          setTimeout(updateCountdown, 1000);
        }
      }

      // Avvia la funzione di aggiornamento del countdown quando la pagina si carica
      document.addEventListener('DOMContentLoaded', function() {
        updateCountdown();
      });
    </script>
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>

  <!-- Inizio del contenuto della pagina -->
  <div class="container-fluid overflow-hidden p-0 position-relative">
    <!-- Logo -->
    <?php
    // Recupera l'URL del logo dal campo personalizzato 'logo' utilizzando ACF
    $logo_url = get_field('logo');

    // Verifica se è stato fornito un URL del logo
    if (!empty($logo_url)) {
      echo '<img src="' . esc_url($logo_url) . '" alt="Logo" class="position-absolute top-0 start-0 m-3" style="max-height: 50px;" id="site-logo">';
    }
    ?>

    <!-- Custom block for video -->
    <?php
    // Recupera l'URL del video dal campo personalizzato 'video_url' utilizzando ACF
    $video_url = get_field('video_url');

    // Verifica se è stato fornito un URL del video
    if (!empty($video_url)) {
      echo '<video autoplay loop muted class="position-absolute vw-100 vh-100">';
      echo '<source src="' . esc_url($video_url) . '" type="video/mp4">';
      echo 'Your browser does not support the video tag.';
      echo '</video>';
    }
    ?>

    <!-- Custom block for countdown -->
    <?php if (!empty($countdown_timer)) : ?>
      <div id="countdown-timer" class="position-absolute top-50 start-50 translate-middle text-white"><?php echo esc_html($formatted_countdown); ?></div>
    <?php endif; ?>

    <!-- Button per visitare la città -->
    <?php
    // Recupera il nome della città dal campo personalizzato 'nome_citta' utilizzando ACF
    $city_name = get_field('city_name');

    // Output del bottone
    if (!empty($city_name)) {
      echo '<a href="http://localhost/wordpress-esplora/home/"   class="btn btn-primary mb-3 tranlate-middle-x fs-1" id="button"> Visit ' . $city_name . '</a>';
    }
    ?>
  </div>
  <!-- Fine del contenuto della pagina -->

  <?php wp_footer(); ?>
</body>


</html>