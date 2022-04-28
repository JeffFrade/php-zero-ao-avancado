<?php

// Vamos a um exemplo mais prático com as funções, vamos refazer a calculadora que fizemos quando vimos o switch case.
// Porém vamos utilizar uma função para efetuar os cálculos e uma função para exibir o resultado por extenso.

$op = '+';
$n1 = 15; 
$n2 = 10;
$res = null;

switch ($op) {
    case '+':
        $res = soma($n1, $n2);
        break;

    case '-':
        $res = subt($n1, $n2);
        break;

    case '*':
        $res = mult($n1, $n2);
        break;

    case '/':
        $res = divi($n1, $n2);
        break;

    case '%':
        $res = mod($n1, $n2);
        break;

    default:
        $res = null;
}

// Exibindo o resultado por extenso
echo resultado($n1, $n2, $op, $res);

// Funções:

function soma($n1, $n2)
{
    return $n1 + $n2;
}

function subt($n1, $n2)
{
    return $n1 - $n2;
}

function mult($n1, $n2)
{
    return $n1 * $n2;
}

function divi($n1, $n2)
{
    return $n1 / $n2;
}

function mod($n1, $n2)
{
    return $n1 % $n2;
}

function resultado($n1, $n2, $op, $res)
{
    $extenso = 'Operador Inválido!';

    // Veja a função empty em "funções do php" no arquivo "empty.php"
    if (!empty($op)) {
        // Veja a função sprinf em "funções do php" no arquivo "sprinf.php"
        $extenso = sprintf('%s %s %s = %s', $n1, $op, $n2, $res);
    }

    return $extenso . PHP_EOL;
}
