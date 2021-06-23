# CreditoParaTodxs


O **CréditoParaTodxs** é uma aplicação desenvolvida em **PHP** que consiste na implementação da funcionalidade de disponiblização de crédito de maneira fácil e rápida. Para tanto foi desenvolvida uma interface web que permite ao cliente a interação com "um sistema" que permite contratar o serviço por ela.

## Linguagens utilizadas

- PHP 7.2.5|8.0
- HTML 5
- CSS 3
- MySQL
- Laravel 6.20.26
- JQuery 3.3.1

## Desenvolvimento da interface

- Projeto inicial desenvolvido no aplicativo AdobeXD
- [Interface inicial](https://xd.adobe.com/view/5f28208a-4f8f-4da5-a833-66abfede20db-0a7b/)
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
- Executar o **Laragon**
- Ir no canto inferior direito na opção **Root**
- Colar a pasta ja extraida
- Voltar no Laragon
- Entrar na opção **Terminal**
- Digitar **cd  CreditoParaTodxs-master**
- Digitar **code .**
- Ir no arquivo .env.exemplo e mudar a **DB_DATABASE=** e colocar **banco** ficando **DB_DATABASE=banco**
- Digitar no terminal do Visual Studio **cp .env.exemplo .env**
- É necessário criar um banco de dados no Laragon:
    - Clicando em **Banco de Dados**
    - Apertar no canto inferior esquerdo **Novo**
    - Apertar em **Abrir**
    - Clicar com o botão direito em **Unnamed**
    - Passar o mouse em cima de **Criar novo** e depois apertar em **Banco de dados**
    - Botar o nome como **banco** (tudo minúsculo) e clicar em **OK**
    - Apertar em **Iniciar tudo**
- Digitar no Terminal do Visual Studio **composer install**
- No terminal do Visual Studio digitar **php artisan key:generate**
- Digitar no terminal do Visual Studio **php artisan migrate**
- Digitar no terminal do Visual Studio **php artisan serve**
- Clicar no link que aparecerá com **Crt+Click**



