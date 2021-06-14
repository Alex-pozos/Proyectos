<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador de Archivos</title>
  <!-- dependencias visuales -->
  <!-- CSS only -->
  <!-- dependencias visuales -->
  <link rel="stylesheet" href="../css/b4/bootstrap.css">
  <link rel="stylesheet" href="../css/font_awesome/all.css">
  <link rel="stylesheet" href="../css/style_nav0.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/centrar.css">
  <link rel="shortcut icon" href="../img/simbolo.png" type="image/x-icon">
  <!-- dependencias de funcionalidad -->
  <script src="../js/jquery/jquery.js"></script>
  <script src="../js/swal/swal.js"></script>
  <script src="../js/font_awesome/all.js"></script>

  <script src="../js/b4/bootstrap.js"></script>
  <script src="../js/funciones.js"></script>

<body>
        <nav class="navbar">
          <a class="navbar-brand">
            <img src="../img/simbolo.png" width="35" height="35">
            By Alex ®
          </a>
          <h2> Gestor de archivos <i class="fas fa-folder-open"></i></h2>
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="#"><span class="fas fa-home"></span> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><span class="fas fa-database"></span> Administrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php"><span class="fas fa-power-off"></span> Salir</a>
            </li>
          </ul>
        </nav>


  <div class="container mt-4">
    <div class="row mt-4">
      <div class="col mt-4">
        <!-- inicio: construccion de la card -->
        <div class="card bg-light mb-3" style="color:deepskyblue">
          <div class="card-header" style="background:#303030;">
            <h3><i class="fab fa-battle-net mr-2" style="font-size: 25px;"></i>Control Archivos</h3>
          </div>
          <div class="card-body" style="background:black;">
            <!-- inicio: construccion del espacio para el boton de agregar con icono -->
            <div class="row">
              <div class="col">
                <div class="d-flex justify-content-end">
                  <span class="btn btn-outline-success btn-lg mr-2" data-toggle="modal" data-target="#modal_insert">
                    <!--Se agrega informacion del trigger propio del modal_insert-->
                    <i class="fas fa-plus"></i>
                    Nueva Categoria
                  </span>
                  <span class="btn btn-outline-primary btn-lg" style="float: right;" data-toggle="modal" data-target="#modal_buscar">
                    <!--Se agrega informacion del trigger propio del modal_insert-->
                    <i class="fas fa-search"></i>
                    Buscar
                  </span>
                </div>
                <!-- agregamos un div para presentar el contenido de la tabla: lo importante de este es el ID -->
                <div id="datos_de_tabla" class="mt-3"></div>
              </div>
            </div>
          </div>
          <div class="card-footer lead text-muted" style="background: #404040">
            <a href="javascript:history.back()" class="btn btn-outline-primary" style="float:right">Regresar</a> By Alex®
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  require_once "modal_buscar.php";
  require_once "modal_insert.php";
  require_once "modal_update.php";
  ?>

<script type="text/javascript">
  $(document).ready(function(){
    $('#datos_de_tabla').load("tabla_archivos.php");
  });
</script>

</body>

</html>