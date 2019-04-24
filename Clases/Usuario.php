<?php



class Usuario {
    public function registrar($conexion,$nombre, $email, $password){
        $query="INSERT INTO Usuario (nombre, email, password) VALUES('$nombre','$email', '$password')";
        //Msqli metodo que esta en  una libreria de apache     ($quey )es la consulta que se va a ejecutar en la BD
        $consulta= mysqli_query($conexion, $query);
        if($consulta){
            $respuesta="registrado con exito";
        }else{
            $respuesta ="problema con el registro";
        }
        return $respuesta;
    }
                         
    public function consultar($conexion){
        //Consulta toda la  BD
        $query="SELECT * FROM usuario ";
        //hacemos la consulta en la BD y obtenemos los resultados
        $consulta= mysqli_query($conexion, $query);
        //retornamos la consulta
        return $consulta;
    }
    public function consultarId($conexion, $id){
        $query ="SELECT * FROM Usuario WHERE idUsuario = $id";
        $consulta = mysqli_query($conexion, $query);
        
        return $consulta;
    }
    public function editar($conexion, $nombre, $email, $id){
        $query = "UPDATE usuario SET nombre='$nombre', email='$email' WHERE idUsuario =$id ";
        $consulta = mysqli_query($conexion, $query);
        
        if($consulta){
            $respuesta= "Actualizado con exito";
        }else{
            $respuesta ="Problema al actualizar";
        }
        return $respuesta;
    }
    public function eliminar($id, $conexion){
        $query ="DELETE FROM usuario WHERE idUsuario = $id";
        $consulta= mysqli_query($conexion, $query);
        if($consulta){
            $respuesta="eliminado con exito";
        }else{
            $respuesta= "problema al eliminar";
        }
        return $respuesta;
    }
}