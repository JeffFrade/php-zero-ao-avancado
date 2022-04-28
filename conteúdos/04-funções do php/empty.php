<?php

// Como o próprio nome já sugere, verifica se a variável, objeto ou índice de array está vazio
// null, "", '', 0 => Vazio para o PHP

$val = null;

echo (int) empty($val) . PHP_EOL; // true

$val = 0;

echo (int) empty($val) . PHP_EOL; // true

$val = "";

echo (int) empty($val) . PHP_EOL; // true

$val = '';

echo (int) empty($val) . PHP_EOL; // true

$val = "0";

echo (int) empty($val) . PHP_EOL; // true

$val = "1";

echo (int) empty($val) . PHP_EOL; // false
