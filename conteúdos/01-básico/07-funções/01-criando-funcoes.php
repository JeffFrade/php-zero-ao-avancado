<?php

// Chegamos a um ponto bem interessante em nosso conteúdo, as funções, algo que nos ajuda bastante na organização do código (E finalmente vamos parar de ficar duplicando tanto código).
// Confesso que quando comecei a estudar sobre funções, tive muitas dificuldades, mas com o decorrer do tempo e de alguns estudos consegui entender.
// Como disse, o principal objetivo da função é trabalhar na organização do código (Com ela, vamos trabalhar com um recurso muito utilizado por programadores, a reutilização do código em diversas partes do software)
// Além que vamos começar a "quebrar" nossos scripts, cada função terá a sua responsabilidade.
// Vamos começar criando uma função bem simples, que sorteia um número (Entre 1 e 100) e depois o multiplica por 2

// Essa é a sintaxe da nossa função:
function sorteiaDobro()
{
    echo rand(1, 100) * 2;
}

/*

Sintaxe:

function nomeFunction()
{
    ...
}

O nomeFunction é o nome que vamos dar a nossa função, aplica-se a ela o mesmo conceito para se nomear uma variável.

*/

// Chamando nossa função:
sorteiaDobro() . PHP_EOL;

// Os parênteses são obrigatórios, pois se trata de uma função e em conteúdos mais pra frente, vamos explicar a razão dos parênteses existirem e para que servem.

// O conteúdo aqui é bem simples, vamos abordando as funções com calma para que tudo possa ficar o mais claro possível.
