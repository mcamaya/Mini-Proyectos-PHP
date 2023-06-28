<?php
require_once '../Conectar.php';
require_once '../models/clienteModel.php';

header ("Content-Type:application/json");

$cliente = new Cliente();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'getAll':
        $datos = $cliente->getClientes();
        echo json_encode($datos, true);
        break;
    
    case 'insert':
        $datos = $cliente->insertCliente($body['nombre'], $body['nit'], $body['representante'], $body['correo'], $body['telefono']);
        echo json_encode('Datos insertados correctamente');
        break;

    default:
        # code...
        break;
}