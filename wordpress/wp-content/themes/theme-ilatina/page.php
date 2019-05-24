<?php get_header();?> 
<section id="post" class="bgblanco d-flex align-items-center">
            <div class="container">
                <div class="row my-3 row-eq-height justify-content-center">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                        
                        <div class="col-12 col-md-10 text-justify textofondoblanco">
                         <?php
                         if ( has_post_thumbnail() ) {
                                the_post_thumbnail('post-thumbnails', array('class' =>'img-fluid mb-3 rounded'));
                            } 
                         ?>
                          <h2 class="textofondoblanco"><?php the_title(); ?></h2> 
       
                          <?php the_content(); ?>
                       
                        </div>


                <?php endwhile; endif; ?>
                </div>
            </div>
</section>


<?php get_footer();?> 