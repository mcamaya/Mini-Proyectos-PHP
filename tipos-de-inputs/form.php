<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Input</title>
</head>
<body>
    
    <form action="server.php" method="post" enctype="multipart/form-data">
        
        <!-- Input simple -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <br><br>

        <!-- Arreglos -->
        <label for="personas">Personas:</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">

        <br><br><br>

        <!-- Arreglos asociativos -->
        <label for="persona">Nombre: </label>
        <input type="text" name="persona[nombre]">
        <label for="persona">Email: </label>
        <input type="email" name="persona[email]">
        <label for="persona">Edad: </label>
        <input type="number" name="persona[edad]">

        <br><br>

        <!-- Checkbox -->
        <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="CLICKKK">
        <input type="checkbox" name="list3">

        <br><br>

        <!-- Radios -->
        <label for="colombia">Colombia</label>
        <input type="radio" name="pais" value="Colombia_Value" id="colombia">

        <label for="mexico">México</label>
        <input type="radio" name="pais" value="Mexico_Value" id="mexico">

        <label for="peru">Peru</label>
        <input type="radio" name="pais" value="Peru_Value" id="peru">

        <br><br><br>

        <!-- Múltiples archivos -->
        <label for="galeria">Carga tus imágenes</label>
        <input type="file" name="galeria[]" id="galeria" multiple> <!-- importante el atributo 'multiple' -->

        <button type="submit">Enviar</button>
    </form>

</body>
</html>