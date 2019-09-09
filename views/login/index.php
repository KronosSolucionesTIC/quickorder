<?php

include '../header.php';

include '../../models/users.php';
$user = new Users();
?>
<div class="container-fluid">

    <form action="../../controllers/users_controller.php" method="POST">

    <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12 text-center">
        <img src="../../images/fondo.png">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4 text-left" >
        <label for="nombre" class="label_formularios">Usuario:</label>
        <input type="text" class="form-control" id="username" name="username" autofocus placeholder="Usuario" required>
      </div>
      <div class="col-lg-4">
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4 text-left" >
        <label for="nombre" class="label_formularios">Contraseña:</label>
        <input type="password" class="form-control" id="passwd" name="passwd" autofocus placeholder="Contraseña" required>
      </div>
      <div class="col-lg-4">
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-lg-4 col-md-12 col-xs-12">
      </div>
      <div class="col-lg-4 text-center">
        <input type="submit" name="Ingresar" class="Image-2" value="Ingresar" >
      </div>
      <div class="col-lg-4 col-md-12 col-xs-12">
      </div>
    </div>

    <div class="form-group text-center">
    <?php
if (isset($_GET['existe'])) {
    ?>
      <div class="alert alert-danger">
        Usuario invalido.
      </div>
  <?php
}
?>
  </div>
            <div class="form-group text-center">
    <?php
if (isset($_GET['pass'])) {
    ?>
      <div class="alert alert-danger">
        Clave digitada invalida.
      </div>
  <?php
}
?>
  </div>
<div class="form-group text-center">
    <?php
if (isset($_GET['sesion'])) {
    ?>
      <div class="alert alert-danger">
        Inicie sesion.
      </div>
  <?php
}
?>
  </div>
<div class="form-group text-center">
    <?php
if (isset($_GET['logout'])) {
    ?>
      <div class="alert alert-success">
        Logout exitoso.
      </div>
  <?php
}
?>
  </div>
        </form>
      </div>
    </div>
  </div>
</div>