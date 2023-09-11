<!-- Responsabilidad Única (SRP): La clase ImprimirDinero se encarga de imprimir la información del dinero, cumpliendo con el principio SRP. -->


<!-- Open/Closed (OCP): La clase Hijo extiende de Padre, sin modificar clases existentes, cumpliendo con el principio OCP. -->


<?php

// Clase que se encarga de imprimir la información del dinero
class ImprimirDinero {
    public static function imprimir($persona, $dinero) {
        echo "El dinero de " . $persona . " es: " . $dinero . "<br>";
    }
}

// Clase Abuelo que representa a la persona mayor
class Abuelo {
    private $dinero;

    public function __construct($dinero) {
        $this->dinero = $dinero;
    }

    public function getDinero() {
        return $this->dinero;
    }
}

// Clase Padre que hereda de Abuelo, cumpliendo con el principio de herencia y extensión
class Padre extends Abuelo {
    public function __construct($dinero) {
        parent::__construct($dinero);
    }
}

// Clase Hijo que también hereda de Padre, extendiendo el sistema sin modificar clases existentes (OCP)
class Hijo extends Padre {
    public function __construct($dinero) {
        parent::__construct($dinero);
    }
}

echo "Clase Abuelo <br>";
$abuelo = new Abuelo(100);
ImprimirDinero::imprimir("Abuelo", $abuelo->getDinero());

echo "Clase Padre <br>";
$padre = new Padre(200);
ImprimirDinero::imprimir("Padre", $padre->getDinero());

echo "Clase Hijo <br>";
$hijo = new Hijo(50);
ImprimirDinero::imprimir("Hijo", $hijo->getDinero());

?>

