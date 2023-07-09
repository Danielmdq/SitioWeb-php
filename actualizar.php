<?php
/*actualizar, form_actualizar y registrar*/
    include("conectar.php");
    
    if(isset($_POST["id_post"]) && !empty($_POST["id_post"])){

        $id = $_POST["id_post"];
        $marca = $_POST["marca"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $foto = $_POST["foto"];
        $fotogran = $_POST["fotogran"];
        
        $link = mysqli_connect($host, $user, $pass, $db) or die("Problemas para conectar con la base de datos");

        if($link){
            echo "Conexión exitosa!!!";
        }

        $sql = "UPDATE posteos SET id_post = '$id', Marca = '$marca', Descripcion = '$descripcion', Precio = '$precio', Foto = '$foto', Fotogran = '$fotogran' WHERE id_post = '$id'";

        $result = mysqli_query($link, $sql);

        if($result){

            echo "Datos actulizados correctamente";
            
        }else{

            echo "Problemas para actualizar los datos";
        }

    }
?>