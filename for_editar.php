
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <h1>Update</h1>
    
    <form action="" method="post">
            <input name="id" type="hidden" value="<?php echo $id;?>">
            <label>Nombre: </label><input type="text" name="nombre" ><br><br>
            <label>Email: </label><input type="text" name="email" ><br><br>
            <label>password :</label><input type="text" name="password"><br><br>
          
            <input type="submit" value="modificar">
            <a href="index.php">Inicio</a>
              
    
</body>
</html>