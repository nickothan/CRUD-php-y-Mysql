<?php

include '../Clases/conexion.php';
include '../clases/Usuario.php';

//creamos objetos de la clase conexion
$objConexion=new conexion();
$conexion=$objConexion->conectar();

$objUsuario=new Usuario();
echo $objUsuario->registrar($conexion, $_POST['nombre'], $_POST['email'], $_POST['password']);