<?php get_header();?> 

<section id="tercero" class="d-flex  bgblanco">
      <div class="container my-5">
        <h2 class="textofondoblanco">Nos livres</h2>
          <div class="row justify-content-center">
            <!--empieza el loop que trae los libros-->
            <?php /* Start the Loop.*/ while ( have_posts() ) : the_post();?>
              <!--LOOP LIVRES-->
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
            <?php endwhile;?>

          </div>
          <?php wpbeginner_numeric_posts_nav(); ?>
      </div>
    </section>
  </div><!-- fin main -->
</div><!-- Fin wrapper -->
   <?php get_footer();?> 