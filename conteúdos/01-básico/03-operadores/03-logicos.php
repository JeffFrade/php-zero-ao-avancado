<?php

// Em PHP temos 4 operadores lógicos, sendo eles:

/*
and / && (Mais comum de se encontrar e utilizar) => E/AND (Só retorna verdadeiro caso todas condições sejam verdadeiras)
or / || (Mais comum de se encontrar e utilizar) => OU/OR (Só retorna verdadeiro caso uma das condições sejam verdadeiras)
xor => OU EXCLUSIVO/EXCLUSIVE OR (Só retorna verdadeiro caso haja uma condição verdadeira e uma false) (Pouco utilizado)
! => NÃO/NOT (Um inversor, o que era true, vira false e vice-versa) (Serve apenas para booleanos (Expressões ou variáveis))

No caso de dúvida das portas lógicas / operadores lógicos há um material complementar chamado "portas-logicas.jpeg" para que possa visualizar e ter um melhor entendimento de como elas funcionam.
*/

echo "Porta E/AND";
// Nesse conteúdo vamos utilizar os operadores relacionais que abordamos no conteúdo anterior
// Vamos imaginar um cenário onde temos uma casa de festa e há uma festa fantasia.
// No primeiro cenário, temos as seguintes ordens, precisamos que as pessoas estejam fantasiadas E sejam maiores de 18 anos
// Vamos criar 2 variáveis para simplificar as trocas de valores:
$idade = 18;
$fantasia = true;

echo PHP_EOL;
echo (int)($idade >= 18 && $fantasia == true); // A pessoa está autorizada a entrar na festa, pois é maior de 18 anos e está fantasiada. (1)
// Em primeiro passo nossa expressão executa os operadores relacionais antes do operador lógico.

// Agora vamos tirar a fantasia dessa pessoa e tentar rodar novamente nossa verificação:
$fantasia = false;

echo PHP_EOL;
echo (int)($idade >= 18 && $fantasia == true); // A pessoa não está autorizada a entrar na festa, pois é maior de 18 anos, mas não está fantasiada. (0)

// Agora vamos devolver a fantasia dessa pessoa, diminuir sua idade para 15 anos e tentar rodar novamente nossa verificação:
$fantasia = true;
$idade = 15;

echo PHP_EOL;
echo (int)($idade >= 18 && $fantasia == true); // A pessoa não está autorizada a entrar na festa, pois é menor de 18 anos, mas está fantasiada. (0)

// Agora vamos remover a fantasia dessa pessoa e tentar rodar novamente nossa verificação:
$fantasia = false;

echo PHP_EOL;
echo (int)($idade >= 18 && $fantasia == true); // A pessoa não está autorizada a entrar na festa, pois é menor de 18 anos e não está fantasiada. (0)

echo PHP_EOL . "--------------------------" . PHP_EOL;

echo "Porta OU/OR";
// Vamos manter o mesmo cenário da casa de festa, porém agora a regra pra entrar na festa mudou, OU a pessoa deve ser maior de 18 anos OU estar fantasiada
// Vamos reutilizar as variáveis do exemplo anterior:
$idade = 18;
$fantasia = true;

echo PHP_EOL;
echo (int)($idade >= 18 || $fantasia == true); // A pessoa está autorizada a entrar na festa, pois é maior de 18 anos e está fantasiada. (1)

// Agora vamos tirar a fantasia dessa pessoa e tentar rodar novamente nossa verificação:
$fantasia = false;

echo PHP_EOL;
echo (int)($idade >= 18 || $fantasia == true); // A pessoa está autorizada a entrar na festa, pois é maior de 18 anos, mas não está fantasiada. (1)

// Agora vamos devolver a fantasia dessa pessoa, diminuir sua idade para 15 anos e tentar rodar novamente nossa verificação:
$fantasia = true;
$idade = 15;

echo PHP_EOL;
echo (int)($idade >= 18 || $fantasia == true); // A pessoa está autorizada a entrar na festa, é menor de 18 anos, mas está fantasiada. (1)

// Agora vamos remover a fantasia dessa pessoa e tentar rodar novamente nossa verificação:
$fantasia = false;

echo PHP_EOL;
echo (int)($idade >= 18 || $fantasia == true); // A pessoa não está autorizada a entrar na festa, pois é menor de 18 anos e não está fantasiada. (0)

echo PHP_EOL . "--------------------------" . PHP_EOL;

echo "Porta OU EXCLUSIVO/XOR";

// Vamos manter o mesmo cenário da casa de festa, porém agora a regra pra entrar na festa mudou, a pessoa ou deve estar fantasiada ou ter 18 anos, caso a pessoa seja maior de 18 anos e esteja fantasiada, ela não pode entrar e caso seja menor de 18 anos e sem fantasia também não pode entrar
// O exemplo é um pouco fora do normal, e o operador XOR é pouquíssimo utilizado, serve mais para estudos 

// Vamos reutilizar as variáveis do exemplo anterior:
$idade = 18;
$fantasia = true;

echo PHP_EOL;
echo (int)($idade >= 18 xor $fantasia == true); // A pessoa não está autorizada a entrar na festa, pois é maior de 18 anos e está fantasiada. (0)

// Agora vamos tirar a fantasia dessa pessoa e tentar rodar novamente nossa verificação:
$fantasia = false;

echo PHP_EOL;
echo (int)($idade >= 18 xor $fantasia == true); // A pessoa está autorizada a entrar na festa, pois é maior de 18 anos, mas não está fantasiada. (1)

// Agora vamos devolver a fantasia dessa pessoa, diminuir sua idade para 15 anos e tentar rodar novamente nossa verificação:
$fantasia = true;
$idade = 15;

echo PHP_EOL;
echo (int)($idade >= 18 xor $fantasia == true); // A pessoa está autorizada a entrar na festa, é menor de 18 anos, mas está fantasiada. (1)

// Agora vamos remover a fantasia dessa pessoa e tentar rodar novamente nossa verificação:
$fantasia = false;

echo PHP_EOL;
echo (int)($idade >= 18 xor $fantasia == true); // A pessoa não está autorizada a entrar na festa, pois é menor de 18 anos e não está fantasiada. (0)

echo PHP_EOL . "--------------------------" . PHP_EOL;

echo "Porta OU NAO/NOT";

// Vamos criar uma variável $val com o valor de true:
$val = true;

// Agora vamos inverter o valor booleano de val:
$val = !$val; // O oposto de true é false, logo agora $val tem o valor false

// Exibindo a variável:
echo PHP_EOL;
echo (int) $val;

// Agora vamos inverter novamente o valor booleano de val:
$val = !$val; // O oposto de false é true, logo agora $val tem o valor true

// Exibindo a variável:
echo PHP_EOL;
echo (int) $val;
