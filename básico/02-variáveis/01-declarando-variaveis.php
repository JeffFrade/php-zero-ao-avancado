<?php

// Variáveis no PHP começam sempre com o símbolo $
// Variáveis nunca devem começar com números, elas podem conter números, mas nunca no começo (Ex: $1num)
// Variáveis nunca devem conter caractéres especiais como (&, pontuação(. , ; + - * / = e afins))
// Variáveis nunca devem conter espaço em seu nome (Ex: $nome usuario)
// Variáveis nunca devem conter acentuação em seu nome (Ex: $usuário)
// Variáveis podem conter o caractére _  (Ex: $nome_usuario)
// Variáveis podem conter números (Contanto que não seja no começo) (Ex: $num1)
// Variáveis que começam com $_ geralmente são variáveis próprias do PHP e não podem ser sobrescritas (Ex: $_SERVER)
// Por padrão, utilize o camel case para declarar variáveis com nomes compostos (Ex: $nomeUsuario)
// PHP é fracamente tipado, isto é, não é preciso definir qual tipo a variável vai trabalhar, podendo assim a variável assumir vários tipos com o decorrer do script (Será tratado isso nesse script)

// Vamos declarar uma variável uma variável x ($x) com o valor de 10 (Será um int/integer):
$x = 10;

// Para exibir uma variável, basta digitar echo $nome_da_variavel
// Exibindo a variável:
echo $x;

// Agora vamos redeclarar $x como um booleano:
$x = true;

// Exibindo a variável: (Booleanos no PHP são exibidos como 0 (False) e 1 (True)):
echo PHP_EOL;
echo $x;

// Agora vamos redeclarar $x como uma string:
$x = "Agora sou uma String!";

// Exibindo a variável:
echo PHP_EOL;
echo $x;

// Agora vamos redeclarar $x como um float:
// Para casas decimais no PHP, utilize somente o ponto (.)
$x = 50.75;

// Exibindo a variável:
echo PHP_EOL;
echo $x;

// Existem diversos outros tipos primitivos para variáveis, porém esses são os mais utilizados.
