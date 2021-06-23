# CreditoParaTodxs


O **CréditoParaTodxs** é uma aplicação desenvolvida em **PHP** que consiste na implementação da funcionalidade de disponiblização de crédito de maneira fácil e rápida. Para tanto foi desenvolvida uma interface web que permite ao cliente a interação com "um sistema" que permite contratar o serviço por ela.

## Linguagens utilizadas

- PHP 7.2.5|8.0
- HTML 5
- CSS 3
- MySQL
- Laravel 6.20.26
- JQuery 3.3.1

## Começando..

Para executar o projeto, será necessário instalar os seguintes programas:
- [Laragon: Usado para iniciar o servidor web e fazer o gerenciamento do banco de dados (PHP embutido e MySQL)](https://laragon.org/download/index.html)
- [Visual Studio Code: Para desenvolvimento do projeto (ou editor de sua preferência)](https://code.visualstudio.com/download)
- [Composer: é necessário para que as dependencias serem instaladas](https://getcomposer.org/download/)

## Desenvolvimento

Para iniciar o desenvolvimento, é necessário clonar o projeto do GitHub num diretório de sua preferência:
```shell
cd "diretorio de sua preferencia" 
git clone https://github.com/Dalescio/CreditoParaTodxs.git
```
Será necessário executar os seguintes comandos:
-
-cp en.exemplo .env
-É necessário criar um banco de dados no Laragon:
    -Clicando em **Banco de Dados**
    -Apertar no canto inferior esquerdo **Novo**
    -Apertar em **Abrir**
    -Clicar com o botão direito em **Unnamed**
    -Passar o mouse em cima de **Criar novo** e depois apertar em **Banco de dados**
    -Botar o nome como **banco** (tudo minúsculo) e clicar em **OK**


## Construção 

Para que o cadastro seja relizado é necesario criar o Banco de dados e a tabela que irá armazenar as informações do usuário.

```shell
<!--Criação do Bnaco de dados-->
 CREATE DATABASE bemoluser;

 <!--Criação da Tabela-->
  CREATE TALBLE cadastrousuarios(id_usuario INT(11) AUTO_INCREMENT PRIMARY KEY ,
    ->  nome VARCHAR(30) NOT NULL, 
    ->  telefone VARCHAR(30) NOT NULL,
    ->  usuario VARCHAR(40) NOT NULL,
    ->  senha VARCHAR(32) NOT NULL,
    -> cep VARCHAR(10) NOT NULL,
    -> rua VARCHAR(20) NOT NULL,
    -> bairro VARCHAR(20) NOT NULL.
    -> numero  VARCHAR(10) NOT NULL.
    -> cidade VARCHAR(20) NOT NULL,
    -> estado VARCHAR(20) NOT NULL);
```
## Features

O projeto apresentado descreve a implementação de um cadastro de usuarios. Para futuras implementações faz-se necessário desenvolver a área do cliente onde ele poderá interagir  com o sistema por meio de ações tais como enviar uma mensagem e editar ou excluir seus dados cadastrais.

