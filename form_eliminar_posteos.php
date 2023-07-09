<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabla{
            border:1px solid #ccc;
            padding: 5px;
            margin:50px auto;
        }

        th{
            background-color: #333;
            border:1px solid #ccc;
            padding: 10px;
            color:aqua;
        }

        td{
            padding: 10px;
            border:1px solid #ccc;
            color:#333;
        }

    </style>
</head>
<body>
    <?php
        include("conectar.php");

        if(isset($_POST["buscar"])&& isset($_POST["id_post"]) && !empty($_POST["id_post"])){

            $id = $_POST["id_post"];

            $link = mysqli_connect($host, $user, $pass, $db) or die("problemas");

            $sql ="SELECT * FROM posteos WHERE id_post = '$id'";

            $result = mysqli_query($link, $sql);

            $row = mysqli_fetch_array($result);

            echo $row["id_post"]."<br>";
            echo $row["Marca"]."<br>";
            echo $row["Descripcion"]."<br>";
            echo $row["Precio"]."<br>";
            echo $row["Foto"]."<br>";
            echo $row["Fotogran"]."<br>";

        }else{

            echo "Escriba el id";
        }

    ?>

<form action="form_eliminar_posteos.php" method="post">

        <h2>Ingrese el ID del cliente a eliminar:</h2>

        <label for="id">ID del Cliente a eliminar:</label>
        <input type="text" name="id_post" id="id_post" value="">
        
        <input type="submit" value="Buscar" name="buscar" id="buscar"> 

    </form>
        

    <table class="tabla">
        
        <tr>

            <th>id</th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Foto</th>
            <th>Fotogran</th>
            
        </tr>
    
        <?php
         
            if(isset($_POST["buscar"]) && isset($_POST["id_post"]) && !empty($_POST["id_post"])){
                   
        ?>
        
            <tr>

                <td><?php echo $row["id_post"]; ?></td>
                <td><?php echo $row["Marca"]; ?></td>
                <td><?php echo $row["Descripcion"]; ?></td>
                <td><?php echo $row["Precio"]; ?></td>
                <td><?php echo $row["Foto"]; ?></td>
                <td><?php echo $row["Fotogran"]; ?></td>
                
                <td><a class="linkDelete" href="eliminar.php?id_post=<?php echo $row["id_post"];?>">Eliminar</a></td>
                
            </tr>
        
        <?php
        
            }
        
        ?>

     </table>

  <script src="../sitiodrv/js/confirmar.js"></script> 

</body>
</html>