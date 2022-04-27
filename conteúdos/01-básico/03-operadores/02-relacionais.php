<?php

// Em PHP temos 8 operadores relacionais, sendo eles:

/*
== -> Igual
!= -> Diferente
=== -> Igual, porém faz até a comparação se os valores são do mesmo tipo
!== -> Diferente, porém faz até a comparação se os valores são do mesmo tipo
> -> Maior
< -> Menor
>= -> Maior ou Igual
<= -> Menor ou Igual
*/

// Vamos começar a trabalhar com esses operadores, partindo pelo igual (==):
// Como vamos trabalhar com expressões, os valores retornado serão bool (Booleanos), porém os converteremos para int para o PHP os exibir, pois valores false (0) o PHP não exibe alguams vezes
echo "Operador Igual: " . (int)(1 == 1);
echo PHP_EOL;
// Tivemos que colocar entre parênteses, para que isso seja executado antes do echo, pois se não houvesse esses parênteses, o valor não seria exibido.
// Sempre que quisermos priorizar a execução de uma expressão pelo programa, sempre utilizarmos os parênteses.
// Quando colocamos (tipo), nesse caso (int), estamos dizendo ao PHP para fazer um cast (Conversão) de um valor, variável ou resultado da expressão para aquele tipo (No caso, um int), no nosso caso é um cast do resultado da expressão.

// Operador diferente:
echo "Operador Diferente: " . (int)(1 != 1);
echo PHP_EOL;

// Operador igual, porém com comparação se os valores são do mesmo tipo:
echo "Operador Igual, Com Comparação de Tipo: " . (int)(1 === "1");
echo PHP_EOL;

// Operador diferente, porém com comparação se os valores são do mesmo tipo:
echo "Operador Diferente, Com Comparação de Tipo: " . (int)(1 !== "1");
echo PHP_EOL;

// Operador Maior:
echo "Operador Maior: " . (int)(10 > 5);
echo PHP_EOL;

// Operador Menor:
echo "Operador Menor: " . (int)(10 < 5);
echo PHP_EOL;

// Operador Maior ou Igual:
echo "Operador Maior ou Igual: " . (int)(10 >= 5);
echo PHP_EOL;

// Operador Menor ou Igual:
echo "Operador Menor ou Igual: " . (int)(10 <= 5);
echo PHP_EOL;
