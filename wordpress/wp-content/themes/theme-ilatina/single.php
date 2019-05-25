<?php get_header(posts); ?>

<section id="post" class="bgblanco d-flex align-items-start">
            <div class="container">
                <div class="row my-3 row-eq-height justify-content-between">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    
                        <div class="col-12 col-md-8  text-justify textofondoblanco">
                         <h2 class="textofondoblanco"><?php the_title(); ?></h2> 
                         <?php
                         if ( has_post_thumbnail() ) {
                                the_post_thumbnail('post-thumbnails', array('class' =>'img-fluid mb-3 rounded'));
                            } 
                         ?>       
                        <?php the_content(); ?>
                        </div>
                            <?php endwhile; endif; ?>
                            <div class="barra bgnegro rounded ml-3 col-md-2 justify-content-center d-flex flex-column">
                                    <div class="py-2">
                                        <h4>Novedades</h4>
                                    </div>
                                    <?php
                                    $entradas = new WP_Query( 'posts_per_page=5' ); 
                                    // The Loop
                                    while ( $entradas->have_posts() ) : 
                                    $entradas->the_post(); ?>
                                   <div class="text-center">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <hr />
                                    </div>
                                    <?php
                                    endwhile;
                                    // Resetear Post Data 
                                    wp_reset_postdata();
                                    ?>
                                    <div class="mt-auto ml-auto">
                                        <a href=""> Leer Más </a>
                                    </div>

                            </div>
                    </div>
            </div>
</section>

<?php get_footer();?>