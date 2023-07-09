<?php
/*actualizar, form_actualizar y registrar*/
include("conectar.php");

    /* $registrar = isset($_POST["actualizar"]); */
        $id = $_POST["id_post"];
        $marca = $_POST["marca"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $foto = $_POST["foto"];
        $fotogran = $_POST["fotogran"];
    
    /* if($registrar && $nombre && $apellido && $direccion){

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];

 */
        //conecto con la base de datos
        $link = mysqli_connect($host, $user, $pass, $db) or die("Problemas para conectar con la base de datos");
        //evaluamos la conexión
        if($link){

            echo "Conexión Exitosa!!!";
        }else{

            echo "No pudimos conectar con la base de datos";
        }

        //realizo la consulta de base de datos para insertar los datos

        //$sql = "INSERT INTO datos_clientes (Nombre, Apellido, Direccion, Peliculas) VALUES ('$nombre','$apellido','$direccion', '$peliculas')";

        $sql = "INSERT INTO posteos (Marca, Descripcion, Precio, Foto, Fotogran) VALUES ('$marca','$descripcion','$Precio', '$foto', '$fotogran')";

        echo $sql;
        //Realizo la orden para enviiar los dato

       $result = mysqli_query($link,$sql);

        //evaluamos la consulta a la base de datos

        if($result){
            echo "Datos ingresados correctamente";
        }else{
            echo "problemas para ingresar los datos";
        }

    /* } */

?>