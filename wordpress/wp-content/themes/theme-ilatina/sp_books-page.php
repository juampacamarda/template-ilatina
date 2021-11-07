<?php
/*
Template Name: special-book-plantilla
*/
?>
<?php get_header(posts); ?>
	<section class="bgblanco d-flex align-items-center">
			<div class="container my-5">
				<div class="col-md-12 livres-title">
					<div class="livres-title-data">

						<h2>
							<?php the_title(); ?>
						</h2>
						<h4>
							<?php the_field( 'autor_de_libro' ); ?>
						</h4>

					</div>

					<div class="livres-compra">
						<?php if (get_field('texto_de_compra1')) : ?>
							<div class="compra-buttons">
								<p class="textofondoblanco shoptitle"><strong>Acheter</strong></p>
								<a href="<?php the_field( 'boton_de_compra1' ); ?>" role="button" class="active btn btn-danger ml-auto"><?php the_field( 'texto_de_compra1' ); ?></a>
								<?php if (get_field('texto_de_compra2')) : ?>
								<a href="<?php the_field( 'boton_de_compra2' ); ?>" role="button" class="active btn btn-warning ml-auto"><?php the_field( 'texto_de_compra2' ); ?></a>
								<?php endif?> 
								<?php if (get_field('texto_de_compra3')) : ?>
								<a href="<?php the_field( 'boton_de_compra3' ); ?>" role="button" class="active btn btn-primary ml-auto"><?php the_field( 'texto_de_compra3' ); ?></a>
								<?php endif?> 
							</div>
						<?php endif?>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-4">
						<?php if ( get_field( 'portada_libro') ) { ?>
							<a class="click-portada" data-toggle="modal" data-target="#portadamodal">
								<img src="<?php the_field( 'portada_libro' ); ?>" alt="Livre" class="card-img-top img-fluid" alt="imagen" />
							</a>
						<?php } ?>
					   <p class="details shoptitle ml-auto textofondoblanco">
						   <?php the_field( 'ficha_tecnica' ); ?>
					   </p>
						<div class="modal fade" id="portadamodal" tabindex="-1" role="dialog" aria-labelledby="portadamodalTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="portadamodalTitle"><?php the_title(); ?> - <?php the_field( 'autor_de_libro' ); ?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<?php if ( get_field( 'portada_libro') ) { ?>
											<img src="<?php the_field( 'portada_libro' ); ?>" alt="Livre" class="card-img-top img-fluid" alt="imagen" />
										<?php } ?>
										<p class="text-justify textofondoblanco">
											<?php the_field( 'descripcion_corta' ); ?>
										</p>
										<?php if (get_field('texto_de_compra1')) : ?>
											<div class="w-100">
												<p class="textofondoblanco shoptitle"><strong>Acheter</strong></p>
												<a href="<?php the_field( 'boton_de_compra1' ); ?>" role="button" class="active btn btn-danger ml-auto"><?php the_field( 'texto_de_compra1' ); ?></a>
												<?php if (get_field('texto_de_compra2')) : ?>
												<a href="<?php the_field( 'boton_de_compra2' ); ?>" role="button" class="active btn btn-warning ml-auto"><?php the_field( 'texto_de_compra2' ); ?></a>
												<?php endif?> 
												<?php if (get_field('texto_de_compra3')) : ?>
												<a href="<?php the_field( 'boton_de_compra3' ); ?>" role="button" class="active btn btn-primary ml-auto"><?php the_field( 'texto_de_compra3' ); ?></a>
												<?php endif?> 
											</div>
										<?php endif?>
									</div>
								</div>
							</div>
						</div>
					   
					</div>
					<div class="col-12 col-md-10 col-lg-6">
						<p class="text-justify textofondoblanco">
							<?php the_field( 'descripcion_corta' ); ?>
						</p>
					</div>
			
				</div>
			</div>
	</section>
	<!-- seccion prensa -->

	<!--inicio primer bloque-->
 <?php if (get_field('titulo_preview')) : ?>
	
	<section id="seccion-a" class=" bgblanco d-flex align-items-center">

		<div class="container  my-5">
			<h2 class="col-md-10"><?php the_field( 'titulo_preview' ); ?></h2>

			<div class="justify-content-center">

				<?php the_field( 'preview' ); ?>

			</div>
		</div>

	</section>
	
 <?php endif?>   
	<!--fin primer bloque-->
	<!--segundo bloque-->
	<?php/* if ( get_field( 'foto_de_autor') ) { ?>
    <section id="seccion-b" class=" bgnegro d-flex align-items-center">
      <div class="container my-5">
        <h2 class="col-md-10">Auteurs</h2>
        <div class="row justify-content-center mb-3">
          <div class="col-md-3 col-12">
            
              <img src="<?php the_field( 'foto_de_autor' ); ?>" alt="Auteur" class="img-fluid rounded-circle" />
            
          </div>
          <div class="col-md-7 col-12 align-self-center">
            <h3 class=""><?php the_field( 'nombre_de_autor' ); ?></h3>
            <p class="text-justify"><?php the_field( 'bio_del_autor' ); ?>
            </p>
          </div>
        </div>
          <?php if (get_field('nombre_de_autor_2')) : ?>
        <div class="row justify-content-center">
          <div class="col-md-3 col-12">
            <?php if ( get_field( 'foto_de_autor_2') ) { ?>
              <img src="<?php the_field( 'foto_de_autor_2' ); ?>" alt="Auteur" class="rounded-circle img-fluid" />
            <?php } ?>
          </div>
          <div class="col-md-7 col-12 align-self-center">
            <h3 class=""><?php the_field( 'nombre_de_autor_2' ); ?></h3>
            <p class=" text-justify">
              <?php the_field( 'bio_del_autor_2' ); ?>
            </p>
          </div>
        </div>
        <?php endif ?>
      </div>
    </section>
	<?php }*/ ?>
	<!--fin segundo bloque-->
	<!--empieza tercer bloque-->
	<?php if (get_field('titulo_de_video')) : ?>
    <section id="seccion-c" class="bgnegro d-flex align-items-center">
      <div class="container my-5">                 
              <h2><?php the_field( 'titulo_de_video' ); ?></h2>
              <?php the_field( 'codigo_del_video' ); ?>
              <p class="text-justify">
              <?php the_field( 'video_descripcion' ); ?>
              </p>                
        
      </div>
    </section>
	<?php endif?>
	<!--fin tercero-->

	<!--fin cuarto-->
</div><!-- fin main -->
</div><!-- Fin wrapper --> 
<?php get_footer();?> 