<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-md-10" style="background-color:#EAEDF0;">

      <h1 class="my-4">Mis juegos

      </h1>
      <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Mas Juegos</button>
      <h2>-------------------------------</h2>
      <?php

$juegos = ControllerMain::mostrarTodoJuegos();
foreach ($juegos as $key => $value) {
    echo '<div class="card mb-4 float-left ml-3" style="width:14rem;">';
    echo '<img src="' .$value['rutaFoto'] .'" class="card-img-top">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' .$value['tituloJuego'] .'</h5>';
    echo '<p class="card-text" >' .$value['descripcion']  .'</p>';
    echo '<a href="#" class="btn btn-primary">ver</a><a href="#" class="btn btn-primary">borrar</a><a href="#" class="btn btn-primary">actualizar</a>
    </div> </div>';
         
}
   ?>




    </div>
    <!-- /.row -->

  </div>
  <!-- Modal Nuevo Usuario -->
  <div class="modal fade" id="modalAgregarUsuario" role="dialog">
    <div class="modal-dialog">
      <form role="form" method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="margin:10px 10px 0px 0px;"><i class="fa fa-user"></i></span>
                <input type="text" name="nombreJuego" class="form-control input-lg"
                  placeholder="nombre completo del juego" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="margin:10px 10px 0px 0px;"><i class="fa fa-lock"></i></span>
                <textarea name="descripcion" rows="10" class="form-control" placeholder="Descripcion del juego"
                  required></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="margin:10px 10px 0px 0px;"><i class="fa fa-user"></i></span>
                <select class="form-control input-lg" name="categoria">
                  <option value="">Seleccione..</option>
                  <option value="1">accion</option>
                  <option value="2">aventura</option>
                  <option value="3">moba</option>
                  <option value="4">carreras</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="panel">Subir Imagenes Juego</div>
              <input type="file" name="fotoJuego" class="foto center-block">
              <p class="center-block">Peso maximo de la foto 2Mb</p>
              <img src="vistas/img/user.png" class="thumbnail center-block previsualizar" width="100px">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
        <?php
      $crearusuario = new ControllerMain();
      $crearusuario ->agregarJuegos();
      ?>
      </form>
    </div>
  </div>