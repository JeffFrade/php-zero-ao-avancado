<?php

// Uma alternativa a concatenar diversos valores é utilizar o sprintf (Ele é mais lento para pequenas concatenações).
// O sprinf é uma função que deriva da linguagem C.

// Concatenando 2 valores a uma string:

$item = 'Caneta';
$valor = 1.75;
$concatenado = sprintf('O item %s custa R$ %s', $item, $valor);

// O primeiro parâmetro dessa função é o texto que queremos exibir, os %s são "curingas" (Valores que serão substituidos dento da string)
// Nesse caso, o primeiro %s vai corresponder ao nome do item e o segundo %s ao valor do item, do segundo parâmetro em diante passamos os valores que serão substituídos pelos %s (Passar os valores na ordem que os %s foram colocados).

// Exibindo o resultado:
echo $concatenado;
