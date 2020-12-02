<p align="center">
  <img src="https://github.com/lucasrmagalhaes/learning-php/blob/main/php.png" alt="DIO" width=300 height=150>
</p>

<details>
    <summary>Introdução ao PHP: Primeiros Passos com a Linguagem</summary>

<p align="center">
  <h1>O que é PHP?</h1>
</p>

### Instalação do PHP no Windows
- Acessar o site: https://www.php.net
- Escolher a versão.
- Windows downloads
- Selecionar a opção: Zip
- Extrair o Zip e colocar os arquivos dentro de uma pasta
- Mover a pasta para a unidade C:
- Copiar o caminho do diretório
- Adicionar o caminho em Variáveis de Ambiente do Windows
- Path - Editar - Novo - Adicionar o caminho: C:\php
- Após realizar esses procedimentos, já é possível testar no terminal
- Abrir o terminar e rodar o comando: php -v

### Instalação do PHP no Linux
-  sudo apt install php

### php.ini
- Existem dois tipos: php.ini-development e php.ini-production
- Escolher um e renomear para php.ini

### echo
- Exibe algo na tela.

<pre>
echo "Olá mundo!";

// Comentário em uma linha.

/**
 * Comentário de várias linhas.
 */
</pre>

### Terminal Interativo
- Inicialização: php -a
- Executar tudo que o PHP oferece direto no terminal.
- Para sair: quit
- Limpar a tela: cls

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

### Caracteres Especiais

<pre>
echo "Quebrando a linha de forma mais legível" . PHP_EOL;
echo "Quebrando a linha!\n";
echo "\tTab - Espaçamento";

/**
 * https://www.php.net/manual/pt_BR/language.types.string.php
 */
</pre>

## Perguntas

### Linguagem Interpretada
- Falando um pouco sobre PHP vimos que ele é uma linguagem de programação interpretada. O que isso quer dizer?

***Resposta***
- Que não é necessário executar um comando para tornar o código executável a cada alteração.

***Explicação***
- O código PHP da forma como escrevemos é interpretado por um programa (chamado de, pasmem, PHP), que executa suas instruções.
- Na prática, o PHP até transforma o código que escrevemos em um outro tipo de código (bytecode) legível pelo interpretador antes de começar a executar, mas isso é um assunto um pouco mais avançado.

### Terminal Interativo
- Como iniciar e parar o terminal interativo do PHP?

***Resposta***
- php -a para iniciar e quit para parar

***Explicação***
- Com o php -a nós iniciamos o terminal interativo, onde podemos digitar código PHP que será executado em tempo real. 
- Quando desejarmos sair, basta executar o comando quit.

### Arquivo PHP
- O que um arquivo PHP precisa ter para ser válido?

***Resposta***
- Precisa começar com <?php

***Explicação***
- Lembre-se que o espaço (ou nova linha) após <?php é obrigatório. 
- Esta informa para o interpretador do PHP que o código que virá deve ser lido e interpretado.

### Variáveis
- Qual a melhor definição do termo variável?

***Resposta***
- Um espaço na RAM onde através de um nome, podemos manipular e acessar algum valor.

***Explicação***
- Além disso, como o próprio nome já diz, variáveis podem variar, ou seja, seus valores podem ser alterados durante a execução do programa.

### Matemática com PHP
- É mais do que comum nós precisarmos realizar operações matemáticas durante a execução de nosso programa. 
- Quais os operadores matemáticos disponíveis no PHP?

***Resposta***
- Soma ( + )
- Subtração ( - )
- Multiplicação) ( * )
- Divisão ( / )
- Exponenciação ( ** )
- Módulo ou Resto da Divisão ( % )

***Explicação***
- Com estes operadores nós conseguimos realizar as operações matemáticas com PHP.

### Tipos
- Quais são os possíveis tipos de dados que uma variável PHP pode armazenar?

***Resposta***
- Inteiro (integer)
- Decimal (float ou double)
- Booleano (verdadeiro ou falso)
- String (texto)

***Explicação***
- Estes são os tipos primitivos do PHP.
- Há tipos mais complexos.

### Variáveis em Textos
- Qual das alternativas a seguir NÃO exibirá o valor da variável $idade corretamente?

***Resposta***
- echo ‘Eu tenho $idade anos’;

***Explicação***
- Esta linha exibiria o texto Eu tenho $idade anos, sem interpretar o valor da variável $idade.

### Quebra de Linha
- Por que utilizar PHP_EOL?

***Resposta***
- Porque esta constante leva em consideração os diferentes caracteres utilizados para quebrar linha em diferentes sistemas operacionais.

***Explicação***
- Alguns sistemas operacionais utilizam o caracter \n para representar uma quebra de linha. Outros, utilizam \r.
- Já o Windows utiliza ambos (\r\n). Utilizando a constante PHP_EOL nos é abstraída esta diferença e podemos deixar nosso código funcionando de forma igual em todas as plataformas.
</details>
