<?php

/** Só aceita string e inteiro. Inserido outro valor será convertido para inteiro. */

$array = [
    1 => 'a', // 1
    '1' => 'b', // string convertido para 1
    1.5 => 'c', // float convertido para 1
    true => 'd' // true = 1
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}

/** https://www.php.net/manual/pt_BR/language.types.array.php */