<?php

class Conectar {
    protected $db;

    protected function Conexion(){
        try {
            $conectar = $this->db = new PDO("mysql:host=localhost;dbname=alquilartemis", "root", "");
            return $conectar;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function setNames(){
        return $this->db->query("SET NAMES 'UTF8'");
    }
}