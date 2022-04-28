<?php

// Criando o array que armazenará os valores sorteados
$sorteados = [];

// Fazendo um loop que executa enquanto a contagem de valores dentro do array for inferior a 6
while (count($sorteados) < 6) {
    // Sorteando um número entre 1 e 60
    $num = rand(1, 60);

    // Verificando se o número sorteado já existe dentro do array de sorteados:
    if (!in_array($num, $sorteados)) {
        // Caso não exista, adiciona ao array de sorteados o número em questão:
        $sorteados[] = $num;
    }
}

// Exibe o array com os números sorteados:
print_r($sorteados);
