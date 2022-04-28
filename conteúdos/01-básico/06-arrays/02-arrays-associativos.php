<?php

// O que são arrays associativos? Arrays associativos são arrays que ao invés de conter número nas suas chaves (Índices), contém nome
// Vamos a criação desses arrays, vamos criar um array com nome e idade:

$dados = [
    'nome' => 'Joãozinho',
    'idade' => 57
];

// Existe outro meio (Menos usado) de se declarar um array associativo:
$dados = array('nome' => 'Joãozinho', 'idade' => 57);

// Essa seta (=>) indica atribuição de valores para chaves (Índices) do array.

// Agora vamos tentar pegar o índice "nome" desse array para ver o que contém nele:

echo $dados["nome"] . PHP_EOL;

// Sempre que trabalhamos com arrays associativos, para pegar o valor que se encontra em um determinado índice, basta "chamar" o nome desse índice nos colchetes ($ex["nome_indice"])
// Também poderia ser feito com aspas simples ($dados['nome'])

// Agora vamos listar a idade e fazer um decremento de 10 anos nela:

// Exibindo a idade:
echo $dados["idade"] . PHP_EOL;

// Fazendo o decremento de 10 anos (Podemos trabalhar com operadores para efetuar cálculos e armazenar os resultados no array)
$dados["idade"] -= 10;

// Exibindo a idade:
echo $dados["idade"] . PHP_EOL;
