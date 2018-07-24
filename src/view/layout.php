<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Silke Derudder">
  <meta name="description" content="Portfolio of Silke Derudder, a digital designer witha an eye for design.">
  <meta name="keywords" content="Silke Derudder, digital developer, digital designer, Belgium, digital creative, development, design, devine">
  <title>Silke Derudder &#45; <?php echo $title; ?></title>
  <?php echo $css ?>
</head>
  <body>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info">' . $_SESSION['info'] . '</div>';
        }
        echo $content;
      ?>
    <?php echo $js; ?>
  </body>
</html>
