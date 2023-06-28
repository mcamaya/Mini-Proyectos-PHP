<?php
require_once '../Conectar.php';


class Cliente extends Conectar {
    private $conectar;

    public function __construct(){
        $this->conectar = parent::Conexion();
        parent::setNames();
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

    public function insertCliente($nombre, $nit, $representante, $correo, $telefono){
        try {
            $stm = $this->conectar->prepare("INSERT INTO constructoras (nombre_constructora, nit_constructora, nombre_representante, email_contacto, telefono_contacto) VALUES (?,?,?,?,?)");
            /* $stm->execute([$nombre, $nit, $representante, $correo, $telefono]); */

            $stm -> bindValue(1, $nombre);
            $stm -> bindValue(2, $nit);
            $stm -> bindValue(3, $representante);
            $stm -> bindValue(4, $correo);
            $stm -> bindValue(5, $telefono);

            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function updateCliente($id, $nombre, $nit, $representante, $correo, $telefono){
        try {
            $stm = $this->conectar->prepare("UPDATE constructoras SET nombre_constructora = ?, nit_constructora = ?, nombre_representante = ?, email_contacto = ?, telefono_contacto = ? WHERE id_constructora = ?");

            $stm -> bindValue(1, $nombre);
            $stm -> bindValue(2, $nit);
            $stm -> bindValue(3, $representante);
            $stm -> bindValue(4, $correo);
            $stm -> bindValue(5, $telefono);
            $stm -> bindValue(6, $id);

            $stm->execute();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}