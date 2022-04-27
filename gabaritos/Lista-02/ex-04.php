<?php

// Loop para montar o primeiro fator:
for ($i = 1; $i <= 10; $i++) {
    // Loop para montar o segundo fator:
    for ($j = 1; $j <= 10; $j++) {
        // Montando cada linha da tabuada:
        echo $i . ' X ' . $j . ' = ' . ($i * $j) . PHP_EOL;
    }

    // Exibindo a linha que divide as tabuadas:
    echo "------------------------------" . PHP_EOL; 
}
