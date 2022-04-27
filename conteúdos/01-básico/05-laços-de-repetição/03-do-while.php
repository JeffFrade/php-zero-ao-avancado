<?php

// Chegamos ao último loop que vamos estudar nessa parte de repetição, ele é o do while, muito semelhante ao while, porém ele tem uma particularidade, mesmo que sua condição seja falsa, ele ainda executa 1 vez o conteúdo do dentro do seu loop.
// Isso ocorre por causa da verificação da condição ficar ao final do loop e não no começo como os outros loops (Ele é o único loop com essa particularidade)

// Para não ficar repetindo sempre os mesmos exemplos, vamos mostrar apenas como funciona o do while (E também é um loop pouco utilizado)

// Vamos a sintaxe, fazendo uma contagem de 1 a 100:

// Criando a variável de interação:
$i = 1;

// Sintaxe do do while:

do {
    echo $i . PHP_EOL;
    $i++;
} while ($i <= 100);

/*

Sintaxe do do while:

do {
    ...
    $i++;
} while ($i <= 100);

Esse loop executa seu conteúdo ao menos uma vez pelo simples fato da verificação ficar ao final do loop

*/

echo "------------------------------" . PHP_EOL; 

// Agora vamos a um exemplo onde vamos "escapar" o loop do do while e ele vai executar seu conteúdo ao menos uma vez:

$i = 200;

do {
    echo $i . PHP_EOL;
    $i++;
} while ($i <= 100);

// Ele vai exibir o 200 e depois vai seguir o programa sem fazer a repetição, pois a verificação da condição falhou, o do while primeiro executa o que tem dentro do seu bloco de repetição e depois faz a validação para ver se continua a executar ou para, por isso ele executa seu conteúdo ao menos uma vez.
