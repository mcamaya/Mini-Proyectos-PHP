<?php

class Conectar {
    protected $db;

    protected function Conexion(){
        try {
            $conectar = $this->db = new PDO("mysql:host=localhost;dbname=alquilartemis", "campus", "campus2023");
            return $conectar;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function setNames(){
        return $this->db->query("SET NAMES 'UTF8'");
    }
}