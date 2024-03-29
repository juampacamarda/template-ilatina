<?php get_header();?> 

<section class="archivo d-flex  bgblanco">
      <div class="container my-5">
        <h2 class="textofondoblanco">Nos Auteurs</h2>
          <div class="row justify-content-center">
           
              <?php /* Start the Loop.*/ while ( have_posts() ) : the_post();?>
                <div class="col-7 col-md-4">
                  <div class="autores h-100 my-2">
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( get_field( 'foto_de_autor') ) { ?>
                        <img src="<?php the_field( 'foto_de_autor' ); ?>" alt="Auteur" class="rounded-circle img-fluid" alt="imagen" />
                    <?php } ?>
                    <span><h4 class="text-center"><?php the_title(); ?></h4></span>
                    </a>
                  </div>
                </div>
              <?php endwhile;?>

           
          </div>
          <?php wpbeginner_numeric_posts_nav(); ?>
      </div>
    </section>
  </div><!-- fin main -->
</div><!-- Fin wrapper -->
   <?php get_footer();?> 