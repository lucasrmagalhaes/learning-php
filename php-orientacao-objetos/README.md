<h1 align="center">Orientação a Objetos com PHP: Classes, Métodos e Atributos</h1>

<details>
  <summary><strong>Problemas da Programação Procedural</strong></summary>
  <br/>
  <ul>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/conta-old.php">Definição explícita de dados</a></li>
  </ul>
</details>

<details>
  <summary><strong>Introdução à Orientação a Objetos</strong></summary>
  <br/>
  <ul>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/src/conta.php">Introdução</a></li>
  </ul>
  <p align="justify">
    Classe é a forma de bolo. Objeto é o bolo em si. Quando criamos uma variável a partir de uma classe, estamos criando um objeto, e a classe é apenas o tipo deste objeto.
  </p>

<pre>
<strong>php -a para acessar o terminal interativo do PHP e realizar alguns testes:</strong>

require 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->saldo = 200;
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Vinicius Dias';

var_dump($primeiraConta); // Verifique que o objeto já possui os dados necessários de uma conta criada

$segundaConta = new Conta();
$segundaConta->cpfTitular = '987.654.321-10';
$segundaConta->nomeTitular = 'Patricia';
$segundaConta->saldo = 1500;

var_dump($primeiraConta); // Verifique que o objeto não teve seus valores alterados
var_dump($segundaConta); // Note que este objeto possui os valores da segunda conta criada
</pre>

</details>

<details>
  <summary><strong>Definindo os Comportamentos</strong></summary>
  <br/>
  <ul>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/src/conta.php">Early Return</a></li>
  </ul>
</details>

<details>
  <summary><strong>Protegendo os Nossos Dados</strong></summary>
  <br/>
  <ul>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/src/conta.php">Encapsulamento</a></li>
  </ul>
</details>

<details>
  <summary><strong>Mais Sobre Métodos</strong></summary>
  <br/>
  <p align="left">Método Construtor, privado e destrutor, e membros estáticos.</p>
  <ul>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/banco.php">Banco</a></li>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/src/conta.php">Conta</a></li>
  </ul>
</details>

<details>
  <summary><strong>Composição de Objetos</strong></summary>
  <br/>
  <p align="left"></p>
  <ul>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/banco.php">Banco</a></li>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/src/conta.php">Conta</a></li>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/src/Titular.php">classe Titular</a></li>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/src/CPF.php">Validação do CPF</a></li>
  </ul>
</details>
