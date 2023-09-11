<?php
//Principio de Responsabilidad Única (SRP): La clase CabeceraPagina tiene una única responsabilidad de manejar las propiedades y la apariencia del título de la página.

// Clase que se encarga de manejar las propiedades y la apariencia del título de la página
class CabeceraPagina {
    private $titulo;
    private $color;
    private $fuente;

    // Método que se encarga de manejar las propiedades del título
    public function obtenerPropiedades($titulo, $color, $fuente) {
        $this->titulo = $titulo;
        $this->color = $color;
        $this->fuente = $fuente;
    }

    // Método que se encarga de manejar la apariencia del título
    public function obtenerAparienciaTitulo($posicion) {
        if ($posicion == "centrado") {
            return "Título centrado";
        } elseif ($posicion == "derecha") {
            return "Título a la derecha";
        } elseif ($posicion == "izquierda") {
            return "Título a la izquierda";
        } else {
            return "Posición de título no válida";
        }
    }

    // Método que se encarga de imprimir las propiedades del título
    public function imprimirPropiedades() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Fuente: " . $this->fuente . "<br>";
    }
}

// Instanciar la clase CabeceraPagina e invocar sus métodos
$cabecera = new CabeceraPagina();
$cabecera->obtenerPropiedades("Mi Página", "Azul", "Arial");
echo "Apariencia del título: " . $cabecera->obtenerAparienciaTitulo("centrado") . "<br>";
$cabecera->imprimirPropiedades();


?>