<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco = new Endereco('São João', 'Geraldo', 'Rua 2', '23');
$lucas = new Titular(new CPF('333.888.800-12'), 'Lucas', $endereco);
$primeiraConta = new Conta($lucas);

$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$deborah = new Titular(new CPF('333.888.800-11'), 'Deborah', $endereco);
$segundaConta = new Conta($deborah);

var_dump($segundaConta);

$novoEndereco = new Endereco('Jesus', 'São Paulo', 'Rua 1', '25');
$carla = new Titular(new CPF('000.888.800-11'), 'Carla', $novoEndereco);
$terceiraConta = new Conta($carla);

echo Conta::recuperaNumeroDeContas();