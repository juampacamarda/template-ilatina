<?php get_header();?> 

<section id="tercero" class="d-flex  bgblanco">
      <div class="container my-5">
        <h2 class="textofondoblanco">Catálogo</h2>
          <div class="row justify-content-center">
                    <?php
                    $args = array( 'post_type' => 'auteur' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?>
                       <div class="col-6 col-md-4">
                          <div class="autores h-100">
                            <a href="<?php the_permalink(); ?>">
                              <?php if ( get_field( 'foto_de_autor') ) { ?>
                                <img src="<?php the_field( 'foto_de_autor' ); ?>" alt="Auteur" class="rounded-circle img-fluid" alt="imagen" />
                            <?php } ?>
                                  <h4 class="textofondoblanco mt-1 text-center"><?php the_title(); ?></h4>
                            </a>
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