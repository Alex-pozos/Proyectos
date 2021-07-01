<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Registro</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/usuario.jpg" type="image/x-icon">
  <link rel="stylesheet" href="librerias/jquery-ui-1.12.1/jquery-ui.css">
  <link rel="stylesheet" href="librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
  <link rel="stylesheet" href="librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" href="librerias/fontawesome/css/all.css">
</head>

<body class="fondo2">
  <div class="container mt-4 fondo3">
    <h1 style="text-align: center"><i class="far fa-address-book"></i> Control Registro</h1>
    <hr>
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <form id="frmRegistro" method="POST" onsubmit="return agregarUsuarioNuevo()" autocomplete="off">
          <label>Nombre <i class="far fa-user-circle"></i></label>
          <input type="text" name="nombre" id="nombre" class="form-control" required>
          <label>Apellido <i class="far fa-user-circle"></i></label>
          <input type="text" name="apellido" id="apellido" class="form-control" required>
          <label>Fecha de nacimiento <i class="far fa-calendar-alt"></i></label>
          <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required readonly>
          <label>Usuario <i class="far fa-user"></i></label>
          <input type="text" name="usuario" id="usuario" class="form-control" required>
          <label>Password <i class="fas fa-key"></i></label>
          <input type="password" name="password" id="password" class="form-control" required>
          <br>
          <div class="mover2 mt-3 mb-3">
            <button class="btn btn-primary"><i class="fas fa-user-edit"></i> Regitrar</button>
          </div>
          <div class="mover mt-3 mb-3">
            <a class="btn btn-success" href="index.php"><i class="fas fa-sign-in-alt"></i> Login</a>
          </div>
        </form>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
  <script src="librerias/jquery_3.4.1/jquery.js"></script>
  <script src="librerias/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script src="librerias/sweetalert.min.js"></script>
  <script type="text/javascript">
    $(function() {
      var fechaA = new Date();
      var yyyy = fechaA.getFullYear();

      $("#fechaNacimiento").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1950:' + yyyy,
        dataFormat: 'dd-mm-yy'
      });
    });
  </script>

  <script type="text/javascript">
    function agregarUsuarioNuevo() {
      $.ajax({
        method: "POST",
        data: $('#frmRegistro').serialize(),
        url: "procesos/usuario/registro/agregarUsuario.php",
        success: function(respuesta) {
          respuesta = respuesta.trim();
          if (respuesta == 1) {
            swal("Exito!!!", "Se agrego nuevo usuario", "success");
            $("#frmRegistro")[0].reset();
          } else if (respuesta == 2) {
            swal("Alerta!!!", "Este usuario ya exite, agrega otro", "warning");
          } else {
            swal("Error!!!", "No se pudo agregar nuevo usuario", "error");
          }
        }
      });
      return false;
    }
  </script>
</body>

</html>