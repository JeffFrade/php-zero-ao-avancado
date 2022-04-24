<?php

// Em PHP temos 5 operadores aritméticos, sendo eles:

/*

+ = Soma
- = Subtração
* = Multiplicação
/ = Divisão
% = Mod (Retira o resto da divisão)

*/

// Vamos criar 2 variáveis para reutilizarmos os valores para as operações aritméticas
$num1 = 15;
$num2 = 10;

// Exibindo os 2 valores:
// Podemos concatenar valores e os quebrar em linhas com o PHP_EOL sem a necessidade de utilizarmos 2 instruções echo
echo $num1 . PHP_EOL . $num2;

// Operações aritméticas:
$soma = $num1 + $num2;
$subt = $num1 - $num2;
$mult = $num1 * $num2;
$divi = $num1 / $num2;
$mod = $num1 % $num2;

// Exibindo os resultados:
echo PHP_EOL;
echo "Soma: " . $soma; // 25
echo PHP_EOL;
echo "Subtração: " . $subt; // 5
echo PHP_EOL;
echo "Multiplicação: " . $mult; // 150
echo PHP_EOL;
echo "Divisão: " . $divi; // 1.5
echo PHP_EOL;
echo "Mod: " . $mod; // 5 (Resto da divisão)
echo PHP_EOL;
echo "------------------------------"; // Apenas uma divisória para simplificar a visualização do conteúdo abaixo

// Assim como na matemática, o que vem entre parênteses se calcula primeiro:
echo PHP_EOL;
echo (2 + 3) * 3; // 15

// Para "priorizar" uma operação matemática em PHP utilizamos somente parênteses, os parênteses mais internos serão calculados antes dos mais externos:
echo PHP_EOL;
echo ((2 + 7) - 4) * 10; // 50
/* Explicando a conta acima:
2 + 7 = 9 (Primeiro ponto a ser calculado)
9 (Obtido da operação anterior) - 4 = 5
5 (Obtido da operação anterior) * 10 = 50
*/
