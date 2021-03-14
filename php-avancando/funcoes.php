<?php

function exibeMensagem(string $mensagem)
{        
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valorASacar) : array 
{
    if ($valorASacar > $conta['saldo']) {
        exiberMensagem("Você não pode sacar!");
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
        exibeMensagem("Informe um valor positivo.");
    }

    return $conta;
}

/** https://www.php.net/manual/pt_BR/book.mbstring.php */
function titularComLetrasMaiusculas (array &$conta) 
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function titularComLetrasMinusculas (array &$conta) 
{
    $conta['titular'] = mb_strtolower($conta['titular']);
}

function exibeConta(array $conta) 
{

    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo " 
        <li>Titular: $titular</li>
        <li>Saldo: $saldo</li><br />
    ";
}