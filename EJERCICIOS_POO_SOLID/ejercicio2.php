//Principio de Segregación de Interfaces (ISP): La interfaz Persona define un único método hablar, cumpliendo con el principio ISP.

//interfaz: es un contrato que se establece entre dos partes, en este caso entre la clase y la interfaz
//la interfaz es un contrato que se establece entre la clase y la interfaz

//clases: abuelo, padre
//interfaz: persona

//la interfaz persona define un único método hablar
//la clase abuelo implementa la interfaz persona
//la clase padre implementa la interfaz persona

<?php

// Definición de la interfaz Persona con un único método hablar
interface Persona {
    public function hablar();
}

// Clase Abuelo que implementa la interfaz Persona
class Abuelo implements Persona {
    public function hablar() {
        return "Soy el Abuelo y estoy hablando.";
    }
}

// Clase Padre que implementa la interfaz Persona
class Padre implements Persona {
    public function hablar() {
        return "Soy el Padre y estoy hablando.";
    }
}

// Instanciar una de las clases e invocar el método hablar
$abuelo = new Abuelo();
$resultadoAbuelo = $abuelo->hablar();

echo $resultadoAbuelo . "<br>";

$padre = new Padre();
$resultadoPadre = $padre->hablar();

echo $resultadoPadre . "<br>";

?>
