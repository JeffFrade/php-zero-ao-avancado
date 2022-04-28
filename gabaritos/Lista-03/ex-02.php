<?php

// Criando o array que armazenará os valores sorteados
$sorteados = [];

// Fazendo um loop que executa enquanto a contagem de valores dentro do array for inferior a 10
while (count($sorteados) < 10) {
    // Sorteando um número entre 1 e 100
    $num = rand(1, 100);

    // Verificando se o número sorteado é par:
    if ($num % 2 == 0) {
        // Caso seja par, adiciona ao array de sorteados o número em questão:
        $sorteados[] = $num;
    }
}

// Exibe o array com os números sorteados:
print_r($sorteados);
