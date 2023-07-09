<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios con PHP: formulario para actualizar datos mediante ID</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
        <?php
        /*actualizar, form_actualizar y registrar*/
        include("conectar.php");

        if(isset($_POST["buscar"]) && isset($_POST["id_post"]) && !empty($_POST["id_post"])){
            $id = $_POST["id_post"];

            $link = mysqli_connect($host, $user, $pass, $db) or die("Problemas para conectar");

            if($link){
                echo "Conexion exitosa!!!";
            }else{
                echo "Problemas para conectar";
            }
            $select = "SELECT * FROM posteos WHERE id_post = '$id'";

            $result = mysqli_query($link, $select);

            $row = mysqli_fetch_array($result);

            echo $row["id_post"] . "<br>";
            echo $row["Marca"]. "<br>";
            echo $row["Descripcion"] . "<br>";
            echo $row["Precio"] . "<br>";
            echo $row["Foto"] . "<br>";
            echo $row["Fotogran"] . "<br>";
        } 
        ?>
        <form action="form_actualizar.php" method="post">
        
        <h2>Ingrese el ID del dato que desea actualizar:</h2>

        <label for="id">ID datos: </label>
        <input type="text" name="id_post" id="id_post" value="<?php if(isset($_POST["buscar"]) && isset($_POST["id_post"]) && !empty($_POST["id_post"])){echo $row["id_post"];} else{echo "";} ?>">

        <input type="submit" value="Buscar" name="buscar" id="buscar">

    </form>

    <form action="actualizar.php" method="post">
        
        <hr>

        <input type="hidden" name="id_post" id="id_post" value="<?php if(isset($_POST['buscar']) && isset($_POST['id_post']) && !empty(['id_post'])){echo $row['id_post'];} else{echo "";} ?>">

        <label for="marca">Marca: </label>
        <input type="text" name="marca" id="marca" value="<?php if(isset($_POST['buscar']) && isset($_POST['id_post']) && !empty(['id_post'])){echo $row['Marca'];} else{echo "";} ?>">

        <label for="descripcion">Descripcion: </label>
        <input type="text" name="descripcion" id="descripcion" value="<?php if(isset($_POST['buscar']) && isset($_POST['id_post']) && !empty(['id_post'])){echo $row['Descripcion'];} else{echo "";} ?>">

        <label for="precio">Precio: </label>
        <input type="text" name="precio" id="precio" value="<?php if(isset($_POST['buscar']) && isset($_POST['id_post']) && !empty(['id_post'])){echo $row['Precio'];} else{echo "";} ?>">

        <label for="foto">Foto: </label>
        <input type="text" name="foto" id="foto" value="<?php if(isset($_POST['buscar']) && isset($_POST['id_post']) && !empty(['id_post'])){echo $row['Foto'];} else{echo "";} ?>">

        <label for="fotogran">Fotogran: </label>
        <input type="text" name="fotogran" id="fotogran" value="<?php if(isset($_POST['buscar']) && isset($_POST['id_post']) && !empty(['id_post'])){echo $row['Fotogran'];} else{echo "";} ?>">

        <input type="submit" value="Actualizar" name="actualizar" id="actualizar">


    </form>


</body>
</html>