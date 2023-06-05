<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviando Imágenes al Servidor</title>
</head>
<body>
    
    <form action="server.php" method="post" enctype="multipart/form-data">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" name="nombre">

        <label for="img">Imagen:</label>
        <input type="file" name="img" id="img" name="img">

        <button type="submit">Enviar</button>
    </form>

</body>
</html>