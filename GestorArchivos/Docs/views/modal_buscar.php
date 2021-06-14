<!-- Button trigger modal -->
<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_update">
  Launch demo modal
</button>
-->

<!-- Modal -->
<div class="modal fade" id="modal_buscar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title centrar" id="exampleModalLabel">Busqueda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <!-- construccion del formulario de datos para actualizar estudiante -->
        <form class="form-inline my-2 my-lg-0" id="formulario_busqueda">

        <!-- se agrega el input para el ID ya que es necesrio en la precarga de informacion en la venta modal -->
        <div class="input-group">
            <!-- <label for="buscar">Buscar</label> -->
            <input type="search" class="form-control" id="buscar" name="buscar" placeholder="Buscar..." style="width: 300px;">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
            <a type="button" class="btn btn-outline-info" id="btn_busqueda" data-dismiss="modal" onclick="buscar()">
              Buscar
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>