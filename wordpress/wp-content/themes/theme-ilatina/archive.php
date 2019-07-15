<?php
/*
Template Name: Archives
*/
get_header(); ?>
<section id="archives" class="d-flex  bgblanco">
    <div class="container d-flex align-items-center my-5">
        <div class="row justify-content-center row-eq-height">
          <div class="col-md-10">
              <h2>Nouveautés</h2>
          </div>
         <?php
            $entradas = new WP_Query( 'posts_per_page=5' ); 
             // The Loop
             while ( $entradas->have_posts() ) : 
              $entradas->the_post(); ?>
                <div class="col-10">
                          <div class="row row-eq-height mb-3 pb-3">
                              <div class="col-12 col-md-4">
                                    <div class="colection-img">
                                    <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('post-thumbnails', array('class' =>'img-fluid card-img-top')); }
                                    ?>  
                                    </div>
                              </div>
                              <div class="col-md-7 d-flex align-items-start flex-column">
                                    <div class="colection-header">
                                        <h3 class="text-center"><?php the_title(); ?></h3>
                                    </div><!--fin colheader-->
                                    <div class="colection-txt">
                                        <?php the_excerpt();?>
                                    </div>
                                    <div class="colecction-link mt-auto w-100">
                                        <a href="<?php the_permalink(); ?>" role="button" class="w-100 active btn btn-dark ml-auto">Leer Más</a>
                                    </div>
                              </div>
                          </div>
                       
                </div>
             

              <?php
                endwhile;
   // Resetear Post Data 
   wp_reset_postdata();  ?>

        </div><!--finrownews--> 

    </div>  
    </section>
</div><!-- fin main -->
</div><!-- Fin wrapper -->
<?php get_footer(); ?>
