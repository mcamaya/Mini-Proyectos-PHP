<?php
$se_hablo_de_bruno = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>

    <!-- ESTO NO SE DEBE HACER -->
    <h2>ESTO NO SE DEBE HACER </h2>
    <?php
        if($se_hablo_de_bruno){
            echo "<b>😕</b>";
        } else {
            echo "<b>😇</b>";
        }
    ?>

    <!-- Esto es aceptable -->
    <h2>Esto es aceptable</h2>
    <?php if($se_hablo_de_bruno){ ?>

        <b>😕</b>

    <?php } else { ?>

        <b>😇</b>

    <?php } ?>

    <h2>Esto SI deberías hacerlo</h2>
    <?php if($se_hablo_de_bruno): ?>

        <b>😕</b>

    <?php else: ?>

        <b>😇</b>
    
    <?php endif; ?>

</body>
</html>