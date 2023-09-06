<?php

// Definición de la función terminarNumero
function terminarNumero($numero){
    if ($numero % 10 == 4) {
        echo "El número $numero termina en 4";
    } else {
        echo "El número $numero no termina en 4";
    }
}

// Ejemplos de uso
terminarNumero(24); // Output: El número 24 termina en 4
echo "<br>";
terminarNumero(37); // Output: El número 37 no termina en 4

// Definición de la función terminarNumero2 usando operador ternario
function terminarNumero2($numero){
    echo ($numero % 10 == 4) ? "El número $numero termina en 4" : "El número $numero no termina en 4";
}

// Ejemplos de uso
terminarNumero2(24); // Output: El número 24 termina en 4
echo "<br>";
terminarNumero2(37); // Output: El número 37 no termina en 4


// Definición de la función rangoSalario
function rangoSalario($salario){
    if ($salario >= 501 && $salario <= 650) {
        echo "Cajero";
    } else if ($salario >= 360 && $salario <= 500) {
        echo "Vendedor";
    } else if ($salario > 650) {
        echo "Administrador";
    } else {
        echo "No tiene rango";
    }
}

// Ejemplos de uso
rangoSalario(600); // Output: Cajero
echo "<br>";
rangoSalario(400); // Output: Vendedor
?>

#switch

//estaciones del ano
<?php

// Definición de la función estaciones
function estaciones($mes){
    switch ($mes) {
        case 'enero':
        case 'febrero':
        case 'marzo':
            echo "Verano";
            break;
        case 'abril':
        case 'mayo':
        case 'junio':
            echo "Otoño";
            break;
        case 'julio':
        case 'agosto':
        case 'septiembre':
            echo "Invierno";
            break;
        case 'octubre':
        case 'noviembre':
        case 'diciembre':
            echo "Primavera";
            break;
        default:
            echo "No es un mes";
            break;
    }
}

// Ejemplos de uso
estaciones("enero");    
echo "<br>";
estaciones("abril");
echo "<br>";
estaciones("julio");
echo "<br>";
estaciones("octubre");
echo "<br>";
estaciones("diciembre");
echo "<br>";
estaciones("mes");
?>






