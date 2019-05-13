<?php get_header( 'librosingle' ); ?>

    <!--inicio primer bloque-->
    <section id="seccion-a" class="bgnegro d-flex align-items-center">
        <div class="container  my-5">
            <h2 class="col-md-10"><?php the_field( 'titulo_preview' ); ?></h2>
            <div class="justify-content-center">
            <?php the_field( 'preview' ); ?>
            </div>
        </div>
    </section>
    
   
    <!--fin primer bloque-->
    <!--segundo bloque-->
    <section id="seccion-b" class="bgblanco d-flex align-items-center">
        <div class="container my-5">
            <h2 class="col-md-10 textofondoblanco">Auteurs</h2>
            <div class="row justify-content-center mb-3">
                <div class="col-md-3 col-12">
                   <?php if ( get_field( 'foto_de_autor') ) { ?>
                        <img src="<?php the_field( 'foto_de_autor' ); ?>" alt="Auteur" class="img-fluid" />
                    <?php } ?>
                </div>
                <div class="col-md-7 col-12 align-self-center">
                    <h3 class="textofondoblanco"><?php the_field( 'nombre_de_autor' ); ?></h3>
                    <p class="textofondoblanco text-justify">L<?php the_field( 'bio_del_autor' ); ?>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 col-12">
                    <?php if ( get_field( 'foto_de_autor_2') ) { ?>
                        <img src="<?php the_field( 'foto_de_autor_2' ); ?>" alt="Auteur" class="img-fluid" />
                    <?php } ?>
                </div>
                <div class="col-md-7 col-12 align-self-center">
                    <h3 class="textofondoblanco"><?php the_field( 'nombre_de_autor_2' ); ?></h3>
                    <p class="textofondoblanco text-justify">
                        <?php the_field( 'bio_del_autor_2' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--fin segundo bloque-->
    <!--empieza tercer bloque-->
    <section id="seccion-c" class="bgnegro d-flex align-items-center">
        <div class="container my-5">                 
                        <h2>Esto es un Título</h2>
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/VgXOPeobPcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Vero deserunt dolor perferendis accusamus asperiores atque
                        laudantium iste dolorem eius tempora debitis illo nihil porro officiis possimus
                        reprehenderit, repellendus repudiandae adipisci?</p>                
            
        </div>
    </section>
    <!--fin tercero-->

    <!--fin cuarto-->
<?php get_footer();?> 