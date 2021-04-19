
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
            <div class="social pr-1 col-3 col-md-2 text-light pt-3 pt-md-4">
              <div class="d-flex justify-content-center justify-md-content-end">
                <a href="https://www.facebook.com/editions.ilatina" class="rounded py-1 px-1  mr-1 mr-md-2 socialicon fab fa-facebook"></a>
                <a href="https://www.messenger.com/t/editions.ilatina" class="rounded py-1 px-1  mr-1 mr-md-2 socialicon fab fa-facebook-messenger"></a>
                <a href="https://www.instagram.com/editions.ilatina/" class="rounded py-1 px-1 socialicon mr-1 fab fa-instagram"></a>
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
    <?php wp_footer(); ?>
  </body>
</html>
