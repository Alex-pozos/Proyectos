<!-- Button trigger modal -->
<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_insert">
  Launch demo modal
</button>
-->

<!-- Modal -->
<div class="modal fade" id="modal_insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
        <form id="formulario_crear_categoria">
          <div class="form-group">
            <label for="crear_nombre centrar">Nombre del Archivo</label>
            <input type="text" class="form-control" id="crear_nombre" name="crear_nombre">
          </div>
          <div class="form-group">
            <label for="crear_unidades">Tipo de Archivo</label>
            <input type="text" class="form-control" id="tipo_archivo" name="tipo_archivo">
          </div>
          <div class="form-group">
            <label for="crear_fecha">Fecha de Ingreso</label>
            <input type="text" class="form-control" id="crear_fecha" name="crear_fecha">
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btn_crear_registro" onclick="crear_registro()">Crear Registro</button>
      </div>
    </div>
  </div>
</div>


