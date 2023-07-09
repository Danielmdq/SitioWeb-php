<?php 
    include("conectar.php");
    $link = mysqli_connect($host, $user, $pass, $db)or die("problemas");
    if(!$link){
        echo "Problemas";
    }
    $select = "SELECT * FROM posteos";
    
    $result = mysqli_query($link, $select);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Mdq Sports Mdq </title>
    <link rel="stylesheet" type="text/css" media="all" href="https://www.sportsmdq.com.ar/static">
    <link rel="shortcut icon" href="icons/River-Plate-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>
    <header>
    <h1 style="float: left;">Sports Mdq - Indumentaria deportiva </h1> <li style="float: right;"><a href="form_login.php">Iniciar Admin</a></li>
    
    </header>
    
    <?php include("../sitioweb/estructura/nav.php") ?>

    <main>

        <section class="galeria">
        <?php
$conexion = mysqli_connect("localhost", "root", "", "sitiodrv");
$registro_por_pagina = 3;
$pagina = '';
if(isset($_GET["pagina"]))
{
 $pagina = $_GET["pagina"];
}
else
{
 $pagina = 1;
}

$start_from = ($pagina-1)*$registro_por_pagina;

$query = "SELECT * FROM posteos LIMIT $start_from, $registro_por_pagina";
$result = mysqli_query($conexion, $query);

?>
        <?php

             while($row = mysqli_fetch_array($result)){

                $id = $row["id_post"];
                $marca = $row["Marca"];
                /* $precio = $row["Precio"]; */
        
        
        ?>

            <article class="publicaciones">

                
                <h2><?php echo $row["Marca"]; ?></h2>
                <p><?php echo $row["Descripcion"]; ?></p>
                <a href="post.php?id=<?php echo $id; ?>">
                    <img src="<?php echo $row["Foto"]; ?>">
                </a>
                <p> <?php /* echo $precio; */ ?> </p>

            </article>

        <?php 
        
             }
        ?>
        <?php
    $page_query = "SELECT * FROM posteos";
    $page_result = mysqli_query($conexion, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$registro_por_pagina);
    $start_loop = $pagina;
    $diferencia = $total_pages - $pagina;
    if($diferencia <= 3)
    {
     $start_loop = $total_pages - 3;
    }
    $end_loop = $start_loop + 2;
    if($pagina > 1)
    {
     echo "<a class='pagina' href='index.php?pagina=1'>Primera</a>";
     echo "<a class='pagina' href='index.php?pagina=".($pagina - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a class='pagina' href='index.php?pagina=".$i."'>".$i."</a>";
    }
    if($pagina <= $end_loop)
    {
     echo "<a class='pagina' href='index.php?pagina=".($pagina + 1)."'>>></a>";
     echo "<a class='pagina' href='index.php?pagina=".$total_pages."'>Última</a>";
    }
    
    
    ?>
        </section>


    </main>

    <?php include("../sitiodrv/estructura/footer.php") ?>

<script src="js/app.js"></script>
</body>
</html>