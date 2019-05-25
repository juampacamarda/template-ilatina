<?php wp_footer(); ?>
<!-- Footer -->
    <footer class="footer page-footer font-small bg-dark">
        <!-- Footer Elements -->
        <div class="px-3">
          <!-- Grid row-->
          <div class="row d-flex align-items-center justify-content-between justify-content-md-between">
            <div class="col-8 col-md-4">
                <?php
                if(is_active_sidebar('footerlogo')){
                dynamic_sidebar('footerlogo');
                }
                ?>
            </div>
            <!-- Grid column -->
            <div class=" col-3 col-md-2 text-light pt-3 pt-md-4">
              <div class="d-flex justify-content-center justify-md-content-end">
                <a href="#" class=" py-1 px-2  mr-2 mr-md-4 socialicon fa fa-facebook"></a>
                <a href="#" class=" py-1 px-2 socialicon fa fa-twitter"></a>
              </div>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row-->
        </div>
        <!-- Footer Elements -->
      </footer>
      <!-- Footer -->


    <!-- Optional JavaScript -->
   

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
