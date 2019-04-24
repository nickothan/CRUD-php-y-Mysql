
<!-- agregamos un php con cierre para incluir los php -->
<?php 
   include "clases/Conexion.php";
   include "clases/Usuario.php";

   $objconexion =new Conexion();
   $objUsuario =new Usuario();

   //la variable conexion guarda lo que retorna el objconexion que nos retorna el metodo conectar que esta en conexion.php
   $conexion = $objconexion->conectar();
// el obj datos nos almacena lo que obtiene consultar
   $datos = $objUsuario->consultar($conexion);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar</title>
</head>
<body>
 <!-- creamos una tabla en la pg consultar --> 
 <!-- con border="1" ponemos lineas a las tablas-->
    <table border="1">
       
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Editar</th>
            <th>eliminar</th>
        </tr>
        
        <!-- creamos un php y ponemos un ciclo while -->
        
        <?php 

        //msqly_fetch_ array es una funcion que : cada vez que no encuentra un registro en la BD que hicimos, la va a mostrar
        while($dato=mysqli_fetch_array($datos)){
            ?>
    <tr>
        <!-- imprime los datos de la tabla-->
            <td><?php echo $dato['idUsuario'] ?></td>
            <td><?php echo $dato['nombre'] ?></td>
            <td><?php echo $dato['email'] ?></td>
            <!--se ponen los botones editar y eliminar-->
            <td><a href="Editar.php?id=<?php echo $dato['idUsuario'] ?>">Editar</a></td>
            <!--  -->
            <td><a href="controlador/eliminar.php?id=<?php echo $dato['idUsuario']; ?>">eliminar</a></td>
    </tr>
        
        <?php
}

        ?>
        
    
    </table><br>
    <!--ponemos un boton para volver al inicio-->
    <a href="index.php">Inicio</a>

</body>
</html>