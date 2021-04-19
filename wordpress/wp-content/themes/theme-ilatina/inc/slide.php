<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
			<?php if ( get_field( 'imagen01') ) { ?>
				<div class="carousel-item active" style="background-image:url('<?php the_field( 'imagen01' ); ?>');height: 50vh;background-size: cover;">
				
						<!-- <img src="" alt="First slide" class="img-fluid d-block w-100" />-->
				
				</div>
			<?php } ?>
			<!--fin repeater-->
			<?php if( have_rows('slide_imagen') ):?>

						<?php while( have_rows('slide_imagen') ): the_row(); 
							// vars
							$image = get_sub_field('imagen_slider');
						?>

						<div class="carousel-item" style="background-image:url('<?php echo $image['url']; ?>');height: 50vh;background-size: cover;">
								<!-- <img src="<?php echo $image['url']; ?>" class="img-fluid d-block w-100" />-->
						</div>

						<?php endwhile;?>

						

			<?php endif; ?>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
	</a>
</div>