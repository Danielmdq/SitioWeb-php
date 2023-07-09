<?php 
    include("conectar.php");
    $link = mysqli_connect($host, $user, $pass, $db)or die("problemas");
    if(!$link){
        echo "Problemas";
    }
    $select = "SELECT * FROM novedades";
    
    $result = mysqli_query($link, $select);

    /*

   


        echo "<br>". $row["id_post"]."<br>";
        echo "<br>". ."<br>";
        echo "<br>". $row["Descripcion"]."<br>";
        echo "<br>".  ."<br>";

        echo "<a href='post.php?id=$id'>";
            echo "<img src='". $row["Foto"]."'>";
        echo "</a>";

        echo "<br><hr>";

    }

    */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novedades Sports Mdq</title>
    <link rel="shortcut icon" href="icons/River-Plate-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
    <h1>Novedades sobre los modelos de todas las marcas</h1>
    </header>
    
    <?php include("../sitiodrv/estructura/nav.php") ?>

    <main>

        <section class="galeria">

        <?php

             while($row = mysqli_fetch_array($result)){

                $id = $row["id_post"];
                $marca = $row["Marca"];
                $precio = $row["Precio"];
        
        
        ?>

            <article class="publicaciones">

                
                <h2><?php echo $row["Marca"]; ?></h2>
                <p><?php echo $row["Descripcion"]; ?></p>
                <a href="postnovedades.php?id=<?php echo $id; ?>">
                    <img src="<?php echo $row["Foto"]; ?>">
                </a>
                <p><?php echo $precio; ?></p>
            </article>

        <?php 
        
             }
        ?>

        </section>


    </main>

    <?php include("../sitiodrv/estructura/footer.php") ?>
</body>
</html>