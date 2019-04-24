<?php 
   include './clases/conexion.php';
   include './Clases/Usuario.php';
   
   $objConexion= new conexion();
   $objUsuario=new Usuario();
   
   //guardamos en la variable lo que nos retorna conexion
   $conexion=$objConexion->conectar();
   //capturar la variable que envie por el metodo get
   $id= $_GET['id'];
   $datos = $objUsuario->consultarId($conexion, $id);
   
   //variables para imprimir en los campos
   $nombre;
   $email;
   while ($row = mysqli_fetch_array($datos)){
       $nombre= $row['nombre'];
       $email=$row['email'];
       $password=$row['password'];
   }

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <style>
    body{
        background-color: powderblue;
        margin: 20%;
    }
    h1{
        /*para alinear los textos al centro*/
        text-align: center;
        /*para ponerle borde o cuadro*/
        border: 2px solid tomato;
        
        
        /* height se usa para definir la altura de los objetos*/
        height: 50px;
        /* width se usa para definir los lados de los objetos*/
        width: 50%;
        
        }
    form{
        text-align: center;
        border: 1px solid black;
        background-color: tomato;
        /*padding se usa para definir los pados de los cuadros*/
        padding-top: 30px;
        padding-right: 10px;
        padding-left: 10px;
        padding-bottom: 30px;
        width: 40%
        }
    a {
        background-color : blue;
        color: white;
    }

    </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body  >
    
        <h1>Editar Usuario</h1>
        
        <form action="controlador/Editar.php" method="post">
            <input name="id" type="hidden" value="<?php echo $id;?>">
            <label>Nombre: </label><input type="text" name="nombre" ><br><br>
            <label>Email: </label><input type="text" name="email" ><br><br>
            <label>password :</label><input type="text" name="password"><br><br>
          
            <input type="submit" value="modificar">
            <a href="index.php">Inicio</a>

        </form>
    
        <?php
        // put your code here
        ?>
    </body>
</html>
