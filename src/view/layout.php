<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Silke Derudder">
  <meta name="description" content="Portfolio of Silke Derudder, a creative developer with an eye for design.">
  <meta name="keywords" content="Silke Derudder, digital developer, digital designer, Belgium, digital creative, development, design, devine">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
  <title>Silke Derudder</title>
  <?php echo $css ?>
  <script>
    WebFontConfig = {
      custom: {
        families: ['GT_Walsheim_Pro'],
        urls: ['assets/fonts/GT-Walsheim-Pro/GT-Walsheim-Pro.css']
      }
    };

    (function (d) {
      var wf = d.createElement('script'),
        s = d.scripts[0];
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.async = true;
      s.parentNode.insertBefore(wf, s);
    })(document);
 </script>
</head>
  <body>
  <header>
        <h1 class="title hide">Silke Derudder</h1>
        <nav class="navigation">
          <ul>
            <li class="nav-title">
              <a href="<?php echo $siteUrlRoot;?>" class="nav-link-title">Silke <span class="lastname">Derudder</span> </a>
            </li>
          </ul>
          <ul class="nav-items">
            <li class="nav-item">
              <a href="<?php echo $siteUrlRoot;?>" class="nav-link <?php if($currentPage == 'overview') echo ' nav-active';?>">Projects</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo $siteUrlRoot;?>about" class="nav-link <?php if($currentPage == 'about') echo ' nav-active';?>">About</a>
            </li>
          </ul>
        </nav>
      </header>
      <main>
        <?php
          echo $content;
        ?>
      </main>
    <?php echo $js; ?>
  </body>
</html>
