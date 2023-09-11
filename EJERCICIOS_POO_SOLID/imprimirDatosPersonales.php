<?php
//Principio de Encapsulación (Encapsulation): La clase Persona encapsula los datos y los métodos que operan sobre ellos. Los datos son privados y solo pueden ser accedidos a través de los métodos públicos de la clase.

// Clase abstracta Persona
class Persona {
    private $nombre;
    private $edad;

    // Método abstracto
    public function cargarDatosPersonales($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método que imprime los datos personales
    public function imprimirDatosPersonales() {
        echo "Nombre: " . $this->nombre . ", Edad: " . $this->edad . "<br>";
    }

    // Métodos para acceder y modificar la edad
    public function obtenerEdad() {
        return $this->edad;
    }

    // Método para modificar la edad
    public function modificarEdad($nuevaEdad) {
        $this->edad = $nuevaEdad;
    }
}

// Clase Empleado que hereda de Persona
class Empleado extends Persona {
    private $sueldo;

    // Método para cargar el sueldo
    public function cargarSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    // Método para imprimir el sueldo
    public function imprimirSueldo() {
        echo "Sueldo: $" . $this->sueldo . "<br>";
    }
}

// Instanciar un objeto de la clase Empleado
$empleado = new Empleado();
$empleado->cargarDatosPersonales("Juan", 30);
$empleado->cargarSueldo(5000);

// Intentar modificar la edad
$empleado->modificarEdad(35);

// Imprimir los datos personales y el sueldo
$empleado->imprimirDatosPersonales();
$empleado->imprimirSueldo();



?>