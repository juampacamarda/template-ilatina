<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
   
    <?php wp_head();?>
    <link rel="stylesheet" href="print-style.css" type="text/css" media="print" />
    <title> ilatina </title>
    <?php wp_head(); ?>
    
  </head>
  <body>
  <div id="wrapper" class="bgblanco">
  <div id="main">
    <header class="cabecera home">
      <nav class="navbar navbar-expand-lg navbar-light">
                        <?php
                            // Display the Custom Logo
                            the_custom_logo();

                            // No Custom Logo, just display the site's name
                            if (!has_custom_logo()) {
                                ?>
                                <h1><?php bloginfo('name'); ?></h1>
                        <?php
                            }?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <!--menu dinamico-->
                <?php wp_nav_menu(array(
                 'theme_location' => 'superior',
                 'container' =>'div',
                 'container_class' => 'collapse navbar-collapse',
                 'container_id' => 'navbarSupportedContent',
                 'items_wrap' => '<ul class="navbar-nav ml-auto textofondoblanco typo">%3$s</ul>',
                 'menu_class' => 'nav-item'
                ) ); ?>
                <!--menu dinamico-->
      </nav>
   </header>
    <!--fin cabecera-->