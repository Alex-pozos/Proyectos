<?php
session_start();

if (isset($_SESSION['usuario'])) {
  include('header.php');
?>
  <div class="container mt-3">
    <div class="row">
      <div class="col text-center borde">
        <div class="col mt-3">
        <h2 class="centrar" style="color:darkorchid">Esta es la pagina Principal</h2>
          <p class="lead ml-3 centrar" style="color:darkgoldenrod">Te damos la bienvenida al gestor de archivos</strong>.
            <br> En la parte de arriba hay una barra de navegacion para que puedas acceder a las diferentes funcionalidaes de la pagina.
            <br>
            <!-- <img src="../img/lorivskyo.jpg" width="35%" height="35%"> -->
            <img src="../img/kyovslori.gif">
            <br>  Gracias por tu visita 👍.
          </p>
        </div>
      </div>
    </div>
  </div>
<?php
  include('footer.php');
} else {
  header("location:../index.php");
}
?>