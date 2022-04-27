<?php

// Chegamos a parte de laços de repetição (Ou loop), como o nome sugere, vamos repetir algo (No caso trecho(s) de código) um determinado número de vezes.
// Quando podemos usar os loops? Pense em fazer uma contagem (Um exemplo bem simples), imagina fazer a contagem do 1 ao 10, escrever 10x o echo com o número desejado, por mais que seja chato e trabalhoso é até tranquilo fazer isso 10x, agora aumente isso para 100, 1000 ou 10000... Fica insustentável.
// Vamos ao exemplo da contagem, de 1 até 100, o primeiro loop (Ou estrutura de repetição) que vamos utilizar é o for

// Essa é a sintaxe do for:

for ($i = 1; $i <= 100; $i++) {
    echo $i . PHP_EOL;
}

/*
    Explicando a sintaxe do for:

    for ($i = 1; $i <= 100; $i++) {
        ...
    }

    A variável $i é bastante usada como variável de interação no for (Por isso se chama $i), ela é a variável que vai sendo incrementada ao correr do loop.
    A primeira parte do for ($i = 1;) indica que nossa variável $i vai começar em 1 (Será nosso valor de início).
    A segunda parte do for ($i <= 100;) será nossa condição, isto é, enquanto $i <= 100, nosso loop estará em funcionamento (Todos os loops só param de executar quando sua condição se torna false).
    A terceira e última parte do for ($i++) Indica nosso incremento ($i++ = Incremento de 1 em 1), isso indica que nosso loop caminha de 1 em 1 (Por exemplo, se começamos em 1, o próximo passo será 2, depois 3 e assim sucessivamente até chegar ao 100).
    E claro, vale ressaltar que todas as 3 partes podem ser trocadas para atender a necessidade do seu código, o utilizado acima é apenas um exemplo.
*/

echo "------------------------------" . PHP_EOL; 

// Agora vamos a outro exemplo, dessa vez vamos de 0 até 100, mas pulando de 5 em 5:

for ($i = 0; $i <= 100; $i += 5) {
    echo $i . PHP_EOL;
}

// Apenas explicando: $i += 5 é a mesma coisa que $i = $i + 5
// Nesse exemplo, coloquei o 0 para que os valores terminem com 0 e 5 sempre
// E nossa terceira no loop agora caminha de 5 em 5

echo "------------------------------" . PHP_EOL; 

// Agora vamos a um exemplo combinando condicional e loop
// Vamos fazer um exemplo onde vamos listar os números pares de 1 até 50

for ($i = 1; $i <= 50; $i++) {
    // Para determinar se temos um número par ou não podemos utilizar o operador mod (%)
    // Caso o mod (%) (Resto da divisão) de um número seja igual a 0, o número é par, caso o resultado do mod seja 1, o número é ímpar
    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }
}

echo "------------------------------" . PHP_EOL; 

// Vamos ao último exemplo, fazer uma contagem regressiva (De 10 até 0):

for ($i = 10; $i >= 0; $i--) {
    echo $i . PHP_EOL;
}

// Note que nossa condição tem que ser com o $i acima do número que desejamos parar e o operador é de decremento ($i--)
// Uma diferença do for para os outros loops é que o for tem o número de repetições pré-definidos, sabemos até onde queremos chegar através do próprio loop (Se isso não ficou claro, nos próximos loops vai perceber isso).
