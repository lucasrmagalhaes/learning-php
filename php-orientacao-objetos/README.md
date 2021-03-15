<h1 align="center">Orientação a Objetos com PHP: Classes, Métodos e Atributos</h1>

<details>
  <summary><strong>Problemas da Programação Procedural</strong></summary>
  <br/>
  <ul>
    <li><a href="https://github.com/lucasrmagalhaes/learning-php/blob/main/php-orientacao-objetos/src/conta.php">Definição explícita de dados</a></li>
  </ul>
</details>

<details>
  <summary><strong>Introdução à Orientação a Objetos</strong></summary>
  <br/>
  <ul>
    <li><a href="#">#</a></li>
  </ul>
  <p align="justify">
    Classe é a forma de bolo. Objeto é o bolo em si. Quando criamos uma variável a partir de uma classe, estamos criando um objeto, e a classe é apenas o tipo deste objeto.
  </p>
  <pre>
  php -a para acessar o terminal interativo do PHP e realizar alguns testes:

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