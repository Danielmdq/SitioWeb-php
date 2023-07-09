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

        if(isset($_POST["buscar"])&& isset($_POST["id"]) && !empty($_POST["id"])){

            $id = $_POST["id"];

            $link = mysqli_connect($host, $user, $pass, $db) or die("problemas");

            $sql ="SELECT * FROM dbclientes WHERE id = '$id'";

            $result = mysqli_query($link, $sql);

            $row = mysqli_fetch_array($result);

            echo $row["id"]."<br>";
            echo $row["nombre"]."<br>";
            echo $row["apellido"]."<br>";
            echo $row["direccion"]."<br>";

        }else{

            echo "Escriba el id";
        }

    ?>

<form action="form_eliminar.php" method="post">

        <h2>Ingrese el ID del cliente a actualizar:</h2>

        <label for="id">ID del Cliente a Actualizar:</label>
        <input type="text" name="id" id="id" value="">
        
        <input type="submit" value="Buscar" name="buscar" id="buscar"> 

    </form>
        

    <table class="tabla">
        
        <tr>

            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Acciones</th>
            
        </tr>
    
        <?php
         
            if(isset($_POST["buscar"]) && isset($_POST["id"]) && !empty($_POST["id"])){
                   
        ?>
        
            <tr>

                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["apellido"]; ?></td>
                <td><?php echo $row["direccion"]; ?></td>
                
                <td><a class="linkDelete" href="eliminar.php?id=<?php echo $row["id"];?>">Eliminar</a></td>
                
            </tr>
        
        <?php
        
            }
        
        ?>

     </table>

  <script src="confirmar.js"></script> 

</body>
</html>