<?php

/**
* include - não dá erro (apenas avisa) se o arquivo não existe,
* require - dá erro
* require_once - garante que o arquivo será incluído apenas uma vez

* E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução
* E_ERROR, PHP dá erro e para a execução do programa
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

/** unset - remove variáveis da memória */
unset($contasCorrentes['123.453.242-342']);

titularComLetrasMaiusculas($contasCorrentes['111.222.333-12']);

titularComLetrasMinusculas($contasCorrentes['123.456.789-11']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>