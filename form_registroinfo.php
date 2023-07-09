<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios con formularios de registros</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="form">
    <form action="registrar_info.php" method="post">
        
        <h2>Formulario de registro de datos</h2>

        <!-- <label for="id_post">Id</label>
        <input type="text" name="id_post" placeholder="id_post"> -->
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" placeholder="Marca">
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion">
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio" placeholder="Precio">
        <label for="foto">Foto</label>
        <input type="text" name="foto" id="foto" placeholder="Foto">
        <label for="fotogran">Fotogran</label>
        <input type="text" name="fotogran" id="fotogran" placeholder="Fotogran">
        
        <input type="submit" value="registrar informacion" name="registrar">
    </form>
    </div>
</body>
</html>