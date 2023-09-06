<?php

/**
 * BubbleSort: Es un algoritmo de ordenamiento que revisa elemento por elemento, 
 * si el elemento anterior es mayor al seguiente hacemos el intercambio y se repite el proceso hasta que el arreglo se ordene.
 */

//[7, 5, 1, 3, 8]
//[5, 7, 1, 3, 8]
//[5, 1, 7, 3, 8]
//[1, 5, 6, 7, 8]

function bubbleSort($arr){    
    for($i = 0; $i < count($arr); $i++){        
        for($j = 0; $j < count($arr) - 1; $j++){    
                // Verificamos si el elemento actual es mayor al siguiente
                //[0] > [1]
                //[1] > [2]
                //[2] > [3]
                //[3] > [4]
            if($arr[$j] > $arr[$j + 1]){
                // Intercambiamos los valores
                /**
                 * 
                 * temporal = 5, 1, 3
                 * array[1] = 7
                 * array[0] = 5
                 * array[2] = 7
                 * array[1] = 1
                 * array[3] = 7
                 * array[2] = 3
                 * 
                 */

                $temporal = $arr[$j + 1];   
                $arr[$j + 1] = $arr[$j];    
                $arr[$j] = $temporal;
            }
        }
    }

    print_r($arr);

    sort($arr);


/**
 * 
 * Complete the 'countSwaps' function below.
 * 
 * The function accepts INTEGER_ARRAY a as parameter.
 * 
 */

function countSwaps($a) {
    // Write your code here
    $swaps = 0;
    for($i = 0; $i < count($a); $i++){
        for($j = 0; $j < count($a) - 1; $j++){
            if($a[$j] > $a[$j + 1]){
                $temporal = $a[$j + 1];
                $a[$j + 1] = $a[$j];
                $a[$j] = $temporal;
                $swaps++;
            }
        }
    }

    echo "First Element: $a[0] <br>";
    echo "Last Element: $a[count($a) - 1] <br>";
    print_r($a);
}

}

/*
 * Complete the 'insertionSort1' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY arr
 */

function insertionSort1($n, $arr) {
    // Write your code here
    $temporal = $arr[$n - 1];
    for($i = $n - 1; $i >= 0; $i--){
        if($arr[$i - 1] > $temporal){
            $arr[$i] = $arr[$i - 1];
            print_r($arr);
        } else{
            $arr[$i] = $temporal;
            print_r($arr);
            break;
        }
    }


    print_r($arr);



}






?>