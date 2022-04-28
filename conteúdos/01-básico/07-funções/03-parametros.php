<?php

// Agora chegamos a uma parte do conteúdo que vai começar a deixar as funções mais interessantes, a utilização de parâmetros, nas funções nós podemos criar nossos parâmetros, quantos nós quisermos e trabalharmos com eles da forma que quisermos.
// Vamos a um exemplo bem simples onde criaremos uma função para efetuar a soma de 2 números:

// Criando a função e os parâmetros
function soma($n1, $n2)
{
    return $n1 + $n2;
}

/*

Sintaxe:

function nomeFunction($parametro1, $parametro2, ...)
{
    ...
}

Podemos passar quantos parâmetros quisermos para trabalharmos com nossas funções

*/

// Chamando a nossa função e exibindo a soma:
echo soma(10, 5) . PHP_EOL;

// Como nossa função pede 2 argumentos/parâmetros para fazer uma soma, eu passei 2 números para ela (10 e 5) (Se a função pedisse mais argumentos, eu teria que passar mais argumentos para ela).
// Caso eu passe mais argumentos que a função precise para trabalhar, nenhum erro acontece (Não fazer isso é uma sujeira no código).
// Caso falte argumentos, o PHP devolve um erro na tela.
