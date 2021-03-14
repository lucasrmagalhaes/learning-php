<?php

function exibeMensagem($mensagem) {        
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorASacar) {
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

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

$contasCorrentes['111.222.333-12'] = sacar($contasCorrentes['111.222.333-12'], 300);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        'CPF: ' . $cpf . PHP_EOL .
        'Titular: ' . $conta['titular'] . PHP_EOL .
        'Saldo: ' . $conta['saldo'] . PHP_EOL
    );   
}