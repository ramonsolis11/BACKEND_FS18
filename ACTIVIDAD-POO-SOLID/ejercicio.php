<?php

/**
 * EJERCICIO 1: Cada cierto mes en un banco a los empleados se les agrega un bono a su sueldo en base al tipo de cargo que desempeña, en base como se codifico la clase se te pide:
 * 
 * •	Identificar que principio SOLID se está violando.
 * •	Refactorizar la clase aplicando el principio SOLID que se está violando.
 */

// Clase abstracta para el cálculo de bonos
abstract class BonoCalculator {
    abstract public function calcularBono($sueldo);
}

// Implementación de calculadoras de bonos para cada cargo
class CajeroBonoCalculator extends BonoCalculator {
    public function calcularBono($sueldo) {
        return $sueldo + 150;
    }
}

class AsesorComercialBonoCalculator extends BonoCalculator {
    public function calcularBono($sueldo) {
        return $sueldo + 225;
    }
}

class GerenteBonoCalculator extends BonoCalculator {
    public function calcularBono($sueldo) {
        return $sueldo + 300;
    }
}

// Clase para gestionar el bono
class GestionBonos {
    public $nombre_empleado;
    public $sueldo;
    public $cargo;
    public $bonoCalculator;

    public function __construct($nombre, $sueldo, $cargo)
    {
        $this->nombre_empleado = $nombre;
        $this->sueldo = $sueldo;
        $this->cargo = $cargo;

        // Asignar la calculadora de bonos correspondiente al cargo
        switch ($cargo) {
            case "Cajero":
                $this->bonoCalculator = new CajeroBonoCalculator();
                break;
            case "Asesor Comercial":
                $this->bonoCalculator = new AsesorComercialBonoCalculator();
                break;
            case "Gerente":
                $this->bonoCalculator = new GerenteBonoCalculator();
                break;
            default:
                throw new Exception("Ingrese correctamente el cargo");
        }
    }

    public function agregarBono() {
        $total = $this->bonoCalculator->calcularBono($this->sueldo);
        echo "Usted, $this->nombre_empleado recibió un bono, su sueldo a pagar este mes es de $" . $total;
    }
}

// Ejemplo de uso
$bono = new GestionBonos("Juanita Rivera", 450, "Cajero");
$bono->agregarBono();


?>