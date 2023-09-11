<?php
//Principio de Sustitución de Liskov (LSP): podemos sustituir un objeto de la clase Persona con un objeto de la clase Empleado sin cambiar el comportamiento del programa. La clase Empleado hereda correctamente de la clase Persona


// Clase abstracta Persona
abstract class Persona {
    protected $nombre;
    protected $edad;

    // Método abstracto
    public function cargarDatosPersonales($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimirDatosPersonales() {
        echo "Nombre: " . $this->nombre . ", Edad: " . $this->edad . "<br>";
    }
}

// Clase Empleado que hereda de Persona
class Empleado extends Persona {
    private $sueldo;

    public function cargarSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function imprimirSueldo() {
        echo "Sueldo: $" . $this->sueldo . "<br>";
    }
}

// Instanciar un objeto de la clase Empleado
$empleado = new Empleado();
$empleado->cargarDatosPersonales("Mon", 46);
$empleado->cargarSueldo(5000);
$empleado->imprimirDatosPersonales();
$empleado->imprimirSueldo();


?>