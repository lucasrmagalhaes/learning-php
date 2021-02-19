<?php

$idade = 21;

echo "Você só pode entrar a partir de 18 anos" . PHP_EOL;

if ($idade == 18 || $idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL; 
    echo "Pode entrar";
}

if ($idade == 18 or $idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL; 
    echo "Pode entrar";
}

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL; 
    echo "Pode entrar";
}