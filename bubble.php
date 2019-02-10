<?php

$array = array(1, 0, 6, 9, 4, 5, 2, 3, 8, 7);


for ($j = 0; $j < count($array) - 1; $j++){
    for ($i = 0; $i < count($array) - $j - 1; $i++){
        if ($array[$i] > $array[$i + 1]){
            $tmpVar = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $tmpVar;
        }
    }
}

var_dump($array);