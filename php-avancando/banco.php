<?php

/**
 * include - arquivo opcional
 * require - arquivo obrigatório 
 * require_once - faz a verificação se já existe e segue sendo obrigatório
 */

require_once 'funcoes.php'; 

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
        "CPF: $cpf | Titular: {$conta['titular']} | Saldo: {$conta['saldo']}"
    );   
}