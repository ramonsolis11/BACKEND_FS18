<?php
require './figura.php';

class Circulo extends Figura {
    public $radio;

    public function calcularArea() {
        $area = pi() * pow($this->radio, 2);
        return "<div class='alert alert-primary' role='alert'>
                    El área del círculo es " . number_format($area, 2) . "
                </div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Circulo = new Circulo();
    $Circulo->radio = $_POST['radio'];
    $resultado = $Circulo->calcularArea();
};

if (isset($resultado)) {
    echo $resultado;
};

?>