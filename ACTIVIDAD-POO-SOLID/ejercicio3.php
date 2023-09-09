<?php

/**
 * EJERCICIO 3:
 * 
 * •	Identificar qué principio SOLID se está violando.
 * •	Refactorizar la clase aplicando el principio SOLID que se está violando.
 */

class Persona {
    public function pago(){
        echo "Puede pagar";
    }
}

class Adulto extends Persona {
    public function pago()
    {
        echo "Puede pagar";
    }
}

class Niño extends Persona {
    public function pago()
    {
        echo "No puede pagar, es un niño";
    }
}

$adulto = new Adulto();
$adulto->pago();

$niño = new Niño();
$niño->pago();


?>