
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escritorio - Sistema de Usuarios</title>
    <link rel="shortcut icon" href="icons/River-Plate-icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body> <!-- Inicio sesion -->
<header class="header">
        <h2 class="name"><b>Programador:</b> <?php
session_start();

$sesion = $_SESSION["usuario"];

if($sesion == null || $sesion == ""){
    echo "Inicie sesión para acceder a este panel";
    die();
}else{
    echo "<a><span> $sesion</span></a>";
}
?>
        </h2>    
    </header>
    <!-- fin inicio sesion -->
        <nav class="barleft">
                <li>
                    <a href="cerrar_sesion.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
</svg>
                        <span>Salir</span>
                    </a>
                </li>
            </ul>
            <td> <a href='form_registroinfo.php'><button type='button' class='btn btn-success'>Insertar</button></a></td>
        </nav>
        <!-- fin navegador -->
        <div class="centrar">
<table>
    <tr>
    <td><b>id</b></td>
    <td><b>Marca</b></td>
    <td><b>Descripcion</b></td>
    <td><b>Precio</b></td>
    <td><b>Foto</b></td>
    <td><b>Fotogran</b></td>
    <!-- <td><b>Create</b></td> -->
    <td><b>Update</b></td>
    <td><b>Delete</b></td>
    </tr>
<?php
include("conectar.php");
$conex = mysqli_connect($host, $user, $pass, $db);
$consulta = "SELECT * FROM posteos";
$resultado = mysqli_query($conex,$consulta);

while($filas=mysqli_fetch_array($resultado))
{     

echo "<tr>";
echo "<td> $filas[id_post] </td>";
echo "<td> $filas[Marca] </td>";
echo "<td> $filas[Descripcion] </td>";
echo "<td> $filas[Precio] </td>";
echo "<td> $filas[Foto] </td>";
echo "<td> $filas[Fotogran]</td>";

/* echo "<td> <a href='form_registroinfo.php'><button type='button' class='btn btn-success'>Insertar</button></a></td>"; */
echo "<td> <a href='form_actualizar.php?id_post=".$filas['id_post']."'><button type='button' class='btn btn-success'>Modificar</button></a></td>";
echo "<td> <a href='form_eliminar_posteos.php?id_post=".$filas['id_post']."'><button type='button' class='btn btn-danger'>Eliminar</button></a></td><br>";

echo "</tr>";
}
?>     
</table>   
        </div>
    

<?php include("piedepagina.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>