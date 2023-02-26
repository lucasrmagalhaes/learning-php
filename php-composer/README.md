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