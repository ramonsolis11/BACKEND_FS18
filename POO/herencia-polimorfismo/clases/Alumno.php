<?php
require "../clases/Kodigo.php";

class Alumno extends Kodigo {
    protected $bootcamp;
    protected $tipoPago;
    public $nota;

    public function __construct($nombre, $correo, $academia, $nivel_academico, $bootcamp, $tipoPago, $nota) {
        parent::__construct($nombre, $correo, $academia, $nivel_academico);
        $this->bootcamp = $bootcamp;
        $this->tipoPago = $tipoPago;
        $this->nota = $nota;
    }

    // Método para obtener la información del alumno
    public function obtenerInfo() {
        return "Informacion del alumno<br>Nombre completo: $this->nombre<br>Correo electronico: $this->correo<br>Academia: $this->academia<br>Nivel academico: $this->nivel_academico<br>Bootcamp: $this->bootcamp<br>Tipo de pago: $this->tipoPago<br>Nota: $this->nota";
    }

    // Método para generar mensajes de estado
    public function mensajeEstado($valor, $verdadero, $falso) {
        return $valor ? "<div class='alert alert-primary text-center text-primary' role='alert'>$verdadero</div>" : "<div class='alert alert-danger text-center' role='alert'>$falso</div>";
    }

    // Método para determinar si el alumno aprobó el bootcamp
    public function AproboBootcamp() {
        $mensajeAprobacion = $this->nota >= 7 ? "Felicidades pasaste el bootcamp, $this->nombre" : "Lastimosamente no pasaste el bootcamp, suerte para la proxima";
        return $this->mensajeEstado($this->nota >= 7, $mensajeAprobacion, $mensajeAprobacion);
    }

    // Método para mostrar el tipo de pago del bootcamp
    public function TipoPagoBootcamp() {
        $mensajePago = "El tipo de pago del bootcamp es: $this->tipoPago";
        return $this->mensajeEstado($this->tipoPago == "Contrato", $mensajePago, $mensajePago);
    }

    // Método para mostrar la nota del bootcamp
    public function NotaBootcamp() {
        $mensajeNota = "La nota del bootcamp es: $this->nota";
        return $this->mensajeEstado($this->nota >= 7, $mensajeNota, $mensajeNota);
    }

    // Método para obtener la información del alumno y el bootcamp
    public function obtenerInfoBootcamp() {
        return $this->obtenerInfo();
    }
}
?>




