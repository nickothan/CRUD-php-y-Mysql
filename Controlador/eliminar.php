<?php

include '../Clases/Usuario.php';
include '../Clases/conexion.php';

$objConexion= new conexion();
$objUsuario=new Usuario();

$conexion= $objConexion->conectar();

echo $objUsuario->eliminar($_GET['id'], $conexion);