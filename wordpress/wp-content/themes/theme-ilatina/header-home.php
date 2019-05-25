<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   
    <?php wp_head();?>
    <script>
    $('.carousel').carousel({
    interval: 5000
     })
    </script>

    <title><?php the_title(); ?> - ilatina </title>
  </head>
  <body>
    <section class="cabecera">
            <nav class="navbar navbar-expand-lg navbar-light bgblanco">
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
                 'container_class' => 'collapse navbar-collapse p-3',
                 'container_id' => 'navbarSupportedContent',
                 'items_wrap' => '<ul class="navbar-nav ml-auto textofondoblanco typo">%3$s</ul>',
                 'menu_class' => 'nav-item'
                ) ); ?>
                <!--menu dinamico-->
             </nav>
            <div class="home bghome">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <?php if ( get_field( 'imagen01') ) { ?>
                            <img src="<?php the_field( 'imagen01' ); ?>" alt="First slide" class="img-fluid d-block w-100" />
                        <?php } ?>
                        </div>
                        <div class="carousel-item">
                        <?php if ( get_field( 'imagen02') ) { ?>
                            <img src="<?php the_field( 'imagen02' ); ?>" alt="Second slide" class="img-fluid d-block w-100" />
                        <?php } ?>
                        </div>
                    </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div><!--carrousel-->
      


                </section>
    <!--fin cabecera-->