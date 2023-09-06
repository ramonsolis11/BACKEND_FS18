<?php

// Definición de la clase "Planilla"
class Planilla {
    // Atributos públicos, protegidos y privados
    public $nombre;
    public $cargo;
    protected $sueldo_bruto;
    private $isss;
    private $afp;
    private $renta;
    protected $sueldo_neto;

    // Constructor de la clase
    public function __construct($nombre, $cargo, $sueldo) {
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->sueldo_bruto = $sueldo;
    }

    // Método para calcular las deducciones
    public function calcularDeducciones() {
        if ($this->sueldo_bruto >= 500) {
            $this->renta = $this->sueldo_bruto * 0.10;
            $this->afp = $this->sueldo_bruto * 0.0775;
            $this->isss = $this->sueldo_bruto * 0.0725;

            $this->sueldo_neto = $this->sueldo_bruto - ($this->renta + $this->afp + $this->isss);
            return $this->sueldo_neto;
        } else {
            $this->renta = 0;
            $this->afp = $this->sueldo_bruto * 0.0775;
            $this->isss = $this->sueldo_bruto * 0.0725;

            $this->sueldo_neto = $this->sueldo_bruto - ($this->afp + $this->isss);
            return $this->sueldo_neto;
        }
    }

    // Método para obtener la información del empleado
    public function informacion() {
        return "<b>Empleado: </b> $this->nombre<br><b>Cargo: </b> $this->cargo<br><b>Sueldo Bruto: </b> $this->sueldo_bruto<br><b>Deduccion AFP: </b> $this->afp<br><b>Deduccion ISSS: </b> $this->isss<br><b>Deduccion de renta: </b> $this->renta<br><b>Sueldo Neto: </b> $this->sueldo_neto<br>";
    }
}

// Creación y uso de objetos de la clase "Planilla"
// $persona1 = new Planilla("Kevin Hernandez", "Abogado", 1000);
// $persona1->calcularDeducciones();
// echo $persona1->informacion();

// echo "<br><br>";

// $persona2 = new Planilla("Maria Perez", "Ingeniero", 400);
// $persona2->calcularDeducciones();
// echo $persona2->informacion();

?>

