<?php

include '../header.php';

include '../../models/users.php';
$user = new Users();

$CIUU   = $user->getCIIU();
$sector = $user->getSector();
$tamano = $user->getTamano();
$dpto   = $user->getDpto();
$muni   = $user->getMuni();
?>
<div class="container-fluid" id="principal">
  <div class="row">
    <div class="col-lg-6">
      <div class="caja3">
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12 col-xs-12">
      <div class="caja3">
        <form action="../../controllers/users_controller.php" method="POST">
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
              <label class="login_titulo_verde">Ingresa a la Herramienta de Autogestión de Riesgos</label>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 titulo_verde text-center">
              <br>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 text-left" >
              <label for="nombre" class="label_formularios">NIT</label>
              <input type="text" pattern="[0-9]+" class="form-control" id="username" name="username" autofocus placeholder="NIT" required>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 titulo_verde text-center">
              <br>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4 text-left">
              <label for="nombre" class="label_formularios">CONTRASEÑA</label>
            </div>
            <div class="col-lg-4 text-right">
              <label for="nombre" class="Olvd-mi-contrasea">Olvídé mi contraseña</label>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
              <input type="password" class="form-control" id="passwd" name="passwd" autofocus placeholder="Contraseña" required>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-1">
              <div class="terminos">
                <input type="checkbox" name="terminos" required>
              </div>
            </div>
            <div class="col-lg-7 parrafo_verde">
              Aceptar términos y condiciones
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 text-center">
              <input type="submit" name="Ingresar" class="Image-2" value="Ingresar" >
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
              <label class="parrafo_verde">
                ¿No tiene cuenta? Regístrese aquí
              </label>
            </div>
            <div class="col-lg-2">
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
          <div class="row">
            <div class="col-lg-6">
              <div class="caja3">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-xs-12">
    </div>
  </div>
</div>
<?php
include '../footer.php';
?>