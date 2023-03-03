<?php

namespace LucasRMagalhaes\BuscadorDeCursos\Tests;

use LucasRMagalhaes\BuscadorDeCursos\Buscador;
use GuzzleHttp\ClientInterface;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\DomCrawler\Crawler;

class TestBuscadorDeCursos extends TestCase {
    private $httpClientMock;
    private $url = 'url-teste';

    protected function setUp(): void {
        $html = <<<FIM
            <html>
                <body>
                    <span class="card-curso__nome">Curso Teste 1</span>
                    <span class="card-curso__nome">Curso Teste 2</span>
                    <span class="card-curso__nome">Curso Teste 3</span>
                </body>
            </html>
        FIM;


        $stream = $this->createMock(StreamInterface::class);

        $stream
            ->expects($this->once())
            ->method('__toString')
            ->willReturn($html);

        $response = $this->createMock(ResponseInterface::class);

        $response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($stream);

        $httpClient = $this->createMock(ClientInterface::class);
        
        $httpClient
            ->expects($this->once())
            ->method('request')
            ->with('GET', $this->url)
            ->willReturn($response);

        $this->httpClientMock = $httpClient;
    }

    public function testBuscadorDeveRetornarCursos() {
        $crawler = new Crawler();

        $buscador = new Buscador($this->httpClientMock, $crawler);
        
        $cursos = $buscador->buscar($this->url);

        $this->assertCount(3, $cursos);
        
        $this->assertEquals('Curso Teste 1', $cursos[0]);
        $this->assertEquals('Curso Teste 2', $cursos[1]);
        $this->assertEquals('Curso Teste 3', $cursos[2]);
    }
}