<?php
require_once("../config/Conectar.php");
require_once("../models/Camper.php");

header('Content-Type: application/json');

$camper = new Camper();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']){

    case "GetAll":
        $data = $camper->getCampers();
        echo json_encode($data);
        break;
    
    case "GetId":
        $data = $camper->getCamperID($body['id']);
        echo json_encode($data);
        break;
    
    case "insert":
        $data = $camper->insertCamper($body['id'], $body['imagen'], $body['nombre'], $body['edad'], $body['promedio'], $body['nivelCAmpus'], $body['nivelIngles'],$body['especialidad'], $body['direccion'], $body['celular'], $body['ingles'], $body['Ser'], $body['Review'], $body['Skills'], $body['Asitencia']);
        echo json_encode("Insertado correctamente");
        break;
}