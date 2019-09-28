<?php
/*
Template Name: inicio-plantilla
*/
?>
<?php get_header('home');?> 
<!--empieza news-->
  <?php if (get_field('news')) : ?>
    <section id="news" class="d-flex bgnegro">
    <div class="container d-flex align-items-center my-5">
        <div class="row justify-content-center row-eq-height">
          <div class="col-md-10">
              <h2><?php the_field( 'news' ); ?></h2>
          </div>
        <?php
        $entradas = new WP_Query( 'posts_per_page=3' ); 
        // The Loop
        while ( $entradas->have_posts() ) : 
        $entradas->the_post(); ?>
        <div class="col-md-4">
          <a href="<?php the_permalink() ?>">
          <div class="card h-100 py-2 px-4 bgblanco">
            <div class="card-tittle pt-2 text-center">
              <h4>
                <?php the_title();?>
              </h4>
            </div>
            <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('post-thumbnails', array('class' =>'img-fluid card-img-top')); }
            ?>
            <div class="card-block">
              <div class="card-text text-justify">
                <?php the_excerpt();?>
              </div>

            </div>
            </a>
          </div>
           
        </div>
        <?php
        endwhile;
        // Resetear Post Data 
         wp_reset_postdata(); // The Loop termina ?>

        </div><!--finrownews-->  
      </div>  
    
    </section>
      <?php endif ?>
    <!--fin news-->
    <!--inicio primer bloque--> 
<section id="primero" class="d-flex" >
      <div class="container d-flex align-items-center my-5">
        <div class="row justify-content-center">
          <div class="foto col-12 col-md-5 align-self-center">
            <?php if ( get_field( 'imagen_primer_bloque') ) { ?>
	        <img class="mx-auto d-block rescalaimg img-fluid" src="<?php the_field( 'imagen_primer_bloque' ); ?>"/>
            <?php } ?>
          </div>
          <div class="col-12 col-md-5 align-self-center cajadetexto">
            <h2 class="text-center textofondoblanco"><?php the_field( 'titulo_bloque_1' ); ?></h2>
            <p class="text-justify textofondoblanco"><?php the_field( 'texto_primero' ); ?></p>
          </div>
        </div>
      </div>
    <!--fin primer bloque-->  
    </section>

    <!--segundo bloque-->
    <section id="segundo" class="d-flex align-items-center bgnegro">
      <div  class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
              <h2>Collections</h2>
            </div>
            <!--loop por categoria -->
                <?php
                $args = array(
                'post_type' => 'collection',
                'posts_per_page' => 2 
                );
                query_posts($args); ?>
                <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <!-- Stuff happening inside the loop -->
                <div class="collection-ini col-12 col-md-5 mb-3 d-flex align-items-start flex-column">
                  <div class="colection-header">
                    <h3 class="text-center"><?php the_title(); ?></h3>
                  </div><!--fin colheader-->
                  <div class="colection-img mb-3">
                    <?php if ( get_field( 'img_collection') ) { ?>
                    <img class="img-fluid rounded mx-auto" src="<?php the_field( 'img_collection' ); ?>" />
                    <?php } ?>
                  </div>
                  <div class="colection-txt">
                    <p><?php the_field( 'txt_collection' ); ?></p>
                  </div>
                  <div class="colecction-link mt-auto w-100">
                    <a href="<?php the_permalink(); ?>" role="button" class="w-100 active btn btn-light ml-auto">Lire Plus</a>
                  </div>
                </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            <!--Fin loop por categoria -->
        </div>
      </div>
    </section>

    <!--fin segudno bloque-->
    <!--empieza tercer bloque-->
    <section id="tercero" class="d-flex align-items-center">
      <div class="container my-5">
          <div class="row justify-content-center">
          <div class="col-md-10">
            <h2>Nos Livres</h2>
          </div>
          <!--empieza el loop que trae los libros-->
                    <?php
                    $args = array( 'post_type' => 'libros', 'posts_per_page' => 4 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?>
                       <div class="librohome col-12 col-md-3 mb-3">
                         <a href="<?php the_permalink(); ?>">
                          <div class="card  h-100">
                            <?php if ( get_field( 'portada_libro') ) { ?>
                                <img src="<?php the_field( 'portada_libro' ); ?>" alt="Livre" class="card-img-top img-fluid" alt="imagen" />
                              <?php } ?>
                              <div class="card-body">
                               <h5 class="text-center"><?php the_title(); ?></h5>
                               <p class="text-center"><?php the_field( 'autor_de_libro' ); ?></p>
                              </div>
                          </div>
                          </a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();?>
                      <!-- escondo para probar<div class="col-12 col-sm-6 col-md-5 mb-3">
                      </div> -->
          </div>
          <!-- boton para habilitar cdo tengas más de 4 libros
          <div class="row justify-content-center">
             <div>
                <a href="http://ilatina.fr/livres/" role="button" class="w-100 active btn btn-light ml-auto">Catalogue Complet</a>                      
              </div>
           </div> -->
      </div>
    </section>

    <!--fin tercero-->
        <!--cuarto-->
    <section id="cuarto" class="d-flex align-items-center pb-3 bgnegroform">
      <div class="container my-3">
        <div class="row justify-content-center">
          <div class="col-md-6"></div>
        <div class="col-md-4 justify-content-md-end ">
          <div class="card p-2">
              <div class="card-block contacto mb.3">
                <h2 class="mb-3">Contactez Nous</h2>
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
</div><!-- fin main -->
</div><!-- Fin wrapper -->
<?php get_footer();?> 