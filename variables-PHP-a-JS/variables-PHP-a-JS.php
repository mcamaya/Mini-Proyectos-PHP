<?php

$usuarios = array(
    array(
        "id" => 0,
        "nombre" => "Mr. Michi"
    ),
    array(
        "id" => 1,
        "nombre" => "Camilita"
    ),
    array(
        "id" => 2,
        "nombre" => "Juancho Pipe"
    )
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables PHP a JavaScript</title>
</head>
<body>
    
    <script>
        let users = JSON.parse('<?=json_encode($usuarios)?>');
        console.log(users);
    </script>

</body>
</html>