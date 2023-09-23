<?php

require "../clases/Conexion.php";

class Estudiantes extends Conexion{
    protected $id;
    protected $nombre;
    protected $direccion;
    protected $carnet;
    protected $bootcamp;
    protected $estado;

    public function getAll(){
        $pdo = $this->conectar();
        $query = $pdo->query("SELECT * FROM estudiante WHERE id_estado = 1");
        $query->execute();
    }
}


?>