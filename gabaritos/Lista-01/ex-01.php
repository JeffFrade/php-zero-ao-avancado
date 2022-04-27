<?php

// Criando as 4 notas:
$nota1 = 8;
$nota2 = 9;
$nota3 = 7;
$nota4 = 10;

// Fazendo o cálculo da média:
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

// Fazendo a verificação para conferir se o aluno atingiu a média:
if ($media >= 6) {
    // Caso consiga atingir a média
    echo "Aprovado";
} else {
    // Caso não consiga atingir a média
    echo "Reprovado";
}

// Exibindo a média:
echo PHP_EOL;
echo "Média: " . $media;
