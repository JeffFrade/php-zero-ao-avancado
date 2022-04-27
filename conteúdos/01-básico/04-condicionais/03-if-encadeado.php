<?php

// Até o momento vemos o if e o else, conseguimos trabalhar com 2 condições, caso seja verdadeira e caso seja falsa, você pode estar fazendo a pergunta e se eu tiver mais de 2 condições, por exemplo, caso a primeira condição falhe (Não seja atendida) eu quero fazer outra condição ao invés de jogar diretamente no else, isso é possível? Claro, totalmente possivel com o if encadeado (If dentro de if).
// Quando a primera das condições é satisfeitas, ele executa o trecho de código correspondente a aquela condição a qual passou.
// Vamos voltar ao exemplo do nosso time de vôlei, agora vamos fazer uma melhor triagem dos nossos atletas, vamos separar primeiro quem tem altura superior a 1.75m, em seguida quero saber quem tem 18 anos ou mais e por último saber quem não se enquadra em nenhuma dessas 2 condições para fazer as dispensas.
// Vamos começar simulando a entrada de uma idade e uma altura:
$idade = 40;
$altura = 1.87;

// Vamos montar nosso primeiro if para verificar quem tem altura superior a 1.75m:
if ($altura >= 1.75) {
    echo "Altura Maior ou Igual a 1,75m";
    // Abaixo, vamos montar nosso if encadeado (elseif ou else if) para verificar quem não tem a altura desejada, mas é maior de idade
} else if ($idade >= 18) {
    echo "Maior de Idade";
    // Abaixo, vamos fazer o else final, para dispensarmos quem não se enquadra no nosso time
} else {
    echo "Dispensado, altura e idade inferior a desejada";
}

// Nesse caso, o trecho de código executado é o primeiro trecho, da primeira condição, pois a altura passada é maior ou igual a 1.75m

echo PHP_EOL . "------------------------------" . PHP_EOL; 

// Agora vamos diminuir a altura para 1.57m para que ele falhe na primeira condição e execute somente a segunda
$altura = 1.57;

// Vamos montar nosso primeiro if para verificar quem tem altura superior a 1.75m:
if ($altura >= 1.75) {
    echo "Altura Maior ou Igual a 1,75m";
    // Abaixo, vamos montar nosso if encadeado (elseif ou else if) para verificar quem não tem a altura desejada, mas é maior de idade
} else if ($idade >= 18) {
    echo "Maior de Idade";
    // Abaixo, vamos fazer o else final, para dispensarmos quem não se enquadra no nosso time
} else {
    echo "Dispensado, altura e idade inferior a desejada";
}

// Nesse caso, o trecho de código executado é o segundo trecho, da segunda condição, pois a altura passada é menor que 1.75m, mas a idade é superior a 18 anos

echo PHP_EOL . "------------------------------" . PHP_EOL; 

// Agora vamos diminuir a idade para 15 anos para que ele falhe em tudo e seja dispensado
$idade = 15;

// Vamos montar nosso primeiro if para verificar quem tem altura superior a 1.75m:
if ($altura >= 1.75) {
    echo "Altura Maior ou Igual a 1,75m";
    // Abaixo, vamos montar nosso if encadeado (elseif ou else if) para verificar quem não tem a altura desejada, mas é maior de idade
} else if ($idade >= 18) {
    echo "Maior de Idade";
    // Abaixo, vamos fazer o else final, para dispensarmos quem não se enquadra no nosso time
} else {
    echo "Dispensado, altura e idade inferior a desejada";
}

// Nesse caso, o trecho de código executado é o terceiro trecho, do else, pois a altura passada é menor que 1.75m e a idade é inferior a 18 anos
// Podemos montar quantos if encadeados (else if / elseif) quisermos ou precisarmos, limitei a somente 1 para não ficar muito complexa a explicação.
// O mesmo cuidado com a duplicidade de código vale para o if encadeado, vale lembrar, escrever bons códigos te ajuda no futuro quando precisar efetuar manutenção, suporte ou até outro desenvolvedor trabalhar com o seu código.
