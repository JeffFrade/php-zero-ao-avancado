<?php

// Começando o loop em 2020.
// Fazendo o loop parar em 0 ($i >= 0).
// Fazendo o decremento do loop de 4 em 4 (Se 2020 é um ano bissexto e anos bissextos ocorrem em um intervalo de 4 anos, podemos fazer o decremento de 4 em 4 que teremos os outros anos).
for ($i = 2020; $i >= 0; $i -= 4) {
    echo $i . PHP_EOL;
}
