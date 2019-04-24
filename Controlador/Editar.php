<?php

include '../Clases/conexion.php';
include '../Clases/Usuario.php';

$objConexion = new conexion();
$objUsuario=new Usuario();

$conexion = $objConexion->conectar();

echo $objUsuario->editar($conexion, $_POST['nombre'], $_POST['email'], $_POST['id']);