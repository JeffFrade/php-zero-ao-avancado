<?php

// Fazendo o loop percorrer números entre 1 e 10:
for ($i = 1; $i <= 10; $i++) {
    // Gerando e exibindo o número aleatório entre 1 e 100 (No caso de dúvidas do funcionamento do rand(), olhe na pasta "funções do php" o arquivo "rand.php").
    echo rand(1, 100) . PHP_EOL;
}
