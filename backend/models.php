<?php
require_once 'conectar.php';

class Alquiler extends Conectar {

    public function getClientes(){
        try {
            $conectar = parent::Conexion();
            parent::setName();

            $stm = $conectar->prepare("SELECT * FROM constructoras");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}