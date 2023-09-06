<?php

/**
 * 
 * estructuras repetitivas
 * for, foreach, while, do while
 * 
 * 3 elemtos => contador, limite contador, incremento/contador 
 */

//crear un contador que empieze del 5 y llegue hasta el 50

function contadorNumeros(){
    for ($i=5; $i <= 50; $i++) { 
        echo $i . "<br>";
    }
}
contadorNumeros();
echo "<br>";


//los valores del arreglo sean multiplicados * 2
/**
 * length => arreglo/cadena 
 * 
 * PHP
 * count => devuelve el tamaño del arreglo
 * strien => devuelve el tamaño de la cadena
 */

    
    function arregloNumeros(){

    $arreglo = [34,67,12,2,5]; 

    for($j = 0; $j < count($arreglo); $j++){

    $resultado = $arreglo[$j] * 2;

    echo "Resultado: " . $resultado . "<br>";

    }

}

arregloNumeros();
echo "<br>";

#while
//verificar cuantas vocales contiene una cadena
function contarVocales($texto){
    //"hola" = h o l a
    $k = 0;
    $total_vocales = 0;
    while($k < strlen($texto)){
        if($texto[$k] == "a" || $texto[$k] == "e" || $texto[$k] == "i" || $texto[$k] == "o" || $texto[$k] == "u"){
            $total_vocales++;
        }
        //echo $texto[$k] . "<br>";
        //incremento/decremento
        $k++;
    }
    echo "Total vocales: " . $total_vocales;
}

contarVocales("murcielago");
echo "<br>";


//mostrar los elementos de un arreglo al revez
function arregloAlRevez(){
    /**
     * frutas: manzana
     * frutas: sandia
     */
    $frutas = ["manzana", "pera", "uva", "sandia", "pera"];
    $m = count($frutas) -1; //4 -> 0
    /**
     * 5 -1 = 4
     * 4 -1 = 3
     * 3 -1 = 2
     * 2 -1 = 1
     * 1 -1 = 0
     */
    while($m >= 0){
        echo $frutas[$m] . "<br>";
        $m--;
    }
}

arregloAlRevez();
echo "<br>";

#do while => la primera vez siempre entra al ciclo
//calcular la media de un arreglo = suma de los elementos / tamaño
function calcularMedia(){
    $arreglo = [45, 6, 7, 89, 12];
    $l = 0;
    $suma = 0;
    $media = 0;
    do{
        $suma += $arreglo[$l];
        $l++;
    }while($l < count($arreglo));
    $media = $suma / count($arreglo);
    echo "La media del arreglo es $media";
}

calcularMedia();
echo "<br>";

#foreach => sirve para iterar arreglos
    function iterarArreglo(){

    $arreglo = ["tijeras", "cuadernos", "borrador", "zacapunta"];

    foreach($arreglo as $item){

    echo "Util Escolar: $item <br>";

    }

}

iterarArreglo();
echo "<br>";

?>