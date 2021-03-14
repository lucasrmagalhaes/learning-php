<?php

/** Só aceita string e inteiro. Inserido outro valor será convertido para inteiro. */

$array = [
    1 => 'a', // 1
    '1' => 'b', // string convertido par 1
    1.5 => 'c', // float convertido para 1
    true => 'd' // true = 1
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}