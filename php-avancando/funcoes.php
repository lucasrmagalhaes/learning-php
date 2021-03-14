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