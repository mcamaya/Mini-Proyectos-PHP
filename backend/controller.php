<?php

header("Content-Type:application/json");

require_once 'conectar.php';
require_once 'models.php';

$alquiler = new Alquiler();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'getAll':
        $datos = $alquiler->getClientes();
        echo json_encode($datos, true);
        break;
    
    case 'insertData':
        $datos = $alquiler->insertClientes($body['nombre'], $body['nit'], $body['representante'], $body['email'], $body['telefono']);
        echo json_encode("Datos insertados con éxito");
        break;

    default:
        # code...
        break;
}