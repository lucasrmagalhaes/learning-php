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
    <li>Limpar a tela: cls</li>
  </ul>
</details>

<details>
  <summary><strong>Ponto e Vírgula</strong></summary>
  <br />
  <p>Final da linha de comando, lembrar de colocar o ;</p>
</details>

<details>
  <summary><strong>Primeiro arquivo PHP</strong></summary>
  <br />
  <p>Rodar um arquivo no terminal: php ola-mundo.php</p>
</details>

<details>
  <summary><strong>IDE</strong></summary>
  <br />
  <p>Recomendadas: Visual Studio Code e PhpStorm.</p>
</details>

<details>
  <summary><strong>Variáveis e Tipos</strong></summary>
  
<br />
<p><strong>O que são variáveis?</strong> Guardam um valor.</p>
  
<pre>
$idade = 28;
echo $idade;
</pre>

<h5>Operações Matemáticas</h5>

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

<h5>Tipos</h5>
  <ul>
    <li>Linguagem Dinamicamente Tipada.</li>
    <li>Consegue entender qual o tipo de dados que ele vai utilizar, dependendo do valor.</li>
    <li>Número Inteiro: integer</li>
    <li>Números Decimais: float e double</li>
    <li>Texto: string</li>
    <li>Booleano: true e false</li>

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

<h5>Trabalhando com Texto - Tipo String</h5>
<p>Duas formas de concatenar:</p>

<pre>
$idade = 28;
echo 'Minha idade é ' . $idade . ' anos.' . "\n";
echo "Minha idade é $idade anos";
</pre>

<p><a href="https://floating-point-gui.de/">Problema muito famoso (com qualquer linguagem)</a></p>

</details>

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