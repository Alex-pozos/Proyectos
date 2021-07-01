<?php

  require_once "../../../clases/Usuario.php";
  
  $password = sha1($_POST['password']);
  $fechaNacimiento = explode("/",$_POST['fechaNacimiento']);
  $fechaNacimiento = $fechaNacimiento[2]."-".$fechaNacimiento[0]."-".$fechaNacimiento[1];
  $datos = array(
                  "nombre" =>$_POST['nombre'], 
                  "apellido" => $_POST['apellido'],
                  "fechaNacimiento" => $fechaNacimiento,
                  "usuario" => $_POST['usuario'],
                  "password" => $password
            );

  $usuario = new Usuario();
  echo $usuario -> agregarUsuario($datos);

?>