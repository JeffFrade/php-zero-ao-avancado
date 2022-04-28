<?php

// Até agora trabalhamos com arrays unidimensionais (Também chamados de vetores), agora vamos trabalhar com arrays bidimensionais (Array dentro de array (Também chamados de matrizes))
// Uma matrix ou array bidimensional é apenas um array dentro de outro array, agora é como se nosso edifício tivesse andares e apartamentos (Antes só tínhamos os andares).
// Vamos criar nossa matriz, vamos pensar em um edifício ainda, vamos ter 4 apartamentos por andar, em um edifício de 2 andares + térreo (0), cada apartamento tem 1 morador

$edificio = [
    [
        'Fulano',
        'Ciclano',
        'Beltrano',
        'Mariazinha'
    ],

    [
        'Joãozinho',
        'Paulinho',
        'Marquinhos',
        'Aninha'
    ],

    [
        'Juquinha',
        'Robertinho',
        'Zequinha',
        'Antônia'
    ]
];

// Por se tratar de um array numérico, não precisamos passar as chaves (Índices), o PHP faz a numeração dos índices partindo do 0 de forma automática.

// Agora queremos bater a porta Joãozinho, o Joãozinho mora no apartamento 10 (Lembre-se, arrays numéricos começam sempre em 0):
echo $edificio[1][0] . PHP_EOL;

// A primeira chave (Índice) que passamos, indica em qual andar está nosso apartamento, no caso no 1º andar (Logo será [1]).
// A segunda chave (Índice) que passamos, indica em qual apartamento que queremos chegar, no caso, no apartamento de final 0 (Como os arrays numéricos começam em 0, então nosso primeiro apartamento é 0) (Logo será [0]).

echo "------------------------------" . PHP_EOL; 

// Agora o Paulinho está de mudança em quem entrou em seu lugar é o "Seu Zé", vamos ter que trocar isso no nosso edifício.
// O Paulinho morava no 1º andar, no apartamento de final 1, agora vamos substituir o morador do apartamento em questão:

// Vamos listar o atual morador do apartamento:
echo "Morador do Apartamento 11: " . $edificio[1][1] . PHP_EOL;

// Vamos fazer a troca do morador:
$edificio[1][1] = "Seu Zé";

// Vamos listar o atual morador do apartamento:
echo "Morador do Apartamento 11: " . $edificio[1][1] . PHP_EOL;

echo "------------------------------" . PHP_EOL; 

// Agora vamos mesclar array numérico com associativo, seguindo o mesmo exemplo do edifício, agora vamos colocar o nome de cada morador responsável  e quantos filhos esses moradores tem
// Vamos a criação da matriz:

$edificio = [
    [
        [
            'responsavel' => 'Fulano',
            'filhos' => 5
        ],

        [
            'responsavel' => 'Ciclano',
            'filhos' => 0
        ],

        [
            'responsavel' => 'Beltrano',
            'filhos' => 2
        ],

        [
            'responsavel' => 'Mariazinha',
            'filhos' => 1
        ]
    ],

    [
        [
            'responsavel' => 'Joãozinho',
            'filhos' => 0
        ],

        [
            'responsavel' => 'Paulinho',
            'filhos' => 3
        ],

        [
            'responsavel' => 'Marquinhos',
            'filhos' => 5
        ],

        [
            'responsavel' => 'Aninha',
            'filhos' => 4
        ]
    ],

    [
        [
            'responsavel' => 'Juquinha',
            'filhos' => 2
        ],

        [
            'responsavel' => 'Robertinho',
            'filhos' => 0
        ],

        [
            'responsavel' => 'Zequinha',
            'filhos' => 1
        ],

        [
            'responsavel' => 'Antônia',
            'filhos' => 3
        ]
    ]
];

// Os filhos do apartamento 02 quebraram um vaso do edifício, o apartamento precisa ser multado, mas para isso, precisamos saber quem é o responsável para aplicarmos a multa
// Para obtermos o responsável do apartamento em questão, vai ficar assim:
echo $edificio[0][2]['responsavel'] . PHP_EOL;

// Explicando como chegamos a isso: O andar foi o 0 (Logo chegamos ao [0])
// O apartamento foi o 2 (Logo chegamos ao [2])
// Como queremos saber o responsável (Logo chegamos ao ['responsavel'])
// Juntando tudo, temos no andar 0 [0], no apartamento 2 [2] e gostaríamos de saber o responsável, logo temos ([0][2]['responsavel'])

// Acaba de chegar uma ótima notícia! O filho do Robertinho nasceu!
// Então precisamos alterar o número de filhos que ele tem

// Vamos pegar qual apartamento o Robertinho está e armazenar os dados dele em uma variável para ficar mais fácil de trabalhar:
$dados = $edificio[2][1];

// Exibindo quantos filhos o Robertinho tem:
echo $dados['responsavel'] . " Tem " . $dados['filhos'] . " Filho(s)." . PHP_EOL;

// Armazenamos o array que está dentro da matriz [2][1] dentro de uma variável para que possamos manipular de forma mais fácil
// Fazendo o incremento do número de filhos do Robertinho:
$dados['filhos'] += 1;

// Exibindo quantos filhos o Robertinho tem:
echo $dados['responsavel'] . " Tem " . $dados['filhos'] . " Filho(s)." . PHP_EOL;
