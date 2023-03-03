### PHP Composer: Dependências, Autoload e Publicação

[Composer](https://getcomposer.org/)

- Composer é um gerenciador de dependências PHP;
- Ele guarda as dependências dentro do projeto;
- Se quisermos uma dependência global, devemos usar o global command;
- Um pacote sempre segue a nomenclatura: ```<vendor>/<name>```;
- As meta-informações de uma dependência ficam salvas no arquivo composer.json; e
- O comando composer init inicializa o composer.json.

```
composer --version
mv composer.phar /usr/local/bin/composer
```

```
composer init
```

Use as seguinte informações:
- Package Name: seu-nickname/buscador-cursos
- Description: Projeto que busca cursos no site da alura
- Author: Seu Nome
- Minimum Stability: deixa em branco
- Package Type: library
- License: deixa em branco

**O que é o Vendor Name no nome do pacote distribuído com Composer?**
- É o nome da pessoa ou companhia que distribui o pacote.

[Packagist](https://packagist.org/)

```
composer require guzzlehttp/guzzle
```

```
composer install
```

```
composer update
```

**Como posso instalar um pacote utilizando o Composer?**
- Executando o comando composer require ```<pacote>```
- Adicionando no item require do ```composer.json``` e executando o comando composer update

```
composer require symfony/css-selector
```

**Autoload**
- Carregar o código responsável por realizar o autoload de classes
- Neste arquivo, o Composer faz o trabalho necessário para definir um autoload de classes de forma que seja possível utilizar as dependências sem incluir seus arquivos separadamente. Falaremos mais sobre autoload durante este treinamento.

[PHP-FIG](https://www.php-fig.org/)

**Quais os principais pontos da PSR-4?**
- Todos os arquivos devem ter como seu nome o nome da classe contida nele e a extensão ```.php```
    - A classe Teste deve estar no arquivo chamado ```Teste.php```, por exemplo.
- Cada um dos namespaces após o vendor namespace deve ser mapeados para uma estrutura de diretórios
    - Levando em consideração que ```Alura\Namespace\Padrao``` está mapeado para ```/src/php/code```, a classe ```Alura\Namespace\Padrao\Helper\ClasseHelper``` deve estar no caminho ```/src/php/code/Helper/ClasseHelper.php```.
- Um vendor namespace (namespace raiz ou padrão) deve ser mapeado para uma pasta base da aplicação
    - Sempre precisa haver um mapeamento entre um namespace raiz para uma pasta base. Ex.: Todas as classes e namespaces que tiverem no namespace Alura\Namespace\Padrao poderão ser encontrados na pasta ```/src/php/code```.

**Configurando a PSR-4**
```
composer dumpautoload
composer dump-autoload
```

**O que é necessário para configurar a PSR-4 em nosso projeto, levando em consideração que nossa estrutura de arquivos já atende seus requisitos?**
- Basta adicionar na chave psr-4 filha da chave autoload a chave contendo nosso vendor namespace e o valor contendo nossa pasta base
    - Exemplo: ```{ “autoload”: { “psr-4”: { “Alura\\Namespace\\Padrao\\”: “src/php/code/” } } }```

**Classmap e Files**
```
"classmap": ["./Teste.php"],
```

```
composer list
```

**É muito comum trabalharmos em projetos legados que não implementam a PSR-4 em sua estrutura de arquivos.** <br />
**Qual a solução que o Composer nos entrega para conseguirmos utilizar um autoload nesses casos?**
- Classmap
    - Com a chave classmap conseguimos informar arquivos que contenham classes para que o Composer as encontre mesmo que não sigam a PSR-4.

**Instalando PHPUnit**
```
composer require --dev phpunit/phpunit
```

Servidor
```
composer install --no-dev
```

**Onde ficam os arquivos executáveis que o Composer traz com os pacotes?**
- Na pasta bin dentro da pasta vendor
    - O Composer organiza muito bem a pasta vendor e dentro dela há uma pasta chamada bin. Nesta ficam todos os arquivos executáveis que nossas dependências possam fornecer. O exemplo utilizado na aula foi a ferramenta de testes PHPUnit.

**Escrevendo um teste**
```
vendor\bin\phpunit tests\TestBuscadorDeCursos.php
```

**Instalando o PHPCS**
```
composer require --dev squizlabs/php_codesniffer
```

```
vendor\bin\phpcs --help
```

```
vendor\bin\phpcs --standard=PSR12 src\
```

[PSR 12](https://www.php-fig.org/psr/psr-12/)

**Instalando o Phan**
```
composer require --dev phan/phan
```

```
vendor\bin\phan --allow-polyfill-parser src\Buscador.php
```

**Scripts no JSON**
```
composer test
composer cs
composer phan
```

**Scripts compostos**
- Possibilidade de configurarmos um processo de build com um único comando

**O que o Composer consegue executar através de seus scripts?**
- Códigos em PHP
- Comandos do sistema operacional

[Scripts - Composer](https://getcomposer.org/doc/articles/scripts.md)

**Versionamento**
```
git tag -a v1.0.0
```

**Bin (Bin)**
```
vendor\bin\buscar-cursos.php.bat
```

**O que é necessário fazer para que nosso arquivo seja disponibilizado na pasta vendor/bin?**
- Informar o caminho do arquivo na entrada bin do nosso composer.json