<?php get_header();?> 


    <!--inicio primer bloque--> 
    <div id="primero" class="d-flex " >
      <div class="container d-flex align-items-center my-5">
        <div class="row">
          <div class="foto col-12 col-md-5">
            <img class="mx-auto d-block img-fluid" src="img/image940.jpg" alt="">
          </div>
          <div class="col-12 col-md-6 align-self-center cajadetexto">
            <h2 class="text-center">Quienes Somos</h2>
            <p class="text-justify px-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
               incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
               exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
               dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
               anim id est laborum.
             </p>
             <div class="d-flex">
              <button type="button" class="btn btn-primary ml-auto my-3">Leer Más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--fin primer bloque-->
    <!--segundo bloque-->
    <section id="segundo" class="d-flex align-items-center pt-5">
      <div  class="container my-5">
        <div class="row justify-content-center">
          <div class=" col-12 col-md-10 mb-3">
            <h2 class="text-center">Esto es un Título</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
               incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                 dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                 anim id est laborum.</p>
                 <img src="img/960x400.png" alt="" class="img-fluid">
                 <div class="d-flex">
                  <button type="button" class="btn btn-primary ml-auto my-3">Leer Más</button>
                </div>
          </div>
        </div>
      </div>
    </section>

    <!--fin segudno bloque-->
    <!--empieza tercer bloque-->
    <section id="tercero" class="d-flex align-items-center">
      <div class="container my-5">
        <h2 class="text-center">probando uno DOS</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-5 mb-3">
          <div class="card">
           <img src="img/image940.jpg" class="card-img-top img-fluid" alt="imagen">
           <div class="card-body">
             <h5 class="card-title text-center">Card title</h5>
          </div>
          </div>
          </div>
          <div class="col-12 col-sm-6 col-md-5 mb-3">
          <div class="card">
           <img src="img/image940.jpg" class="card-img-top img-fluid" alt="imagen">
           <div class="card-body">
             <h5 class="card-title text-center">Card title</h5>
           </div>
          </div>
          </div>
          </div>
        </div>
      </section>

    <!--fin tercero-->
        <!--cuarto-->
    <section id="cuarto" class="d-flex align-items-center">
      <div class="container py-2 px-2">
        <div class="row justify-content-center justify-content-md-end">
          <div class="card pt-3 pb-5 px-5">
              <div class="card-block">
                <h2 class="mb-2">probando uno DOS</h2>

                  <form role="form">
                      <div class="form-group">
                          <label class="form-control-label" for="form-group-input">Name</label>
                          <input type="text" class="form-control" id="form-group-input" name="name">
                      </div>
                      <div class="form-group">
                          <label class="form-control-label" for="form-group-input">Email</label>
                          <input type="text" class="form-control" id="form-group-input" name="email">
                      </div>
                      <div class="form-group">
                          <label class="form-control-label" for="form-group-input">Notes</label>
                          <textarea class="form-control" id="form-group-input" name="notes" rows="6"></textarea>
                      </div>
                      <div class="d-flex">
                       <button type="button" class="btn btn-primary ml-auto my-3">Leer Más</button>
                     </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </section>
        <!--fin cuarto-->
<?php get_footer();?> 