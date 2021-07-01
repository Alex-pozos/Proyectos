  <?php 
    session_start();
    require_once "../../clases/Conexion.php";
    $idUsuario = $_SESSION['idUsuario'];
    $conexion = new Conectar();
    $conexion = $conexion->conexion();

  ?>

  <div class="table-responsive">
    <table class="table table-striped" id="tablaCategorias1" style="text-align: center;">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre Categoria</th>
          <th>Fecha de Inserción</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            $sql = "SELECT id_categorias,nombre,fecha_insert FROM t_categorias WHERE id_usuario = '$idUsuario'";
            $result = mysqli_query($conexion, $sql);
            
            while($mostrar = mysqli_fetch_array($result)){
              $idCategoria = $mostrar['id_categorias'];
        ?>
        <tr>
          <td><?php echo $idCategoria?></td>
          <td><?php echo $mostrar['nombre']?></td>
          <td><?php echo $mostrar['fecha_insert']?></td>
          <td>
            <span class="btn btn-outline-warning" onclick="obtenerDatosCategoria('<?php echo $idCategoria ?>')"  data-toggle="modal" data-target="#modal_update">
            <i class="far fa-edit"></i> Editar</span>
          </td>
          <td>
            <span class="btn btn-outline-danger" onclick="eliminarCategoria('<?php echo $idCategoria ?>')">
            <i class="far fa-trash-alt"></i> Eliminar</span>
          </td>
        </tr>
        <?php 
          }
        ?>
      </tbody>
    </table>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#tablaCategorias1').DataTable();
    });
  </script>