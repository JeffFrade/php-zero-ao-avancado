<?php

// Agora vamos abordar mais um e último condicional, o switch case, basicamente a função do switch case é trabalhar com casos, ele recebe a variável e afins e verifica dentro dos seus casos se há algum pronto para executar um determinado trecho de código ou joga para o seu caso padrão (default), seria tipo um else do if.
// Basicamente, tudo que o switch case faz, o if faz, o if faz mais coisas que o switch case, porém, existem casos, principalmente quando se envolve muitas opções, é mais viável utilizar o switch case por causa da simplicidade de se trabalhar e deixar o código mais limpo, mais fácil manutenção, suporte e afins.
// Nesse exemplo, vamos criar uma calculadora, onde podemos informar qual operação queremos efetuar entre os 5 operadores aritméticos que já estudamos no módulo anterior.
// Primeiro passo é criar as variáveis, uma para receber o operador e outras 2 para receberem os valores com os quais efetuaremos as operações:
$op = '+';
$num1 = 15;
$num2 = 10;
// null = valor nulo, equivale a vazio, 0, dentre outras variações, sempre que quiser inicializar uma variável que vai trabalhar com ela depois, utilize o null.
$res = null;

// Vamos criar o nosso switch case:
// No switch, passamos o que queremos verificar
switch ($op) {
    // No case, o que esperamos, nesse caso, esperamos receber um '+' para efeutarmos uma soma
    case '+':
        $res = $num1 + $num2;
        // É necessário o break, pois se ele não existir, ele continua executando os casos abaixo
        break;
    
    case '-':
        $res = $num1 - $num2;
        break;

    case '*':
        $res = $num1 * $num2;
        break;
    
    case '/':
        $res = $num1 / $num2;
        break;
    
    case '%':
        $res = $num1 % $num2;
        break;

    // default, é como se fosse um "else" do switch case, caso nenhum dos casos atenda nossa variável, ele executa esse bloco
    default:
        $res = 'Operador inválido';
        // Por se tratar do último bloco do switch case, não precisa de break, não há mais nada abaixo (Dentro do switch)
}

// Exibe o resultado da operação:
echo $res;

// Também começamos a estruturar melhor nosso código, pois é melhor exibir tudo em um lugar só, pois se quisermos concatenar um texto por exemplo, só precisamos mexer em um lugar só, não em 6 como o exemplo acima.

echo PHP_EOL . "------------------------------" . PHP_EOL; 

// Vamos passar um operador inválido agora para chegarmos ao bloco default:
$op = '$';

switch ($op) {
    // No case, o que esperamos, nesse caso, esperamos receber um '+' para efeutarmos uma soma
    case '+':
        $res = $num1 + $num2;
        // É necessário o break, pois se ele não existir, ele continua executando os casos abaixo
        break;
    
    case '-':
        $res = $num1 - $num2;
        break;

    case '*':
        $res = $num1 * $num2;
        break;
    
    case '/':
        $res = $num1 / $num2;
        break;
    
    case '%':
        $res = $num1 % $num2;
        break;

    // default, é como se fosse um "else" do switch case, caso nenhum dos casos atenda nossa variável, ele executa esse bloco
    default:
        $res = 'Operador inválido';
        // Por se tratar do último bloco do switch case, não precisa de break, não há mais nada abaixo (Dentro do switch)
}

// Exibe o resultado da operação:
echo $res;

echo PHP_EOL . "------------------------------" . PHP_EOL; 

// Agora vamos fazer 2 cases apontarem para o mesmo trecho de código:
$op = 'x';

switch ($op) {
    // No case, o que esperamos, nesse caso, esperamos receber um '+' para efeutarmos uma soma
    case '+':
        $res = $num1 + $num2;
        // É necessário o break, pois se ele não existir, ele continua executando os casos abaixo
        break;
    
    case '-':
        $res = $num1 - $num2;
        break;

    case '*':
    // Agora o 'x' também aponta para multiplicação
    case 'x':
        $res = $num1 * $num2;
        break;
    
    case '/':
        $res = $num1 / $num2;
        break;
    
    case '%':
        $res = $num1 % $num2;
        break;

    // default, é como se fosse um "else" do switch case, caso nenhum dos casos atenda nossa variável, ele executa esse bloco
    default:
        $res = 'Operador inválido';
        // Por se tratar do último bloco do switch case, não precisa de break, não há mais nada abaixo (Dentro do switch)
}

// Exibe o resultado da operação:
echo $res;
