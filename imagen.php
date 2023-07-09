<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios con PHP y Mysql; subir imagen</title>
</head>
<body>
    <!-- enviar_imagen.php -->
    <form action="enviar_imagen.php" method="post" enctype="multipart/form-data">
        <label for="imagen">Subir imagen</label>
        <input type="file" name="imagen" id="imagen">
        
        <input type="submit" name="subir" id="subir" value="Subir imagen">
    </form>
    
</body>
</html>