<!-- Button trigger modal -->
<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_update">
  Launch demo modal
</button>
-->

<!-- Modal -->
<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: black;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <!-- construccion del formulario de datos para actualizar estudiante -->
        <form id="formulario_actualiza_registro">

        <!-- se agrega el input para el ID ya que es necesrio en la precarga de informacion en la venta modal -->
        <div class="form-group">
            <input type="text" class="form-control" id="actualiza_id" name="actualiza_id" hidden="true">
          </div>
        <div class="form-group">
            <label for="actualiza_nombre">Nombre del Producto</label>
            <input type="text" class="form-control" id="actualiza_nombre" name="actualiza_nombre">
          </div>
          <div class="form-group">
            <label for="actualiza_unidades">Unidades</label>
            <input type="text" class="form-control" id="actualiza_unidades" name="actualiza_unidades">
          </div>
          <div class="form-group">
            <label for="actualiza_cantidad">Cantidad en Kg.</label>
            <input type="text" class="form-control" id="actualiza_cantidad" name="actualiza_cantidad">
          </div>
          <div class="form-group">
            <label for="actualiza_fecha">Fecha de Ingreso</label>
            <input type="text" class="form-control" id="actualiza_fecha" name="actualiza_fecha">
          </div>
          <div class="form-group">
            <label for="actualiza_costo">Costo Total</label>
            <input type="text" class="form-control" id="actualiza_costo" name="actualiza_costo">
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <!-- se copio el atributo de data-dismiss para que la ventana se cierre sola al dispararse el sawl -->
        <button type="button" class="btn btn-warning" id="btn_actualiza_registro" data-dismiss="modal" onclick="actualiza_registro()">
          Actualizar Registro
        </button>
      </div>
    </div>
  </div>
</div>