<?php

// No último conteúdo vimos o if e como ele funciona, mas agora fica a pergunta, podemos fazer algo quando nossa condição no if não é atendida? A resposta é sim, nós podemos, existe um bloco chamado else, ele é executado quando nossa(s) condição(ões) não foi(ram) atendida(s).
// Vamos trabalhar igual no último conteúdo, com maioridade, agora vamos verificar se nosso usuário é maior ou menor de idade.
// Vamos começar passando uma idade:
$idade = 25;

// Vamos criar nosso if e nosso else:
if ($idade >= 18) {
    echo "Maior de Idade";
} else {
    echo "Menor de Idade";
}

echo PHP_EOL . "------------------------------" . PHP_EOL; 

// Ao executarmos, essa primeira parte do código, nossa idade é maior ou igual a 18 anos, logo somos maiores de idade.
// Agora vamos trocar nossa idade para 10 anos a menos e também vamos utilizar um operador novo (-=), esse operador faz o valor de uma variável (Numérica) ter seu valor subtraído a partir de um valor que quisermos.
$idade -= 10;

// Vamos executar novamente nossa condição:
if ($idade >= 18) {
    echo "Maior de Idade";
} else {
    echo "Menor de Idade";
}

echo PHP_EOL . "------------------------------" . PHP_EOL; 

// Ao executarmos nosso código agora, somos menores de idade, pois nossa idade agora é 15 anos, logo somos menores de idade.
// Uma dica que dou para você que está iniciando seus estudos é que crie códigos simples, pois com o if e else, fica mais fácil cometer a duplicidade de código em alguns lugares e isso é uma péssima prática de programação, deixando seus softwares piores para serem mantidos ou efetuar manutenções.
// Vou criar um exemplo de duplicidade de código, evite ao extremo cometer duplicidade de código, aos poucos vamos aprendendo novas técnicas e conceitos que vão nos auxiliar nisso, vamos ao exemplo:
// Nesse exemplo, vou exibir qual a idade que está sendo informada:

if ($idade >= 18) {
    echo "Maior de Idade";
    echo PHP_EOL . "Idade: " . $idade;
} else {
    echo "Menor de Idade";
    echo PHP_EOL . "Idade: " . $idade;
}

echo PHP_EOL . "------------------------------" . PHP_EOL; 

// Essa forma que estruturei o código, o código ficou "mal escrito", pois há duplicidade de código ao exibir a idade, agora vamos ver como podemos exibir a idade de uma melhor forma, já que indepentende de ser maior ou menor de idade vamos exibir a idade:
if ($idade >= 18) {
    echo "Maior de Idade";
} else {
    echo "Menor de Idade";
}

echo PHP_EOL . "Idade: " . $idade . PHP_EOL;
