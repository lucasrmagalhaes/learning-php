<?php

$contasCorrentes = [
    
    12345678910 => [
        'titular' => 'Lucas', 
        'saldo' => 1000
    ], 
    
    12345678911 => [
        'titular' => 'Deborah', 
        'saldo' => 3000
    ],

    12345324242 => [
        'titular' => 'Marcelo', 
        'saldo' => 2000
    ]

];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}