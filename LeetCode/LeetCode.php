<?php

/**
*A school is trying to take an annual photo of all the students. The students are asked to stand in a single file line in non-decreasing order by height. Let this ordering be represented by the integer array expected where expected[i] is the expected height of the ith student in line.
*
*You are given an integer array heights representing the current order that the students are standing in. Each heights[i] is the height of the ith student in line (0-indexed).
*
*Return the number of indices where heights[i] != expected[i].
*
* 
*
*Example 1:
*Input: heights = [1,1,4,2,1,3]
*Output: 3
*Explanation: 
*heights:  [1,1,4,2,1,3]
*expected: [1,1,1,2,3,4]
*Indices 2, 4, and 5 do not match.

*Example 2:
*Input: heights = [5,1,2,3,4]
*Output: 5
*Explanation:
*heights:  [5,1,2,3,4]
*expected: [1,2,3,4,5]
*All indices do not match.

*Example 3:
*Input: heights = [1,2,3,4,5]
*Output: 0
*Explanation:
*heights:  [1,2,3,4,5]
*expected: [1,2,3,4,5]
*All indices match.
* 
*
*Constraints:
*
*1 <= heights.length <= 100
*1 <= heights[i] <= 100
*
*/

class Solution {

    // Esta función calcula el número de estudiantes cuyas alturas no coinciden con las alturas esperadas.
    public function heightChecker($heights) {
        // Hacemos una copia de las alturas originales en la variable $expected.
        $expected = $heights;
        
        // Ordenamos el arreglo $expected en orden ascendente para tener las alturas esperadas.
        sort($expected);
        
        // Calculamos las diferencias entre las alturas originales y las alturas esperadas y contamos cuántas hay.
        // Las diferencias se calculan usando array_diff_assoc, que compara los valores y las claves de los elementos.
        // Devolvemos la cantidad de diferencias, que representa el número de estudiantes con alturas diferentes.
        return count(array_diff_assoc($heights, $expected));
    }
}

// Creamos una instancia de la clase Solution.
$solution = new Solution();

// Definimos conjuntos de alturas para probar la función heightChecker.
$heights1 = [1, 1, 4, 2, 1, 3];
$heights2 = [5, 1, 2, 3, 4];
$heights3 = [1, 2, 3, 4, 5];
$heights4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

// Mostramos los resultados de la función heightChecker para cada conjunto de alturas.
echo "Resultado 1 (heightChecker): " . $solution->heightChecker($heights1) . "\n";
echo "Resultado 2 (heightChecker): " . $solution->heightChecker($heights2) . "\n";
echo "Resultado 3 (heightChecker): " . $solution->heightChecker($heights3) . "\n";
echo "Resultado 4 (heightChecker): " . $solution->heightChecker($heights4) . "\n";



?>

