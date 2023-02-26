<?php

use GuzzleHttp\Client;

$client = new Client();

$resposta = $client->request("GET", "http://alura.com.br/cursos-online-programacao/php");

$html = $resposta->getBody();