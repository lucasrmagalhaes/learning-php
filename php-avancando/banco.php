<?php

function exibirMensagem(string $mensagem)
{        
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar) : array 
{
    if ($valorASacar > $conta['saldo']) {
        exibirMensagem("Você não pode sacar!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array 
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibirMensagem("Informe um valor positivo.");
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

$contasCorrentes['111.222.333-12'] = sacar(
    $contasCorrentes['111.222.333-12'], 
    20
);

$contasCorrentes['123.456.789-11'] = depositar(
    $contasCorrentes['123.456.789-11'], 
    1000
);

foreach ($contasCorrentes as $cpf => $conta) {
    exibirMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );   
}