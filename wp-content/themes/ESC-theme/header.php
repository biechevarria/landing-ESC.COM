<?php
    //Fichero que muestra la cabecera del tema
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">

    <title>English Soccer Camp</title>

    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <!--Navbar-->
  
        <nav class="navbar navbar-expand-lg navbar-dark primary-color">

          <!-- Navbar brand -->
          <a class="navbar-brand" href="/index.html">
            <img src="<?php bloginfo('template_url'); ?> /img/logo-v2.png" alt="logo ESC-Landing">
          </a>

          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="basicExampleNav">

              <!-- Links -->
              <ul class="navbar-nav ml-auto menu">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Home
                          <span class="sr-only">(current)</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                  </li>

              </ul>
              <!-- Links -->
          </div>
          <!-- Collapsible content -->

        </nav>
 
<!--/.Navbar-->

    </header>

      <div id="main">