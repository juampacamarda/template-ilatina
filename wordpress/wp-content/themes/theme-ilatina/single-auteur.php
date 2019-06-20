<?php get_header(posts); ?>

<section id="primero" class="bgblanco d-flex align-items-center">
            <div class="container my-5">
                <div class="col-md-10 mb-3">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-4">
                        <?php if ( get_field( 'foto_de_autor') ) { ?>
							<img class="img-fluid rounded-circle" src="<?php the_field( 'foto_de_autor' ); ?>" />
                        <?php } ?>
                        <p class="details text-center ml-auto textofondoblanco">
                          <?php the_field( 'foto_credits' ); ?>
                       </p>
                    </div>
                    <div class="col-12 col-md-10 col-lg-6 align-self-center">
                        <p class="text-justify textofondoblanco">
							<?php the_field( 'bio_de_autor' ); ?>
                        </p>
                    </div>
            
                </div>
            </div>
	 </section>
	 <section id="segundo" class="d-flex align-items-center bgnegro">
	 <div class="container my-5">
		 <div class="col-md-10">
                <h2>Livres d'auteur</h2>
        </div>
          <div class="row justify-content-center">          
			<!--loop por categoria -->
				<?php $libros_del_autor_ids = get_field( 'libros_del_autor' ); ?>
					<?php // var_dump( $libros_del_autor_ids ); ?>
					<?php
					$args = array(
					'post_type' => 'libros',
					'cat' => $libros_del_autor_ids ,
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
</div><!-- fin main -->
</div><!-- Fin wrapper -->	 
  

<?php get_footer();?>