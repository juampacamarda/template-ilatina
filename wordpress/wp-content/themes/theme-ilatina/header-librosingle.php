<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head();?>

    <title><?php the_title(); ?> - ilantina </title>
</head>

<body>
    <div class="bgblanco home">
        <nav class="navbar  navbar-expand-lg navbar-light">
            <?php
                            // Display the Custom Logo
                            the_custom_logo();

                            // No Custom Logo, just display the site's name
                            if (!has_custom_logo()) {
                                ?>
                                <h1><?php bloginfo('name'); ?></h1>
                        <?php
                            }
                       ?>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

           <!--menu dinamico-->
                <?php wp_nav_menu(array(
                 'theme_location' => 'superior',
                 'container' =>'div',
                 'container_class' => 'collapse textofondoblanco navbar-collapse',
                 'container_id' => 'navbarSupportedContent',
                 'items_wrap' => '<ul class="navbar-nav ml-auto typo">%3$s</ul>',
                 'menu_class' => 'nav-item'
                ) ); ?>
                <!--menu dinamico-->
        </nav>
        <div class="d-flex align-items-center">
            <div class="container my-5">
                <h2 class="col-md-10"><?php the_title(); ?></h2>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-4">
                        <?php $protada_libro = get_field( 'protada_libro' ); ?>
                        <?php if ( $protada_libro ) { ?>
                            <img class="img-fluid" src="<?php echo $protada_libro['url']; ?>" alt="<?php echo $protada_libro['alt']; ?>" />
                        <?php } ?>

                       <p class="details ml-auto textofondoblanco">
                           <?php the_field( 'ficha_tecnica' ); ?>
                       </p>
                    </div>
                    <div class="col-12 col-md-10 col-lg-6">
                        
                        <p class="text-justify textofondoblanco">
                            <?php the_field( 'descripcion_corta' ); ?>
                        </p>
                    </div>
            
                </div>
            </div>
        </div>
        
    </div>
    <!--fin cabecera-->