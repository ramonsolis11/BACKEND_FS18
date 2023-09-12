<?php
//Principio de Responsabilidad Única (SRP): La clase CabeceraPagina tiene una única responsabilidad de manejar las propiedades y la apariencia del título de la página.

class CabeceraPagina {
    private $titulo;
    private $color;
    private $fuente;
    private $apariencia;

    public function __construct($titulo, $color, $fuente) {
        $this->titulo = $titulo;
        $this->color = $color;
        $this->fuente = $fuente;
    }

    public function setApariencia($apariencia) {
        $this->apariencia = $apariencia;
    }

    public function imprimirPropiedades() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Fuente: " . $this->fuente . "<br>";
    }

    public function obtenerAparienciaTitulo() {
        return $this->apariencia;
    }
}

// Ejemplo de uso
$cabecera = new CabeceraPagina("Mi Página", "Azul", "Arial");
$cabecera->setApariencia("centrado");

echo "Apariencia del título: " . $cabecera->obtenerAparienciaTitulo() . "<br>";
$cabecera->imprimirPropiedades();

?>