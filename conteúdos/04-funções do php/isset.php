<?php

// A função isset() verifica se uma variável, objeto, array ou índice de array existe

$arr = [
    1, 
    2,
    3
];

// Verificando se a terceira posição do array existe:
echo (int) isset($arr[2]) . PHP_EOL; // Vai retornar true

// Verificando se a quinta posição do array existe:
echo (int) isset($arr[4]) . PHP_EOL; // Vai retornar false
