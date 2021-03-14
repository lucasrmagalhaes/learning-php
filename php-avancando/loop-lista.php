<?php

$idadeList = [18, 45, 19, 22];

/** unset - remove um valor */
unset($idadeList[3]);

/** count - pega todos os valores */
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}