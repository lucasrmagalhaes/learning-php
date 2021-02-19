<h1 align="center">O que é PHP?</h1>

<details>
  <summary><strong>Instalação do PHP no Windows</strong></summary>
  <br/>
  <ul>
    <li>Acessar o site: <a href="https://www.php.net">PHP</a></li>
    <li>Escolher a versão</li>
    <li>Windows downloads</li>
    <li>Selecionar a opção: Zip</li>
    <li>Extrair o Zip e colocar os arquivos dentro de uma pasta</li>
    <li>Mover a pasta para a unidade C:</li>
    <li>Copiar o caminho do diretório</li>
    <li>Adicionar o caminho em Variáveis de Ambiente do Windows</li>
    <li>Path - Editar - Novo - Adicionar o caminho: C:\php</li>
    <li>Após realizar esses procedimentos, já é possível testar no terminal</li>
    <li>Abrir o terminar e rodar o comando: php -v</li>
</details>

<details>
  <summary><strong>Instalação do PHP no Linux</strong></summary>
  <br />
  
  <pre>sudo apt install php</pre>
  
</details>

<details>
  <summary><strong>php.ini</strong></summary>
  <br />
  <ul>
    <li>Existem dois tipos: php.ini-development e php.ini-production</li>
    <li>Escolher um e renomear para php.ini</li>
</details>

<details>
  <summary><strong>echo</strong></summary>
  <br />
  <p>Exibe algo na tela.</p>

<pre>
echo "Olá mundo!";

// Comentário em uma linha.

/**
 * Comentário de várias linhas.
 */
</pre>

</details>

<details>
  <summary><strong>Terminal Interativo</strong></summary>
  <br />
  <ul>
    <li>Inicialização: php -a</li>
    <li>Executar tudo que o PHP oferece direto no terminal.</li>
    <li>Para sair: quit</li>
    </li>Limpar a tela: cls</li>
  </ul>
</details>

### Ponto e Vírgula
- Final da linha de comando, lembrar de colocar o ;

### Primeiro arquivo PHP
- Rodar um arquivo no terminal: php ola-mundo.php

### IDE
- Recomendadas: Visual Studio Code e PhpStorm.

## Variáveis e Tipos

### O que são variáveis?
- Guardam um valor.

<pre>
$idade = 28;
echo $idade;
</pre>

### Operações Matemáticas

<pre>
$numero1 = 10;
$numero2 = 2;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;
$doisAoCubo = $numero1 ** $numero2;
$restoDaDivisao = $numero1 % $numero2;

echo "Soma: " . $soma . "\n"; 
echo "Subtração: " . $subtracao . "\n";
echo "Multiplicação: " . $multiplicacao . "\n";
echo "Divisão: " . $divisao . "\n";
echo "Dois ao Cubo: " . $doisAoCubo . "\n";
echo "Resto da Divisão: " . $restoDaDivisao . "\n";
</pre>

### Tipos
- Linguagem Dinamicamente Tipada.
- Consegue entender qual o tipo de dados que ele vai utilizar, dependendo do valor.  
- Número Inteiro: integer
- Números Decimais: float e double
- Texto: string
- Booleano: true e false

<pre>
$idade = 28;
echo "Descobrindo o tipo: " . gettype($idade) . "\n";

$salario = 2000.50;
echo "Descobrindo o tipo: " . gettype($salario) . "\n";

$texto = "Olá mundo";
echo "Descobrindo o tipo: " . gettype($texto) . "\n";

$verdadeiro = true;
$falso = false;

echo "Descobrindo o tipo: " . gettype($verdadeiro) . " e " . gettype($falso);
</pre>

### [Problema muito famoso (com qualquer linguagem)](https://floating-point-gui.de/ "Problema muito famoso (com qualquer linguagem)")

## Trabalhando com Texto

### Tipo String
- Duas formas de concatenar:

<pre>
$idade = 28;
echo 'Minha idade é ' . $idade . ' anos.' . "\n";
echo "Minha idade é $idade anos";
</pre>

<details>
  <summary><strong>Caracteres Especiais</strong></summary>
  <br />

<pre>
echo "Quebrando a linha de forma mais legível" . PHP_EOL;
echo "Quebrando a linha!\n";
echo "\tTab - Espaçamento";

/**
 * https://www.php.net/manual/pt_BR/language.types.string.php
 */
</pre>

</details>

<details>
  <summary><strong>Perguntas</strong></summary>
<br />
<hr />
<h5>Linguagem Interpretada</h5>
<p>Falando um pouco sobre PHP vimos que ele é uma linguagem de programação interpretada. O que isso quer dizer?</p>
<h5>Resposta</h5>
<p>Que não é necessário executar um comando para tornar o código executável a cada alteração.</p>
<h5>Explicação</h5>
<p>
  O código PHP da forma como escrevemos é interpretado por um programa (chamado de, pasmem, PHP), que executa suas instruções. <br />
  Na prática, o PHP até transforma o código que escrevemos em um outro tipo de código (bytecode) legível pelo interpretador antes de começar a executar, mas isso é um assunto um pouco mais avançado.
</p>
<hr />
<h5>Terminal Interativo</h5>
<p>Como iniciar e parar o terminal interativo do PHP?</p>
<h5>Resposta</h5>
<p>php -a para iniciar e quit para parar</p>
<h5>Explicação</h5>
<p>
  Com o php -a nós iniciamos o terminal interativo, onde podemos digitar código PHP que será executado em tempo real. <br />
  Quando desejarmos sair, basta executar o comando quit.
</p>
<hr />
<h5>Arquivo PHP</h5>
<p>O que um arquivo PHP precisa ter para ser válido?</p>
<h5>Resposta</h5>
<p>Precisa começar com <?php</p>
<h5>Explicação</h5>
<p>
  Lembre-se que o espaço (ou nova linha) após <?php é obrigatório. <br />
  Esta informa para o interpretador do PHP que o código que virá deve ser lido e interpretado.
</p>
<hr />
<h5>Variáveis</h5>
<p>Qual a melhor definição do termo variável?</p>
<h5>Resposta</h5>
<p>Um espaço na RAM onde através de um nome, podemos manipular e acessar algum valor.</p>
<h5>Explicação</h5>
<p>Além disso, como o próprio nome já diz, variáveis podem variar, ou seja, seus valores podem ser alterados durante a execução do programa.</p>
<hr />
<h5>Matemática com PHP</h5>
<p>
  É mais do que comum nós precisarmos realizar operações matemáticas durante a execução de nosso programa. <br />
  Quais os operadores matemáticos disponíveis no PHP?
</p>
<h5>Resposta</h5>
<ul>
  <li>Soma ( + )</li>
  <li>Subtração ( - )</li>
  <li>Multiplicação) ( * )</li>
  <li>Divisão ( / )</li>
  <li>Exponenciação ( ** )</li>
  <li>Módulo ou Resto da Divisão ( % )</li>
</ul>
<h5>Explicação</h5>
<p>Com estes operadores nós conseguimos realizar as operações matemáticas com PHP.</p>
<hr />
<h5>Tipos</h5>
<p>Quais são os possíveis tipos de dados que uma variável PHP pode armazenar?</p>
<h5>Resposta</h5>
<ul>
  <li>Inteiro (integer)</li>
  <li>Decimal (float ou double)</li>
  <li>Booleano (verdadeiro ou falso)</li>
  <li>String (texto)</li>
</ul>
<h5>Explicação</h5>
<p>
  Estes são os tipos primitivos do PHP. <br />
  Há tipos mais complexos.
</p>
<hr />
<h5>Variáveis em Textos</h5>
<p>Qual das alternativas a seguir NÃO exibirá o valor da variável $idade corretamente?</p>
<h5>Resposta</h5>
<p>echo ‘Eu tenho $idade anos’;</p>
<h5Explicação</h5>
<p>Esta linha exibiria o texto Eu tenho $idade anos, sem interpretar o valor da variável $idade.</p>
<hr />
<h5>Quebra de Linha</h5>
<p>Por que utilizar PHP_EOL?</p>
<h5>Resposta</h5>
<p>Porque esta constante leva em consideração os diferentes caracteres utilizados para quebrar linha em diferentes sistemas operacionais.</p>
<h5>Explicação</h5>
<p>
  Alguns sistemas operacionais utilizam o caracter \n para representar uma quebra de linha. Outros, utilizam \r. <br />
  Já o Windows utiliza ambos (\r\n). Utilizando a constante PHP_EOL nos é abstraída esta diferença e podemos deixar nosso código funcionando de forma igual em todas as plataformas.
</p>
<hr />
</details>
