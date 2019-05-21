<?php
/*
Template Name: inicio-plantilla
*/
?>
<?php get_header('home');?> 
    <!--inicio primer bloque--> 
    <div id="primero" class="d-flex  bgblanco" >
      <div class="container d-flex align-items-center my-5">
        <div class="row justify-content-center">
          <div class="foto col-12 col-md-4">
            <?php if ( get_field( 'imagen_primer_bloque') ) { ?>
	        <img class="mx-auto d-block rescalaimg img-fluid" src="<?php the_field( 'imagen_primer_bloque' ); ?>"/>
            <?php } ?>
          </div>
          <div class="col-12 col-md-6 align-self-center cajadetexto">
            <h2 class="text-center textofondoblanco"><?php the_field( 'titulo_bloque_1' ); ?></h2>
            <p class="text-justify textofondoblanco"><?php the_field( 'texto_primero' ); ?></p>
            <div class="d-flex">
              <button type="button" class="btn btn-primary ml-auto my-3">Leer Más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--fin primer bloque-->
    <!--segundo bloque-->
    <section id="segundo" class="d-flex align-items-center bgnegro">
      <div  class="container my-5">
        <div class="row justify-content-center">
          <div class=" col-12 col-md-10 mb-3">
            <h2><?php the_field( 'titulo_bloque_2' ); ?></h2>
            <p class="text-justify"><?php the_field( 'texto_SEGUNDO' ); ?></p>
                 <?php if ( get_field( 'imagen_segundo_bloque') ) { ?>
	            <img class="img-fluid" src="<?php the_field( 'imagen_segundo_bloque' ); ?>" />
                <?php } ?>

                 <div class="d-flex">
                  <button type="button" class="btn btn-primary ml-auto my-3">Leer Más</button>
                </div>
          </div>
        </div>
      </div>
    </section>

    <!--fin segudno bloque-->
    <!--empieza tercer bloque-->
    <section id="tercero" class="d-flex align-items-center bgblanco">
      <div class="container my-5">
          
          <div class="row justify-content-center">
          <div class="col-md-10">
            <h2>Nos Livres</h2>
          </div>
                    <?php
                    $args = array( 'post_type' => 'libros', 'posts_per_page' => 4 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?>
                       <div class="col-12 col-md-3 mb-3">
                          <div class="card  h-100">
                         <?php if ( get_field( 'portada_libro') ) { ?>
                            <img src="<?php the_field( 'portada_libro' ); ?>" alt="Livre" class="card-img-top img-fluid" alt="imagen" />
                          <?php } ?>
                              <div class="card-body">
                               <a href="<?php the_permalink(); ?>">
                               <h5 class="text-center"><?php the_title(); ?></h5>
                               </a>
                               <p class="text-center"><?php the_field( 'autor_de_libro' ); ?></p>
                              </div>
                          </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();?>
                      <!-- escondo para probar<div class="col-12 col-sm-6 col-md-5 mb-3">
                      </div> -->
           
          </div>
      </div>
    </section>

    <!--fin tercero-->
        <!--cuarto-->
    <section id="cuarto" class="d-flex align-items-center bgnegroform">
      <div class="container my-3">
        <div class="row justify-content-center">
          <div class="col-md-6"></div>
        <div class="col-md-4 justify-content-md-end ">
          <div class="card p-2">
              <div class="card-block contacto">
                <h2 class="mb-5">probando uno DOS</h2>
                <?php the_field( 'contacto' ); ?>
                <!--
                  <//?php echo do_shortcode('[contact-form-7 id="50" title="contacto"]'); ?> 
              -->
              </div>
          </div>
        </div>
        </div>  
      </div>
    </section>
        <!--fin cuarto-->
<?php get_footer();?> 