<?php
//Principio de Sustitución de Liskov (LSP): La clase Empleado hereda de la clase Persona y sobrescribe el método imprimirDatosPersonales, agregando información adicional. Esto permite que un objeto de la clase Empleado se utilice en lugar de un objeto de la clase Persona sin cambiar el comportamiento del programa.


// Clase abstracta Persona
class Persona {
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

    public function imprimirDatosPersonales() {
        parent::imprimirDatosPersonales();
        echo "Sueldo: $" . $this->sueldo . "<br>";
    }
}

// Instanciar un objeto de la clase Empleado
$persona = new Persona();
$persona->cargarDatosPersonales("Ana", 25);
$persona->imprimirDatosPersonales();

// Instanciar un objeto de la clase Empleado
$empleado = new Empleado();
$empleado->cargarDatosPersonales("Mon", 46);
$empleado->cargarSueldo(5000);
$empleado->imprimirDatosPersonales();


?>