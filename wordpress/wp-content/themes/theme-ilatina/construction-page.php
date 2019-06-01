<?php
/*
Template Name: underconstruccion-plantilla
*/
?>
<?php get_header(construccion);?> 


    <!--inicio primer bloque--> 
    <div id="primero" class="d-flex bgblanco" >
      <div class="container d-flex align-items-center justify-content-center my-5">
            <?php if ( get_field( 'underconstruccion') ) { ?>
                <img src="<?php the_field( 'underconstruccion' ); ?>" class="img-fluid" />
            <?php } ?>
      </div>
    </div>
    <!--fin primer bloque-->
  
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->  </body>
</html>
