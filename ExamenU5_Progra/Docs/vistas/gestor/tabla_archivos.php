<?php 
    session_start();
    require_once "../../clases/Conexion.php";
    $c = new Conectar();
    $conexion = $c->conexion();
    $idUsuario = $_SESSION['idUsuario'];
    $NomUsuario = $_SESSION['usuario'];

    $sql = "SELECT 
              archivos.id_archivos as idArchivo,
              usuario.nombre as nombreUsuario,
              categorias.nombre as nombreCategoria,
              archivos.nombre as nombreArchivo,
              archivos.tipo as tipoArchivo,
              archivos.ruta as rutaArchivo,
              archivos.fecha as fecha
          FROM
              t_archivos AS archivos
                  INNER JOIN
              t_usuarios AS usuario ON archivos.id_usuario = usuario.id_usuario
                  INNER JOIN
              t_categorias AS categorias ON archivos.id_categorias = categorias.id_categorias
                  AND archivos.id_usuario = '$idUsuario'";
    $result = mysqli_query($conexion,$sql);
?>

<div class="row">
  <div class="col-sm-12">
    <table class="table table-striped table-hover" id="tablaArchivos" style="text-align: center;">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre Categoria</th>
          <th>Nombre de Archivo</th>
          <th>Extension de Archivo</th>
          <th>Descargar</th>
          <th>Visualizar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
      <?php
        // Arreglo de extensione validas
        $extensionesValidas = array('png', 'jpg', 'pdf','gif','mp3','mp4');
        while ($mostrar = mysqli_fetch_array($result)) {
          $rutaDescarga = "../archivos/".$NomUsuario."/".$mostrar['nombreArchivo'];
          $nombreArchivo = $mostrar['nombreArchivo'];
          $idArchivo = $mostrar['idArchivo'];
      ?>
        <tr>
          <td><?php echo $mostrar['idArchivo'];?></td>
          <td><?php echo $mostrar['nombreCategoria'];?></td>
          <td><?php echo $mostrar['nombreArchivo'];?></td>
          <td><?php echo $mostrar['tipoArchivo'];?></td>
          <td>
            <a href="<?php echo $rutaDescarga; ?>" download="<?php echo $nombreArchivo; ?>">
            <span class="btn btn-outline-warning"><i class="fas fa-download"></i> Descargar</span></a>
          </td>
          <td>
          <?php
            for ($i=0; $i < count($extensionesValidas) ; $i++) { 
              if ($extensionesValidas[$i] == $mostrar['tipoArchivo']) {
          ?>
            <span class="btn btn-outline-primary" data-toggle="modal" data-target="#visualizarArchivo" 
            onclick="obtenerArchivoPorId(<?php echo $idArchivo ?>)">
            <i class="fas fa-eye"></i> Visualizar</span>
          <?php
              }
            }
          ?>
          </td>
          <td>
            <span class="btn btn-outline-danger" onclick="eliminarArchivo('<?php echo $idArchivo ?>')">
            <i class="fa fa-trash"></i> Eliminar</span>
          </td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaArchivos').DataTable();
  });
</script>