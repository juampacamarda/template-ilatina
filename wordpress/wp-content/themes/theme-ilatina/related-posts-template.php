<h3><?php the_title(); ?></h3>

                  <?php if ( get_field( 'img_collection') ) { ?>
                    <img class="img-fluid mx-auto" src="<?php the_field( 'img_collection' ); ?>" />
                  <?php } ?>
                    <p class="text-justify"><?php the_field( 'txt_collection' ); ?></p>
                <div class="align-self-end">
                    <button type="button" class="btn btn-primary ml-auto">Leer Más</button>
                </div>