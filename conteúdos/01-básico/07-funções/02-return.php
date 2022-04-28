<?php

// Nesse conteúdo, vamos nos aprofundar um pouco mais no que foi abordado no último conteúdo.
// Agora vamos conhecer a instrução return, algo muito utilizado em funções, afinal não é o usual ficar adicionando a instrução echo dentro das funções.
// A instrução return como o próprio nome já diz é um retorno, basicamente, ela devolve algo (Texto, valor, resultado de operação e etc.) sobre uma função.
// Vale ressaltar que qualquer coisa feita após a instrução return dentro de uma função é desconsiderado pela linguagem e você pode ter um aviso (Warning) sobre isso quando for executar o seu código.
// Vamos corrigir o exemplo da aula passada então:
function sorteiaDobro()
{
    // Agora trocamos o echo pelo return que é o mais utilizado
    return rand(1, 100) * 2;
}

// Chamando nossa função e exibindo o retorno dela:
echo sorteiaDobro() . PHP_EOL;

// O lugar correto do echo é na chamada da função, pois ele vai pegar o que o return enviou e exibir na tela

echo "------------------------------" . PHP_EOL; 

// Agora vamos armazenar o conteúdo da nossa função sorteiaSobro em uma variável e vamos dividir por 2 esse resultado:
$resultado = sorteiaDobro();

// Exibindo o resultado:
echo $resultado . PHP_EOL;

// Exibindo o resultado dividido por 2:
echo $resultado / 2 . PHP_EOL;

// Podemos usar uma função que tem o return para atribuir o valor a variável, usar dentro de expressões, condições e etc.
// Vale ressaltar que nem toda função precisa ter um return
