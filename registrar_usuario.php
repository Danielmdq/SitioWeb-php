<?php
    include("conectar.php");

    if(isset($_POST["registrar"])&& isset($_POST["user"])&& isset($_POST["pass"]) && isset($_POST["pass2"])){

        function validar($datos){

            $datos = trim($datos);
            $datos = addslashes($datos);
            $datos = htmlentities($datos);
            return $datos;

        }

        $usuario = validar($_POST["user"]);

        $password = validar($_POST["pass"]);

        $password2 = validar($_POST["pass2"]);
        
        echo $usuario ."<br>";
        echo $password ."<br>";
        echo $password2 ."<br>";

//validamos que no este vacio los campos de usuario, password y password2
        if(empty($usuario)){

            header("location:form_registro.php?error=El usuario es requerido");
            exit();
        }else if(empty($password)){

            header("location:form_registro.php?error=La contraseña es requerida");
            exit();

        }else if(empty($password2)){

            header("location:form_registro.php?error=Debe repetir la contraseña");
            exit();

        }else if($password != $password2){

            header("location:form_registro.php?error=Las contraseñas no coinciden, vuelva a ingresar las contraseñas");
            exit();

        }else{

            $link = mysqli_connect($host, $user, $pass, $db) or die("Problemas para conectar");

                if(!$link){
                echo "Problemas para conectar con la base de datos";
                }
//tanto usuario y contraseña deben coincidir
            
            $select = "SELECT * FROM usuarios WHERE usuario = '$usuario', contrasena = $password";
            $result = mysqli_query($link, $select);
            
                if(mysqli_num_rows($result)>0){

                $row = mysqli_fetch_array($result);
//$row ['es lo que trae de la db'] en este caso "usuario"
                if($row['usuario'] === $usuario){
                    
                    header("location:form_registro.php?error=El usuario elegido ya existe, seleccione otro nombre de usuario");
                    exit();

                }else{
                    //si el usuario no existe, lo registramos
                $registrarUsuario = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$password')";
                
                 $result2 = mysqli_query($link, $registrarUsuario);
                
                if(!$result2){
                    echo "problemas para registrar el usuario";
                    exit();
                }
                    header("location:form_registro.php?confirm=El usuario ha sido registrado con exito");
                    exit();
                    
                    echo "<br><br> $registrarUsuario";
                }
                
        }
        
    }

}

?>