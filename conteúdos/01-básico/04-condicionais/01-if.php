<?php

// Chegamos a parte de condicionais, como o próprio nome sugere, vamos trabalhar com condições, fazer nossos programas executarem ou exibirem algo a partir da satisfação de uma ou mais condições.
// Mas você deve estar se perguntando, o que é uma condição em termos de sistema, uma condição pode ser por exemplo um login, caso eu preencha corretamente meu login e minha senha o sistema de uma rede social me leva ao meu feed, isso ocorre justamente pelo fato de eu ter satisfeito uma ou mais condições.
// O primeiro condicional que vamos ver é o if (SE), a função do if é verificar uma ou mais expressões, caso ela(s) seja(m) satifeita(s) ele executa algo que quisermos.
// Nesse primeiro e bem simples exemplo vamos verificar se uma idade informada é maior ou igual a 18 anos e caso seja, vamos exibir uma mensagem de "Maior de idade":
$idade = 18;

if ($idade >= 18) {
    echo "Maior de Idade!";
}
/* 
A sintaxe do if é essa:

if (expressao) {
    ...
}

... = Todo e qualquer código que quisermos executar caso a(s) expressão(ões) seja(m) atendida(s).
Para termos mais de uma expressão para o nosso if, utilizamos os operadores lógicos (Podemos utilizar quantos e quais quisermos, até misturar se preciso for) vistos no módulo passado e também podemos utilziar os operadores relacionais para montarmos nossas expressões, como foi feito no exemplo acima com a idade.
A regra de priorizar com parênteses também vale para a(s) expressão(ões) para a validação do nosso if
A sintaxe do if é mantida nesse padrão que a escrevi (Com o espaços e posição da chave), pois é a mais aceita pela comunidade.
*/

// Vamos montar outro exemplo onde vamos combinar 2 expressões, nesse caso OU a pessoa deve ser maior de 18 anos ou ter altura superior a 1.75m (Utilizamos o ponto nesse caso por causa do tipo float/double) para entrar no nosso time de vôlei:
$altura = 1.8;

echo PHP_EOL . "------------------------------" . PHP_EOL; 

if ($idade >= 18 || $altura >= 1.75) {
    echo "Dentro do time";
}

// Vamos alterar a altura e o operador lógico de OR para AND para que nossa expressão não seja satisfeita e não entre dentro do bloco do if:

$altura = 1.6;

echo PHP_EOL . "------------------------------" . PHP_EOL; 

if ($idade >= 18 && $altura >= 1.75) {
    echo "Dentro do time";
}
