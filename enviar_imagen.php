<?php
include("conectar.php");

if(isset($_POST["subir"]) && isset($_FILES["imagen"])){
    $nombre_imagen = $_FILES["imagen"]["name"];
    $tipo_imagen = $_FILES["imagen"]["type"];
    $tamagno_imagen = $_FILES["imagen"]["size"];
    $temporal = $_FILES["imagen"]["tmp_name"];
    $destino = 'img/';

    $ruta = $destino.$nombre_imagen;

    if($tamagno_imagen<=3000000){

        if($tipo_imagen == 'image/jpeg' || $tipo_imagen == 'image/jpg' || $tipo_imagen == 'image/png' || $tipo_imagen == 'image/gif'){

    echo $nombre_imagen."<br>";
    echo $tipo_imagen."<br>";
    echo $tamagno_imagen."<br>";
    echo $temporal."<br>";
//Funcion move_uploaded_file que nos permite pasar archivos al servidor
    move_uploaded_file($temporal, $destino.$nombre_imagen);

    $conex = mysqli_connect($host, $user, $pass, $db) or die("problemas para conectar");

    $consulta = "INSERT INTO posteos (Foto) VALUES ('$ruta')";

    $regresa = mysqli_query($conex, $consulta);

    if($regresa){
        echo"Imagen insertada correctamente";

        $solar = "SELECT Foto FROM posteos WHERE Foto = '$ruta'";

        $resultado = mysqli_query($conex, $solar);

        $row = mysqli_fetch_array($resultado);

        $foto = $row["Foto"];

        echo "<br><br>";

        echo "<img src=\"$foto\">";

    }else{
        echo"Problemas para insertar imagen";
    }

        }else{echo"Formato no permitido";}
    
    }else{echo"Imagen excede limite permitido";}
    
    
}
?>