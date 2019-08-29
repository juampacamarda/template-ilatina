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
  
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
