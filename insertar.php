<?php
include("conectar.php");

// me conecto con la db
$link = mysqli_connect($host, $user, $pass, $db);
//validar
if(!mysqli_connect_errno()){
    echo "Conexion exitosa!!!.<br>";
    //insertar datos de forma directa
    $sql = "INSERT INTO usuarios VALUES ('MariaBelen', '123456')";
    $regreso = mysqli_query($link, $sql); //conexion y consulta
//validar
    if($regreso) {
        echo "Registro insertado con exito.<br>";
    }else{
        echo "Ocurrio un error en la insercion.<br>";
    }
}else{
    echo "Error en la conexion: " . mysqli_connect_errno() . "<br>";
}

?>