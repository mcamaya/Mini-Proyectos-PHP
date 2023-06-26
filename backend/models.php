<?php
require_once 'conectar.php';

class Alquiler extends Conectar {
    private $conectar;

    public function __construct($conectar=""){
        $this->conectar = parent::Conexion();
        parent::setName();
    }

    public function getClientes(){
        try {
            $stm = $this->conectar->prepare("SELECT * FROM constructoras");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function insertClientes($nombre, $nit, $representante, $email, $telefono){
        try {
            $stm = $this->conectar->prepare("INSERT INTO constructoras (nombre_constructora, nit_constructora, nombre_representante, email_contacto, telefono_contacto) VALUES (?,?,?,?,?,?)");
            $stm->execute([$nombre, $nit, $representante, $email, $telefono]);

            /* $stm->bindValue(1, $nombre);
            $stm->bindValue(2, $nit);
            $stm->bindValue(3, $representante);
            $stm->bindValue(4, $email);
            $stm->bindValue(5, $telefono); */

            $stm->execute();
            $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}