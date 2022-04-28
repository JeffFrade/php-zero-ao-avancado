<?php

// Chegamos a outro tópico muito importante e muito usado no desenvolvimento de softwares, os arrays.
// Mas, o que é um array? Array é uma "coleção" de valores, pensa que nossa variável é um edifício e cada andar é uma posição do nosso array.
// Veja o material complementar "estrutura-array.png" para melhor entendimento do que é um array.
// Vamos criar um array para armazenar números, 5 números:

$numeros = [
    5,
    9,
    18,
    6,
    85
];

// Os valores também podem ficar na mesma linha (Contanto que respeitem o limite de 120 caractéres por linha), mas para melhor visualização, coloque 1 item por linha.
// Há 2 maneiras de se criar um array, a que utilizei acima (A mais usada) e essa outra que vou ensinar em seguida:

$numeros = array(5, 9, 18, 6, 85);

// Durante nossos conteúdos, vamos utilizar a 1 forma somente.
// Criado nosso array, agora vem a pergunta de como podemos obter os valores desse nosso array e a resposta é muito simples.
// Vamos supor que queremos o terceiro valor do nosso array (O número 18), todo e qualquer array numérico em PHP começa em 0, ou seja, o primeiro índice é o 0.
// Como queremos o terceiro índice (Que contém o valor 18) e sabendo que o primeiro índice começa em 0, logo, nosso valor vai estar no índice 2 (0 => Primeiro Índice, 1 => Segundo Índice, 2 => Terceiro Índice).
// Como obter o valor do índice desejado:

echo $numeros[2] . PHP_EOL;

// Sempre que quisermos obter um índice do array, utilizamos os colchetes e o número do índice desejado (Lembrando novamente que começa em 0) [numero_indice].

// Exibindo a quarta posição do array:
// Lembrando que a sempre que falamos de posição, devemos subtrair 1 para achar qual chave (Índice) do array queremos manipular
echo $numeros[3] . PHP_EOL;

// Trocado o valor da quarta posição do array pelo número 7:
$numeros[3] = 7;

// Exibindo a quarta posição do array:
echo $numeros[3] . PHP_EOL;
