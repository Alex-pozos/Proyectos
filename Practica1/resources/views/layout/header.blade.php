<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="{{ asset('img/icono_kof.png') }}" type="image/x-icon">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   

   <!-- Scripts bootstrap -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

   <title>The kings of fighters</title>
</head>

<body>
   
   <nav class="navbar nav-tabs lead">

      <a href="/"><img src="{{ asset('img/icono_kof.png')}}" width="40" height="40"></a>
      <a class="nav-link" href="#" style="color:deepskyblue;"></a>
      <b class="nav-pills" href="#" style="color:deepskyblue;"><i class="fab fa-steam-symbol"></i> Videojuegos <strong>"The kings of fighters"</strong></b>
      

      <ul class="nav nav-pills">
         <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: red"><i class="fas fa-gamepad"></i> Juegos</a>
            <div class="dropdown-menu" >
               <a class="dropdown-item" href="/juegos/kof97" style="color: red"><img src="{{ asset('img/iconos/kof97.png') }}" alt="" width="70" height="30">
                kof 97</a>
               <a class="dropdown-item" href="/juegos/kof98" style="color: red"><img src="{{ asset('img/iconos/kof98.png') }}" alt="" width="70" height="30">
                kof 98</a>
               <a class="dropdown-item" href="/juegos/kof99" style="color: red"><img src="{{ asset('img/iconos/kof99.png') }}" alt="" width="70" height="30">
                kof 99</a>
               <a class="dropdown-item" href="/juegos/kof2000" style="color: red"><img src="{{ asset('img/iconos/kof2000.png') }}" alt="" width="70" height="30">
                kof 2000</a>
               <a class="dropdown-item" href="/juegos/kof2001" style="color: red"><img src="{{ asset('img/iconos/kof2001.png') }}" alt="" width="70" height="30">
                kof 2001</a>
               <a class="dropdown-item" href="/juegos/kof2002" style="color: red"><img src="{{ asset('img/iconos/kof2002.png') }}" alt="" width="70" height="30">
                kof 2002</a>
               <a class="dropdown-item" href="/juegos/kof2003" style="color: red"><img src="{{ asset('img/iconos/kof2003.png') }}" alt="" width="70" height="30">
                kof 2003</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="/personajes/sobresalientes" style="color: red">Todos los personajes</a>
            </div>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="/personajes/jefes" style="color:aqua;"><i class="fab fa-battle-net"></i> Jefes</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="/" style="color:#15df05;"><i class="fas fa-home"></i> Home</a>
         </li>
      </ul>
   </nav>
</body>

</html>