<?php

// Atribuindo peso e altura:
$peso = 70;
$altura = 1.7;

// Calculando o IMC:
$imc = $peso / ($altura * $altura);

// Verificando em qual faixa o IMC se encontra:
if ($imc < 18.5) {
    echo "Abaixo do Peso";
} else if ($imc >= 18.5 && $imc < 25) {
    echo "Peso Normal";
} else if ($imc >= 25 && $imc < 35) {
    echo "Acima do Peso";
} else if ($imc >= 35 && $imc < 40) {
    echo "Muito Acima do Peso";
} else {
    echo "Obesidade";
}

// Exibindo o valor do IMC:
echo PHP_EOL;
echo "IMC: " . $imc;
