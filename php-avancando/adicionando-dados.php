<?php

/** Exemplo 1 - String */

$contasCorrentes = [
    
    '111.222.333-12' => [
        'titular' => 'Lucas', 
        'saldo' => 1000
    ], 
    
    '123.456.789-11' => [
        'titular' => 'Deborah', 
        'saldo' => 3000
    ],

    '123.453.242-342' => [
        'titular' => 'Marcelo', 
        'saldo' => 2000
    ]

];

/** Adicionando */
$contasCorrentes['111.222.333-00'] = [
    'titular' => 'Carla',
    'saldo' => 5000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo 'CPF: ' . $cpf . PHP_EOL . 
         'Titular: ' . $conta['titular'] . PHP_EOL . 
         'Saldo: ' . $conta['saldo'] . PHP_EOL . PHP_EOL;
}

/** Exemplo 2 - Número */

$idadeList = [18, 45, 19, 22];

/** Adicionando */
$idadeList[] = 1;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
