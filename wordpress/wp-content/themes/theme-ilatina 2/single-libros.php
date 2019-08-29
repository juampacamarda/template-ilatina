<?php get_header(posts); ?>
    <section class="bgblanco d-flex align-items-center">
            <div class="container my-5">
                <div class="col-md-10">
                    <h2><?php the_title(); ?></h2>
                    <h4><?php the_field( 'autor_de_libro' ); ?></h4>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-4">
                        <?php if ( get_field( 'portada_libro') ) { ?>
                            <img src="<?php the_field( 'portada_libro' ); ?>" alt="Livre" class="card-img-top img-fluid" alt="imagen" />
                        <?php } ?>
                       <p class="details ml-auto textofondoblanco">
                           <?php the_field( 'ficha_tecnica' ); ?>
                       </p>
                    </div>
                    <div class="col-12 col-md-10 col-lg-6">
                        
                        <p class="text-justify textofondoblanco">
                            <?php the_field( 'descripcion_corta' ); ?>
                        </p>
                    </div>
            
                </div>
            </div>
     </section>
    <!--inicio primer bloque-->
 <?php if (get_field('titulo_preview')) : ?>
    <section id="seccion-a" class="bgnegro d-flex align-items-center">
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
    <section id="seccion-b" class="bgblanco d-flex align-items-center">
        <div class="container my-5">
            <h2 class="col-md-10 textofondoblanco">Auteurs</h2>
            <div class="row justify-content-center mb-3">
                <div class="col-md-3 col-12">
                   <?php if ( get_field( 'foto_de_autor') ) { ?>
                        <img src="<?php the_field( 'foto_de_autor' ); ?>" alt="Auteur" class="img-fluid rounded-circle" />
                    <?php } ?>
                </div>
                <div class="col-md-7 col-12 align-self-center">
                    <h3 class="textofondoblanco"><?php the_field( 'nombre_de_autor' ); ?></h3>
                    <p class="textofondoblanco text-justify">L<?php the_field( 'bio_del_autor' ); ?>
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
                    <h3 class="textofondoblanco"><?php the_field( 'nombre_de_autor_2' ); ?></h3>
                    <p class="textofondoblanco text-justify">
                        <?php the_field( 'bio_del_autor_2' ); ?>
                    </p>
                </div>
            </div>
            <?php endif ?>
        </div>
    </section>
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
<?php get_footer();?> 