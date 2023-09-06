<?php

/*
 * Complete the 'minimumNumber' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. STRING password
 */

    function minimumNumber($n, $password)
    {
        $count = 0; // Inicializamos una variable para contar los cambios necesarios.
        $lower = 0; // Variable para contar letras minúsculas.
        $upper = 0; // Variable para contar letras mayúsculas.
        $digit = 0; // Variable para contar dígitos.
        $special = 0; // Variable para contar caracteres especiales.
        $special_characters = "!@#$%^&*()-+"; // Cadena de caracteres especiales válidos.
    
        // Recorremos cada carácter de la contraseña.
        for ($i = 0; $i < $n; $i++) {
            // Comprobamos si el carácter es una letra minúscula.
            if ($password[$i] >= 'a' && $password[$i] <= 'z') {
                $lower++;
            }
            // Comprobamos si el carácter es una letra mayúscula.
            else if ($password[$i] >= 'A' && $password[$i] <= 'Z') {
                $upper++;
            }
            // Comprobamos si el carácter es un dígito.
            else if ($password[$i] >= '0' && $password[$i] <= '9') {
                $digit++;
            }
            // Comprobamos si el carácter es un carácter especial válido.
            else if (strpos($special_characters, $password[$i]) !== false) {
                $special++;
            }
        }
    
        // Si la contraseña no contiene al menos una letra minúscula, aumentamos el contador.
        if ($lower == 0) {
            $count++;
        }
        // Si la contraseña no contiene al menos una letra mayúscula, aumentamos el contador.
        if ($upper == 0) {
            $count++;
        }
        // Si la contraseña no contiene al menos un dígito, aumentamos el contador.
        if ($digit == 0) {
            $count++;
        }
        // Si la contraseña no contiene al menos un carácter especial válido, aumentamos el contador.
        if ($special == 0) {
            $count++;
        }
    
        // Si la longitud de la contraseña es menor que 6, ajustamos el contador.
        if ($n < 6) {
            if ($count + $n < 6) {
                $count = 6 - $n;
            }
        }
    
        // Devolvemos el número mínimo de cambios necesarios para que la contraseña sea segura.
        return $count;
    }
    
    // Ejemplo de uso de la función con una contraseña y su longitud.
    // echo minimumNumber(15, "<Abretumente@2>"); //Este lo use para probar en HackerRank

    echo minimumNumber(8, "NuevaContraseña123"); //Este lo use para probar local


?>