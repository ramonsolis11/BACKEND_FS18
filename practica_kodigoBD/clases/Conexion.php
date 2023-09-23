<?php

class Conexion{

    public function conectar(){
        //then we create the connection
        //catch the error if there is one
        try{
            $conexion = "mysql:host=localhost;dbname=practica_kodigo_fsj18;charset=utf8"; 
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($conexion, "root", "", $opciones);
            return $pdo;

        }catch(PDOException $e){
            echo "Error de Conexion: ".$e->getMessage();
            exit();
        }
    }
}

?>
