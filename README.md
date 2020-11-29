# Introdução ao PHP: Primeiros Passos com a Linguagem.

## 1. O que é PHP?

##### Pergunta:
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

##### php.ini
- Existem dois tipos:
php.ini-development
php.ini-production

- Escolher um e renomear:
php.ini
