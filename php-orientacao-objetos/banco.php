<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('333.888.800-12', 'Lucas'));

$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular('333.888.800-11', 'Bia'));
var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas();

$terceiraConta = new Conta(new Titular('333.888.800-11', 'Carla'));