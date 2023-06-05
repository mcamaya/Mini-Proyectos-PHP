<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

var_dump(isset($_POST['enviar']));
/* var_dump(validate($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])); */

function validate($name, $email, $subject, $message){
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if(isset($_POST['enviar'])){
    if(validate($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Mandar el correo

        $status = "success";
    } else {
        $status = "danger";
    }
}

var_dump($status);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <?php if($status == "danger"): ?>

            <div class="alert danger">
                <span>Surgió un problema</span>
            </div>

        <?php endif; ?>

        <?php if($status == "success"): ?>

            <div class="alert success">
                <span>Mensaje enviado con éxito</span>
            </div>

        <?php endif; ?>

        <form action="./index.php" method="post">
            <h1>¡Contáctanos!</h1>
    
            <div class="form-info">
                <div class="divinfo">
                <div class="input-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name">
                </div>
        
                <div class="input-group">
                    <label for="email">Correo:</label>
                    <input type="email" name="email" id="email">
                </div>
        
                <div class="input-group">
                    <label for="subject">Asunto:</label>
                    <input type="text" name="subject" id="subject">
                </div>
            </div>
    
            <div class="divmessage">
                <div class="input-group">
                    <label for="message">Mensaje:</label>
                    <textarea name="message" id="message"></textarea>
                </div>
        
                <div class="button-container">
                    <input name="enviar" value="Enviar" type="submit">
                </div>
            
            </div>
            </div>
    
            <div class="contact-info">
                <div class="info">
                    <span>
                        13 Saw Mill Circle, North Olmested
                    </span>
                </div>
                <div class="info">
                    <span>
                        +111 605432995
                    </span>
                </div>
            </div>
    
        </form>
    </main>

</body>
</html>