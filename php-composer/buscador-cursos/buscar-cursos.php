#!/usr/bin/env php

<?php

require 'vendor/autoload.php';

// Teste::metodo();

use LucasRMagalhaes\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([ 'base_uri' => 'https://www.alura.com.br/', 'verify' => false ]);
$crawler = new Crawler();

$buscardor = new Buscador($client, $crawler);

$cursos = $buscardor->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    exibeMensagem($curso);
}