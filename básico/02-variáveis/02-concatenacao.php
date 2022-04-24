<?php

// Concatenar é o ato de juntar 2 ou mais strings ou valores numéricos ou booleanos a string(s).
// Para concatenar valores no PHP utilizamos o ponto (.)
// Ao concatenar, por padrão separa-se o operador de concatenação dos valores (Ex: "Concatenar " . "String)

// Concatenando 2 Strings:
echo "Olá, " . "tudo bem?";

// Concatenando 3 Strings:
echo PHP_EOL;
echo "Olá, " . "tudo bem " . "com você?" ;

// Armazenando a concatenação em uma variável:
// Ao concatenarmos valores a variável que recebe esses valores se torna uma string pelo simples fato de conter texto no valor
$concatenado = "Essa" . " variável" . " armazena" . " um" . " valor" . " concatenado";

// Exibindo a variável:
echo PHP_EOL;
echo $concatenado;

// Concatenando com valor inteiro
$idade = 15;

echo PHP_EOL;
echo "Eu tenho " . $idade . " anos";

// Armazenando a concatenação em uma variável:
$valor = 33.25;
$concatenado = "O item custa R$ " . $valor;

// Exibindo o texto concatenado:
echo PHP_EOL;
echo $concatenado;

// Concatenando com um tipo diferente de string, mas sem utilizar o valor de uma variável:
echo PHP_EOL;
echo "Você possui " . 3 . " tentativas";
