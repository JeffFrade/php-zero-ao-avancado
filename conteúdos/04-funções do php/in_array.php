<?php

// A função in_array() verifica se um determinado valor existe dentro do array e retorna true (Caso exista) e false (Caso não exista)

$arr = [
    1, 
    2,
    3
];

echo (int) in_array(2, $arr) . PHP_EOL; // Valor existe no array
echo (int) in_array(5, $arr) . PHP_EOL; // Valor não existe no array
