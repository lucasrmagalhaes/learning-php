<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();

$primeiraConta->depositar(500);
$primeiraConta->sacar(200);

echo $primeiraConta->saldo;