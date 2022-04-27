<?php

// O while é outra estrutura de repetição, porém com uma sintaxe mais simples que for, e também devemos ter cuidado ao fazer um while, pois a estrutura do loop não faz a interação, sim nós quem a fazemos, no while só passamos a condição.
// Vamos aos mesmos exemplos do conteúdo anterior, as contagens regressivas

// Vamos começar com a contagem de 1 até 100:

// Definindo nossa variável que fará a interação ($i):
$i = 1;

// Para o while, nós precisamos definir quando (Qual valor) nossa variável de interação vai começar e isso fora da estrutura do loop

// Sintaxe do while:

while ($i <= 100) {
    echo $i . PHP_EOL;
    // O incremento é obrigatório para o while, pois sem ele, teremos um loop infinito e um loop infinito quando começa a ser executado ele chega a travar o sistema operacional devido ao consumo de recursos.
    // Por isso evite loops infinitos, caso veja que gerou um, pare imediatamente a execução do programa.
    $i += 1;
}

/*

Sintaxe do while:

$i = 1;

while ($i <= 100) {
    ...
    $i += 1;
}

Para que o while funcione, precisamos do valor no qual ele vai iniciar e isso tem que ser definido fora da estrutura desse loop
No while, devemos apenas passar a condição para que nosso while vai trabalhar (No caso enquanto $i <= 100), enquanto a condição for veradeira, o loop vai continuar trabalhando
E por último, antes de fechar o loop, é obrigatório fazer o incremento, pois sem ele a condição sempre será veradeira (Sempre $i equivalerá a 1 no nosso exemplo caso o incremento não esteja presente) e isso gerará um loop infinito. No nosso caso queremos um incremento de 1 em 1.

*/

echo "------------------------------" . PHP_EOL; 

// Agora vamos a outro exemplo, dessa vez vamos de 0 até 100, mas pulando de 5 em 5:

// Podemos chamar a variável de interação como quisermos (Vale lembrar que por padrão se usa $i)
$cont = 0;

while ($cont <= 100) {
    echo $cont . PHP_EOL;
    $cont += 5;
}

echo "------------------------------" . PHP_EOL; 

// Agora vamos a um exemplo combinando condicional e loop
// Vamos fazer um exemplo onde vamos listar os números pares de 1 até 50

$i = 1;

while ($i <= 50) {
    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }

    $i += 1;
}

echo "------------------------------" . PHP_EOL; 

// Vamos ao último exemplo, fazer uma contagem regressiva (De 10 até 0):

$i = 10;

while ($i >= 0) {
    echo $i . PHP_EOL;
    $i -= 1;
}
