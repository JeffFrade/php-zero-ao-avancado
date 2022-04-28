<?php

// Agora vamos a um pequeno exemplo onde vamos combinar tudo que vimos até agora em todos os nossos conteúdos.
// Vamos sortear 10 números (Entre 1 e 100) em um array e verificar qual desses 10 números sorteados foi o valor mais alto e o mais baixo.

// Vamos começar criando um array vazio:
$sorteio = [];

// Vamos criar um for para sortear 10 valores aleatórios e ir adicionando ao nosso array:
for ($i = 1; $i <= 10; $i++) {
    $sorteio[] = rand(1, 100);
    // $sorteio[] = Adiciona um valor ao final do array
}

// Agora vamos criar 2 variáveis para pegar o valor máximo e o mínimo:
$max = 1;
$min = 100;

// Os valores estão trocados de forma proposital, vai ficar mais claro mais abaixo

// Criando um loop para percorrer o array:
// Dessa vez, vamos utilizar o while (Para variar um pouco):

// Nossa variável de interação no loop, ela vai começar em 0, pois nosso array começa em 0
$i = 0;

// Veja a função count() no tópico "funções do php" para tirar suas eventuais dúvidas
// count($sorteio) - 1 => O count() conta quantas posições o array tem, se o array tem 2, ele retorna 2, porém a contagem do array inicia em 0 quando queremos o percorrer, logo, precisamos corrigir essa diferença, senão nosso programa vai estourar um erro na tela, a solução é subtrair 1 do resultado do count()
while ($i <= count($sorteio) - 1) {
    // Vamos simplificar a chamada da posição do array criando uma variável auxiliar:
    $aux = $sorteio[$i];

    // Verificando o valor máximo:
    if ($aux > $max) {
        $max = $aux;
    }

    // Verificando o valor mínimo:
    if ($aux < $min) {
        $min = $aux;
    }

    // Exibindo o valor sorteado:
    echo $aux . PHP_EOL;

    $i++;
}

// Exibindo qual foi o maior valor sorteado:
echo "Maior Valor Sorteado: " . $max . PHP_EOL;

// Exibindo qual foi o menor valor sorteado:
echo "Menor Valor Sorteado: " . $min . PHP_EOL;
