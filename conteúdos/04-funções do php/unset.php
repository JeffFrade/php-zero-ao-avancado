<?php

// A função unset() destrói variável, arrays, índices do array e objetos

$arr = [
    1, 
    2,
    3
];

// Listando a segunda posição do array:
echo $arr[1] . PHP_EOL;

// Destruindo a segunda posição do array:
unset($arr[1]);

echo $arr[1] . PHP_EOL;
// Vai gerar um erro alertando que o índice 1 não existe
