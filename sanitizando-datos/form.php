<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizando datos</title>
</head>
<body>

    <form action="server.php" method="post">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<div style='background: red;'>Hola, te hackeé</div>">

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="Hackerman'''234">

        <label for="correo">Correo:</label>
        <input type="text" name="correo" id="correo" value="hola()soy@hacker.com">

        <label for="edad">Edad:</label>
        <input type="text" name="edad" id="edad" value="47.95">

        <input type="submit" value="Enviar" name="enviar">
    </form>
    
</body>
</html>