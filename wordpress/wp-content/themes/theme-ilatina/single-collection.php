<?php get_header(posts); ?>

<section id="primero" class="bgblanco d-flex align-items-center">
            <div class="container">
                <div class="col-md-10 mb-3">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <?php if ( get_field( 'img_collection') ) { ?>
                            <img class="img-fluid mx-auto" src="<?php the_field( 'img_collection' ); ?>" />
                        <?php } ?>
                    </div>
                    <div class="col-12 col-md-10 col-lg-6 align-self-center mt-3">
                        <p class="text-justify textofondoblanco">
                            <?php the_field( 'txt_collection' ); ?>
                        </p>
                    </div>
            
                </div>
            </div>
</section>
<section id="segundo" class="d-flex align-items-center bgnegro">
	 <div class="container my-5">
		 <div class="col-md-10">
                <h2>Livres</h2>
        </div>
          <div class="row justify-content-center">          
			<!--loop por categoria -->
				<?php $libros_ids = get_field( 'libros' ); ?>
                    <?php // var_dump( $libros_ids ); ?>
					<?php
					$args = array(
					'post_type' => 'libros',
					'cat' => $libros_ids ,
					);
					query_posts($args); ?>
					<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
					<!-- Stuff happening inside the loop -->

                       <div class="librohome col-12 col-md-4 mb-3 textonegro">
                         <a href="<?php the_permalink(); ?>">
                          <div class="card h-100 bgblanco">
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
                    <?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
						<!--Fin loop por categoria -->
           
          </div>
      </div>
	 </section>
<section id="tercero" class="d-flex align-items-center bgblanco">
	 <div class="container my-5">
		 <div class="col-md-10">
                <h2>Auteurs</h2>
        </div>
          <div class="row justify-content-center">          
			<!--loop por categoria -->
				<?php $libros_ids = get_field( 'libros' ); ?>
                    <?php // var_dump( $libros_ids ); ?>
					<?php
					$args = array(
					'post_type' => 'auteur',
					'cat' => $libros_ids ,
					);
					query_posts($args); ?>
					<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
					<!-- Stuff happening inside the loop -->

                       <div class="col-12 col-md-3 mb-3 textonegro">
                         
                        <div class="autores autores-coleccion h-100">
                            <a href="<?php the_permalink(); ?>">
                              <?php if ( get_field( 'foto_de_autor') ) { ?>
                                <img src="<?php the_field( 'foto_de_autor' ); ?>" alt="Auteur" class="rounded-circle img-fluid" alt="imagen" />
                            <?php } ?>
                            <span>
                                <h4 class="text-center">
                             <?php the_title(); ?>
                                </h4>
                            </span>      
                            </a>
                          </div>


                        </div>
                    <?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
			<!--Fin loop por categoria -->
           
          </div>
      </div>
	 </section>
</div><!-- fin main -->
</div><!-- Fin wrapper -->	 
  

<?php get_footer();?>