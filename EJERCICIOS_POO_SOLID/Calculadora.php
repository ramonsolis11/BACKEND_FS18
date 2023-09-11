<?php

//Principio de Responsabilidad Única: La clase Calculadora se encarga de realizar operaciones matemáticas, cumpliendo con el principio SRP.


// Clase que se encarga de realizar operaciones matemáticas
class Calculadora {
    public function sumar($num1, $num2) {
        return $num1 + $num2;
    }
    
    public function resta($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiplicacion($num1, $num2) {
        return $num1 * $num2;
    }

    public function division($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Error: división por cero.";
        }
    }
}

// Instanciar la clase Calculadora e invocar sus métodos
$calculadora = new Calculadora();
echo "Suma: " . $calculadora->sumar(5, 3) . "<br>";
echo "Resta: " . $calculadora->resta(10, 2) . "<br>";
echo "Multiplicación: " . $calculadora->multiplicacion(4, 6) . "<br>";
echo "División: " . $calculadora->division(8, 2) . "<br>";


?>