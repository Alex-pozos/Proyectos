</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font_awesome/all.css">
    <link rel="stylesheet" href="css/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/user0.PNG" type="image/x-icon">
    <script src="js/font_awesome/all.js"></script>
    <script src="../js/jquery/jquery.js"></script>
    <script src="../js/swal/swal.js"></script>
    <script src="../js/font_awesome/all.js"></script>
    <script src="../js/funciones.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first mt-4">
      <img src="img/user0.PNG" id="icon" alt="User Icon" />
      <h1>Registro Login</h1>
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Username">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Ingresar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="views/registro.php">Regitrarse <i class="fas fa-user"></i></i></a>
    </div>

  </div>
</div>
</body>
</html>