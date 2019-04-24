<?php
/* @author usuario
 */
class conexion {
    public function conectar(){
        // usamos la funcion mysqli_connect para conectar con la BD
        //recibe 4 parametros -> localhost para usar el xamp, root para la consola
        $link = mysqli_connect("localhost", "root", "", "");
                //verifico si esta bien conectada, sino da error
                if ($link === false){
                    die("ERROR: Could not connet. ".mysqli_connect_error());
                }
                return $link;
    }
}
