<?php

$string = 'Testes de integração com PHP';

echo mb_strlen($string) . PHP_EOL; // Contador
echo mb_strtolower($string) . PHP_EOL; // Minuscula
echo mb_strtoupper($string) . PHP_EOL; // Maiuscula
echo mb_convert_case($string, MB_CASE_TITLE); // Primeira letra maiuscula