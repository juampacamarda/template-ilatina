<?php get_header();?> 

<section id="tercero" class="d-flex  bgblanco">
      <div class="container my-5">
        <h2 class="textofondoblanco">Catálogo</h2>
          <div class="row justify-content-center">
                    <?php
                    $args = array( 'post_type' => 'libros' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?>
                       <div class="col-6 col-md-3">
                          <div class="card">
                          <?php if ( get_field( 'portada_libro') ) { ?>
                            <img src="<?php the_field( 'portada_libro' ); ?>" alt="Livre" class="card-img-top img-fluid" alt="imagen" />
                          <?php } ?>
                              <div class="card-body">
                               <a href="<?php the_permalink(); ?>">
                               <h4 class="card-title text-center"><?php the_title(); ?></h4>
                               </a>
                               <p class="card-text text-center"><?php the_field( 'autor_de_libro' ); ?></p>
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
   <?php get_footer();?> 