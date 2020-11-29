# Introdução ao PHP: Primeiros Passos com a Linguagem.

## 1. O que é PHP?

##### Pergunta - Linguagem Interpretada:
- Falando um pouco sobre PHP vimos que ele é uma linguagem de programação interpretada. O que isso quer dizer?

##### Resposta:
- Que não é necessário executar um comando para tornar o código executável a cada alteração.

##### Explicação:
- O código PHP da forma como escrevemos é interpretado por um programa (chamado de, pasmem, PHP), que executa suas instruções. 
- Na prática, o PHP até transforma o código que escrevemos em um outro tipo de código (bytecode) legível pelo interpretador antes de começar a executar, mas isso é um assunto um pouco mais avançado.

##### Instalação do PHP - Windows:
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

##### Instalação do PHP - Linux:
-  sudo apt install php

##### php.ini
- Existem dois tipos: php.ini-development e php.ini-production
- Escolher um e renomear para php.ini

##### echo 
- Exibe algo na tela.
##### Terminal Interativo: php -a
- Executar tudo que o PHP oferece direto no terminal.
- Para sair: quit
- Limpar a tela: cls
##### ;
- Final da linha de comando, lembrar de colocar o ;

##### Primeiro arquivo PHP
- Rodar um arquivo no terminal: php ola-mundo.php

##### Pergunta - Terminal Interativo:
- Como iniciar e parar o terminal interativo do PHP?

##### Resposta:
- php -a para iniciar e quit para parar

##### Explicação:
- Com o php -a nós iniciamos o terminal interativo, onde podemos digitar código PHP que será executado em tempo real. 
- Quando desejarmos sair, basta executar o comando quit.

##### IDE:
- Recomendadas: Visual Studio Code e PhpStorm.

##### Pergunta - Arquivo PHP:
- O que um arquivo PHP precisa ter para ser válido?

##### Resposta:
- Precisa começar com <?php

##### Explicação:
- Lembre-se que o espaço (ou nova linha) após <?php é obrigatório. 
- Esta informa para o interpretador do PHP que o código que virá deve ser lido e interpretado.

## 2. Variáveis e Tipos:

##### O que são variáveis?
- Guardam um valor
- EX.: $exemplo = "Minha variável";

##### Pergunta - Variáveis:
- Qual a melhor definição do termo variável?

##### Resposta:
- Um espaço na RAM onde através de um nome, podemos manipular e acessar algum valor.

##### Explicação:
- Além disso, como o próprio nome já diz, variáveis podem variar, ou seja, seus valores podem ser alterados durante a execução do programa.

##### Operações Matemáticas:
<pre>

</pre>