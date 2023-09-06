<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUIA_PHP</title>
</head>
<body>

<h1>GUIA_PHP</h1>

<?php

/**
 * Ejercicio 1: Solicitar un número entero, determine y muestre si dicho número es negativo, positivo o cero.
 * 
 */

function ejercicio1($numero){
    if($numero > 0){
        echo "El numero $numero es positivo";
    } else if($numero < 0){
        echo "El numero $numero es negativo";
    } else{
        echo "El numero $numero es cero";
    }
}

ejercicio1(5);
echo "<br>";

/**
 * Ejercicio 2: En un municipio se desea cobrar el paso de vehículos por su nuevo Puente, con los siguientes datos:
 *
 * Vehículo	Impuesto
 * Vehículo Particular	$0.75
 * Autobús	$1.50
 * Microbús	$1.25
 * Moto taxi	$0.50
 * Moto	$0.30
 * Otros	$3.00
 * Mostrar el impuesto a pagar en base al tipo de vehículo que se ingrese por medio de una variable, utilizando la estructura switch.
 */

function ejercicio2($tipo_vehiculo){
    switch($tipo_vehiculo){
        case "Vehiculo Particular":
            echo "El impuesto a pagar es de $0.75";
            break;
        case "Autobus":
            echo "El impuesto a pagar es de $1.50";
            break;
        case "Microbus":
            echo "El impuesto a pagar es de $1.25";
            break;
        case "Moto taxi":
            echo "El impuesto a pagar es de $0.50";
            break;
        case "Moto":
            echo "El impuesto a pagar es de $0.30";
            break;
        case "Otros":
            echo "El impuesto a pagar es de $3.00";
            break;
        default:
            echo "No existe ese tipo de vehiculo";
            break;
    }
}

ejercicio2("Moto");
echo "<br>";

/**
 * Ejercicio 3: Crea una función que devuelva la suma de los números pares e impares de un arreglo.
 * 
 */

function ejercicio3($arreglo){
    $suma_pares = 0;
    $suma_impares = 0;

    for($i = 0; $i < count($arreglo); $i++){
        if($arreglo[$i] % 2 == 0){
            $suma_pares += $arreglo[$i];
        } else{
            $suma_impares += $arreglo[$i];
        }
    }
    echo "La suma de los numeros pares es $suma_pares y la suma de los numeros impares es $suma_impares";
}

ejercicio3([1,2,3,4,5,6,7,8,9,10]);
echo "<br>";

/**
 * Ejercicio 4: Una empresa se dedica a la venta de impresoras, cada impresora tiene el precio de $70.00.
* Crea una función que pida 2 parámetros, la cantidad de impresoras a vender y la forma de pago. En base a la forma de pago se va aplicar los siguientes descuentos:
    *Efectivo	10%
     *arjeta de Crédito 	5%
     *Vale	15%

*     Se debe mostrar:
*•	Cantidad de impresoras.
*•	Forma de pago y el descuento que se va aplicar.
*•	Total, a pagar.
 * 
 */

function ejercicio4($cantidad_impresoras, $forma_pago){
    $precio_impresora = 70;
    $total = $cantidad_impresoras * $precio_impresora;
    $descuento = 0;

    switch($forma_pago){
        case "Efectivo":
            $descuento = $total * 0.10;
            break;
        case "Tarjeta de Credito":
            $descuento = $total * 0.05;
            break;
        case "Vale":
            $descuento = $total * 0.15;
            break;
        default:
            echo "No existe esa forma de pago";
            break;
    }

    $total -= $descuento;

    echo "Cantidad de impresoras: $cantidad_impresoras <br>";
    echo "Forma de pago: $forma_pago <br>";
    echo "Descuento: $descuento <br>";
    echo "Total a pagar: $total <br>";
}

ejercicio4(5, "Efectivo");
echo "<br>";

/**
 * Ejercicio 5:Crear un bucle que se ejecutará cinco veces empezando por 0 hasta llegar a 4, que nos muestre un mensaje con una frase.
 * 
 */

function ejercicio5(){
    for($i = 0; $i < 5; $i++){
        echo "Hola mundo <br>";
    }
}

ejercicio5();
echo "<br>";


/**
 * Ejercicio 6: Pedir una calificación de 0 a 10 y mostrar de la siguiente manera: Insuficiente, Suficiente, Bien, Excelente

 * 
 */

function ejercicio6($calificacion){
    if($calificacion >= 0 && $calificacion <= 10){
        if($calificacion < 6){
            echo "Insuficiente";
        } else if($calificacion >= 6 && $calificacion < 8){
            echo "Suficiente";
        } else if($calificacion >= 8 && $calificacion < 10){
            echo "Bien";
        } else{
            echo "Excelente";
        }
    } else{
        echo "Calificacion no valida";
    }

}

ejercicio6(10);
echo "<br>";

/**
 * Ejercicio 7:Si la puntuación es mayor o igual a 60 puntos, la salida se "pasa". Si la puntuación es inferior a 60, el resultado es "no calificado".
 * 
 */

function ejercicio7($puntuacion){
    if($puntuacion >= 60){
        echo "Pasa";
    } else{
        echo "No calificado";
    }
}

ejercicio7(59);
echo "<br>";

/**
 * EEjercicio 8: Dado un arreglo de 10 notas estudiantiles, mostrar la cantidad de estudiantes reprobados y aprobados.
 * 
 */

function ejercicio8($arreglo){
    $aprobados = 0;
    $reprobados = 0;

    for($i = 0; $i < count($arreglo); $i++){
        if($arreglo[$i] >= 6){
            $aprobados++;
        } else{
            $reprobados++;
        }
    }

    echo "Aprobados: $aprobados <br>";
    echo "Reprobados: $reprobados <br>";

}

ejercicio8([5,6,7,8,9,10,5,4,3,2]);
echo "<br>";


?>

</body>
</html>
