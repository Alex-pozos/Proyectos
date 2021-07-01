<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <title>Login</title>
   <link rel="shortcut icon" href="img/user0.PNG" type="image/x-icon">
   <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="librerias/bootstrap4/bootstrap.min.css">
</head>

<body >
   <div class="wrapper fadeInDown">
      <div id="formContent">
         <!-- Tabs Titles -->

         <!-- Icon -->
         <div class="fadeIn first mt-4">
            <img src="img/user0.PNG" id="icon" alt="User Icon" />
            <h1 style="color: deepskyblue;">Registro Login</h1>
         </div>

         <!-- Login Form -->
         <form autocomplete="off" method="post" id="frmLogin" onsubmit="return logear()">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Username 👤" required>
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password 🔐" required>
            <input type="submit" class="fadeIn fourth" value="Ingresar">
            <!-- <span class="btn btn-outline-info" id="btn_ingresar" >INGRESAR</a> -->
         </form>

         <!-- Remind Passowrd -->
         <div id="formFooter">
            <a class="underlineHover" href="registro.php">Regitrarse <i class="fas fa-user"></i></i></a>
         </div>

      </div>
   </div>
   <script src="librerias/jquery_3.4.1/jquery.js"></script>
   <script src="librerias/sweetalert.min.js"></script>
   <script src="js/funciones.js"></script>

   <script type="text/javascript">
      function logear() {
         $.ajax({
            type: "POST",
            data: $('#frmLogin').serialize(),
            url: "procesos/usuario/login/login.php",
            success: function(respuesta) {
               respuesta = respuesta.trim();
               if (respuesta == 1) {
                  swal(":)", "Ingreso correctamente", "succes");
                  window.location = "vistas/inicio.php";
               } else {
                  swal("Error!!!", "Regitrate o vuelve a intentarlo", "error");
               }
            }
         });
         return false;
      }
   </script>

</body>

</html>