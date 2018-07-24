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
  <header>
        <h1 class="title">Silke Derudder</h1>
        <nav class="navigation">
          <ul>
            <li class="nav-title">
              <a href="<?php echo 'index.php?page=home' ?>" class="nav-link <?php if($currentPage == 'home') echo ' nav-active';?>">Silke</a>
            </li>
          </ul>
          <ul class="nav-items">
            <li class="nav-item">
              <a href="<?php echo 'index.php?page=overview' ?>" class="nav-link <?php if($currentPage == 'overview') echo ' nav-active';?>">Projects</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo 'index.php?page=about' ?>" class="nav-link <?php if($currentPage == 'about') echo ' nav-active';?>">About</a>
            </li>
          </ul>
        </nav>
      </header>
      <main>
        <?php
          if(!empty($_SESSION['error'])) {
            echo '<div class="error">' . $_SESSION['error'] . '</div>';
          }
          if(!empty($_SESSION['info'])) {
            echo '<div class="info">' . $_SESSION['info'] . '</div>';
          }
          echo $content;
        ?>
      </main>
    <?php echo $js; ?>
  </body>
</html>
