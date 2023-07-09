<?php
    include("conectar.php");
    if(isset($_GET["id"])){

        $id =$_GET["id"];
    
        $link = mysqli_connect($host, $user, $pass, $db)or die("problemas");
        if(!$link){
            echo "Problemas";
        }
        $select = "SELECT * FROM mujer WHERE id_post = '$id'";
        $result = mysqli_query($link, $select);        

        $row = mysqli_fetch_array($result);

            $id = $row["id_post"];
            $marca = $row["Marca"];
            $precio = $row["Precio"];
            

            /*
            echo "<br>". $row["id_post"]."<br>";
            echo "<br>". $row["Marca"]."<br>";
            echo "<br>". $row["Descripcion"]."<br>";
            echo "<br>". $precio ."<br>";

            
            echo "<img src='". $row["Fotogran"]."'>";
            */
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<?php 
    
    include("../sitiodrv/estructura/nav.php");

?>
   

    <main>

        <section class="galeria">

        <article class="publicacion">

                <h2><?php echo $row["Marca"]; ?></h2>
                <p><?php echo $row["Descripcion"]; ?></p>
                <img src="<?php echo $row["Fotogran"]; ?>">
                <p><?php echo $row["Precio"]; ?></p>

        </article>

        </section>


    </main>

    <?php 
    
        include("footer.php");
    
    ?>
    
</body>
</html>

<?php 

    }
?>