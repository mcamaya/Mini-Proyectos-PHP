<?php
require_once '../Conectar.php';


class Cliente extends Conectar {

    public function __construct(){

    }

    public function getClientes(){
        try {
            $conectar = parent::Conexion();
            parent::setNames();
            $stm = $conectar->prepare("SELECT * FROM constructoras");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}