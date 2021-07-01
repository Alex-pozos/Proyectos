<?php
session_start();
if (isset($_SESSION['usuario'])) {
  include('header.php');
?>

  <div class="container mt-4">
    <div class="row mt-4">
      <div class="col mt-4">
        <!-- inicio: construccion de la card -->
        <div class="card bg-light mb-3" style="color:deepskyblue">
          <div class="card-header" style="background:#303030;">
            <h3><i class="fab fa-battle-net mr-2" style="font-size: 25px;"></i>Control Archivos</h3>
          </div>
          <div class="card-body" style="background:black;">
            <div class="row">
              <div class="col">
                <div class="d-flex justify-content-end">
                  <span class="btn btn-outline-primary btn-lg mr-2" data-toggle="modal" data-target="#modal_agregar">
                    <!-- Se agrega informacion del trigger propio del modal_insert -->
                    <i class="fas fa-plus"></i>
                    Agregar Archivos
                  </span>
                </div>
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


  <div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar archivos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
          <form id="frmArchivos" enctype="multipart/form-data" method="post">
            <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
            <label>Nombre de la Categoría</label>
            <div id="categoriasLoad"></div>
            <label>Selecciona Archivos</label>
            <input type="file" name="archivos[]" id="archivos[]" class="form-control" multiple="">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-outline-primary" id="btnGuardarArchivos" onclick="guardarArchivos()">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="visualizarArchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Visor de Archivos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
          <div id="archivoObtenido"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#datos_de_tabla').load("gestor/tabla_archivos.php");
      $('#categoriasLoad').load("gestor/selectCategorias.php");

    });
  </script>
<?php
} else {
  header("location:../index.php");
}
?>