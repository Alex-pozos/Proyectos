<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/font_awesome/all.css">
  <link rel="stylesheet" href="../css/b4/bootstrap.css">
  <link rel="stylesheet" href="../css/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../img/usuario.jpg" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="../js/font_awesome/all.js"></script>
  <script src="../js/b4/bootstrap.min.js"></script>
</head>

<body class="fondo2">
  <div class="container mt-4">
    <div class="row mt-3">
      <div class="col-sm-3"></div>
      <div class="col-sm-9 mt-1">
        <div class="card" style="width: 40rem;">
          <div class="card-header" style="background: black; color:orangered; width: 39.9rem; text-align: center;" border="1">
            <h3><i class="far fa-address-book mr-2" style="font-size: 35;"></i> Control "Registro"</h3>
          </div>
          <div class="card-body" style="background: black; opacity:.9;">
            <form id="controlando_el_formulario">
              <div class="form-group">
                <label for="registrar_nombre" style="color: orangered">Nombre</label>
                <input type="text" class="form-control" id="registrar_nombre" name="registrar_nombre" placeholder="&#x1F466; Ingresa tu nombre">
              </div>
              <div class="form-group mt-3">
                <label for="registrar_apellido" style="color: orangered">Apellido</label>
                <input type="text" onkeypress="return soloLetras(event)" class="form-control" id="registrar_apellido" name="registrar_apellido" placeholder="&#128100; Ingresa tu apellido">
              </div>
              <div class="form-group mt-3">
                <label for="registrar_usuario" style="color: orangered">Usuario</label>
                <input type="text" onkeypress="return letras_num(event)" class="form-control" id="registrar_usuario" name="registrar_nombre" placeholder="&#128697;Ingresa tu usuario">
              </div>
              <div class="form-group mt-3">
                <label for="registrar_password" style="color: orangered">Password</label>
                <input type="password" class="form-control" id="registrar_password" placeholder="&#128272; Ingresa tu password">
              </div>
              <div class="mover2 mt-3">
                <span class="btn btn-primary" id="btn_registrar_nuevo_usuario">Registrar</span>
              </div>
              <div class="mover mt-3">
                <a class="btn btn-success" href="../index.php">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</body>

</html>