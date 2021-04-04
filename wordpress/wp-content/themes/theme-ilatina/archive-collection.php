<?php get_header();?> 

<section class="archivo d-flex  bgblanco">
      <div class="container my-5">
        <h2 class="textofondoblanco">Collections</h2>
          <div  class="row justify-content-center my-5">
                    <?php /* Start the Loop.*/ while ( have_posts() ) : the_post();?>
                       <div class="col-12">
                          <div class="row row-eq-height mb-3 pb-3">
                              <div class="col-md-5">
                                    <div class="colection-img">
                                            <?php if ( get_field( 'img_collection') ) { ?>
                                            <img class="img-fluid rounded mx-auto" src="<?php the_field( 'img_collection' ); ?>" />
                                            <?php } ?>
                                    </div>
                              </div>
                              <div class="col-md-7 d-flex align-items-start flex-column">
                                    <div class="colection-header">
                                            <h3 class="text-center"><?php the_title(); ?></h3>
                                    </div><!--fin colheader-->
                                    <div class="colection-txt">
                                        <p><?php the_field( 'txt_collection' ); ?></p>
                                    </div>
                                    <div class="colecction-link mt-auto w-100">
                                        <a href="<?php the_permalink(); ?>" role="button" class="w-100 active btn btn-dark ml-auto">Lire Plus</a>
                                    </div>
                              </div>
                          </div>
                        </div>
                    <?php endwhile;?>

                      <!-- escondo para probar<div class="col-12 col-sm-6 col-md-5 mb-3">
                      </div> -->
           
          </div>
          <?php wpbeginner_numeric_posts_nav(); ?>
      </div>
    </section>
</div><!-- fin main -->
</div><!-- Fin wrapper -->
   <?php get_footer();?> 