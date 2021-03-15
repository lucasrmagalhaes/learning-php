<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();

$primeiraConta->deposita(500);
$primeiraConta->saca(300);
$primeiraConta->defineCpfTitular('033.871.800-12');

echo $primeiraConta->recuperaSaldo();
echo $primeiraConta->recuperaCpfTitular();