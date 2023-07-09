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
    <form action="login.php" method="post">

        <h2>Area Administrador</h2>

        <label for="user">Nombre de Usuario</label>
        <input type="text" name="user" id="user" placeholder="Nombre de Usuario">
        <label for="pass">Escriba una contraseña</label>
        <input type="password" name="pass" id="pass" placeholder="Ingrese Contraseña">
        
        <input type="submit" value="login" name="login">
    </form>
    </div>
</body>
</html>