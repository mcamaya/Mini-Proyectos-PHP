<?php

class Conectar {
    protected $db;
    protected function Conexion(){
        try {
            $conectar = $this->db = new PDO("mysql:host=localhost;dbname=alquilartemis2", "campus", "campus2023");
            return $conectar;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function setName(){
        return $this->db->query("SET NAMES 'UTF8'");
    }
}