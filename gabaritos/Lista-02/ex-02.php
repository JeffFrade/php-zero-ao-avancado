<?php

// Fazendo o loop percorrer números entre 1 e 100:
for ($i = 1; $i <= 100; $i++) {
    // Para que um número seja múltiplo de 3 é necessário que o seu resto de divisão (mod) por 3 seja igual a 0
    if ($i % 3 == 0) {
        echo $i . PHP_EOL;
    }
}
