<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios con formularios en PHP y mysql</title>
</head>
<body>
<?php
//incluir archivo conectar.php
    include("conectar.php");
//validar variables buscar o actualizar
    if(isset($_POST["buscar"]) && isset($_POST["id"]) && !empty($_POST["id"])){
        $id = $_POST["id"];
//conectar con la base de datos
        $link = mysqli_connect($host, $user, $pass, $db) or die ("problemas para conectar");
//validar conexion
        if($link){
            echo "conexion exitosa <br>";
        }else{
            echo "Problemas para conectar";
        }
//generar consulta sql
        $select = "SELECT * FROM quilmes WHERE id = '$id'";
//realiza la consulta y la guarda en una variable
        $result = mysqli_query($link, $select);
//crea un array asociativo con los datos que trae $result
        $row = mysqli_fetch_array($result);

        echo $row["ID"] . "<br>";
        echo $row["Nombre"] . "<br>";
        echo $row["Apellido"] . "<br>";
        echo $row["Telefono"] . "<br>";
        echo $row["Correo"] . "<br>";
        echo $row["Direccion"] . "<br>";
        echo $row["Sexo"] . "<br>";
        echo $row["Estado_civil"] . "<br>";
        echo $row["fotos"] . "<br>";
        echo $row["peliculas"] . "<br>";
        //echo $row["peliculas"] . "<br>";

        $peliculas = explode(' - ', $row["peliculas"]);

    }
    ?>
    <form action="actualizar.php" method="post">
        
        <h2>Ingrese el ID del Cliente que desea actualizar:</h2>

        <label for="id">ID Cliente:</label>
        <input type="text" name="id" id="id" value="<?php if(isset($_POST["buscar"]) && isset($_POST["id"]) && !empty($_POST["id"])){echo $row[""];} ?>">

        <input type="submit" value="Buscar" name="buscar" id="buscar">



    </form>
<hr>
    <form action="actualizar.php" method="post">
        
       <h2>Ingrese el ID del Cliente que desea actualizar:</h2>

        <label for="id">ID Cliente:</label>
        <input type="text" name="id" id="id">
        <input type="submit" name="buscar" id="buscar" value="Buscar">
 
        <hr>

        <input type="hidden" id="id_clientes" value="<?php if(isset($_POST['buscar']) && isset($_POST['id']) && !empty(['id'])){echo $row['id'];} else{echo "";} ?>">

        <label for="Nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php if(isset($_POST['buscar']) && isset($_POST['id']) && !empty(['id'])){echo $row['nombre'];} else{echo "";} ?>">

        <label for="Apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="<?php if(isset($_POST['buscar']) && isset($_POST['id']) && !empty(['id'])){echo $row['apellido'];} else{echo "";} ?>">

        <label for="Telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono" value="<?php if(isset($_POST['buscar']) && isset($_POST['id']) && !empty(['id'])){echo $row['telefono'];} else{echo "";} ?>">

        <label for="Correo">Correo:</label>
        <input type="text" name="Correo" id="Correo" value="<?php if(isset($_POST['buscar']) && isset($_POST['id']) && !empty(['id'])){echo $row['correo'];} else{echo "";} ?>">

        <label for="Direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" value="<?php if(isset($_POST['buscar']) && isset($_POST['id']) && !empty(['id'])){echo $row['direccion'];} else{echo "";} ?>">

        <label for="Sexo">Sexo:</label>
        <input type="text" name="sexo" id="sexo" value="<?php if(isset($_POST['buscar']) && isset($_POST['id']) && !empty(['id'])){echo $row['sexo'];} else{echo "";} ?>">
        
        <label for="Estado_civil">Estado Civil:</label>
        <input type="text" name="Estado_civil" id="Estado_civil" value="<?php if(isset($_POST['buscar']) && isset($_POST['id']) && !empty(['id'])){echo $row['Estado_civil'];} else{echo "";} ?>">

        <label for="peliculas">Peliculas:</label>
        <input type="text" name="peliculas" id="peliculas" value="<?php if(isset($_POST['buscar']) && isset($_POST['id']) && !empty(['id'])){echo $row['peliculas'];} else{echo "";} ?>">

        <input type="submit" value="Actualizar" name="actualizar" id="actualizar">

        <label for="peliculas">Seleccione el genero que le guste</label>

        <input type="checkbox" name="peliculas[]" value="Accion"> Acción
        <input type="checkbox" name="peliculas[]" value="Terror"> Terror
        <input type="checkbox" name="peliculas[]" value="Drama"> Drama
        <input type="checkbox" name="peliculas[]" value="Ciencia_ficcion"> Ciencia Ficcion

        <input type="submit" name="enviar" id="enviar" value="registrar">
    </form>
    <form action="" method="post">
        
    </form>
    <?php
    $peliculas = "Accion - Terror - Drama - Ciencia_ficcion";

    $cine = explode(' - ', $peliculas);

    var_dump($cine);

    $res = in_array('Accion', $cine);


    ?>
    
</body>
</html>