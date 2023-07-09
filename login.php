<?php
include("conectar.php");
session_start();

if(isset(($_POST["login"])) && isset($_POST["user"]) && isset($_POST["pass"])){
    $usuario = $_POST["user"];
    $password = $_POST["pass"];
//conectar a la db
    $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas al conectar con db");
//validar
    if($link){
        echo "Conexion exitosa <br>";
    }else{
        echo "Problemas al conectar con la db";
    }
//Consulta a la db para comparar usuario y contraseña 
    $consulta = "SELECT * FROM administrador WHERE Nombre = '$usuario' AND Clave = '$password'";

    $result = mysqli_query($link, $consulta);

    $num_rows = mysqli_num_rows($result);//numero de lineas

    echo "$num_rows";

    echo"<br><br>";

    if($num_rows == 1){
        $_SESSION['usuario']=$usuario;
        header("location: panel_adm.php");
    }else{
        $error = 0;
        header("location: backend.php?error=$error");
    }
}
?>
