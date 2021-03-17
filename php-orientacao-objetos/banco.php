<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$lucas = new Titular(new CPF('333.888.800-12'), 'Lucas');
$primeiraConta = new Conta($lucas);

$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$deborah = new Titular(new CPF('333.888.800-11'), 'Deborah');
$segundaConta = new Conta($deborah);

var_dump($segundaConta);

$carla = new Titular(new CPF('000.888.800-11'), 'Carla');
$terceiraConta = new Conta($carla);

echo Conta::recuperaNumeroDeContas();