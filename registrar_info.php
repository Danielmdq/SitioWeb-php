<?php
    include("conectar.php");

        /* $id = $_POST["id_post"]; */
        $marca = $_POST["marca"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $foto = $_POST["foto"];
        $fotogran = $_POST["fotogran"];
        
            $link = mysqli_connect($host, $user, $pass, $db) or die("Problemas para conectar");

                if(!$link){
                echo "Problemas para conectar con la base de datos";
                }
            echo"hola";
            $select = "SELECT * FROM posteos WHERE id_post = '', Marca = '$marca', Descripcion = '$descripcion', Precio = '$precio', Foto = '$foto', Fotogran = '$fotogran' ";
            $result = mysqli_query($link, $select);
                
                    //si el usuario no existe, lo registramos
                $registrarUsuario = "INSERT INTO posteos (id_post, Marca, Descripcion, Precio, Foto, Fotogran) VALUES ('', '$marca', '$descripcion', '$precio', '$foto', '$fotogran')";
                
                $result = mysqli_query($link, $registrarUsuario);

                if(!$result){
                    echo "problemas para registrar el usuario";
                    exit();
                }
                                    
                    echo "<br><br> $registrarUsuario";
                
                    echo"hola"; 
?>