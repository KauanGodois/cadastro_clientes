# 📖 **Cliente Cadastro - Sistema de Gerenciamento de Clientes**
Cliente Cadastro é uma aplicação web simples desenvolvida em PHP que permite gerenciar informações de clientes de maneira eficiente. O sistema permite adicionar, editar, excluir e pesquisar clientes, além de suportar a funcionalidade de paginação para facilitar a navegação pelos registros. A aplicação utiliza um banco de dados MySQL para armazenar as informações dos clientes.

## 📝 **Sumário**
Pré-requisitos
Instalação
Configuração
Uso
Funcionalidades
Tecnologias Utilizadas
Estrutura do Projeto
Contato

## 🔧 **Pré-requisitos**
Antes de iniciar, você precisará ter os seguintes softwares instalados em sua máquina:

XAMPP ou outro servidor LAMP/MAMP/WAMP.
PHP 7.0+
MySQL
Composer (opcional, para gerenciamento de dependências)

## 🚀 **Instalação**
Siga os passos abaixo para configurar a aplicação:

1. Clone o repositório:

git clone https://github.com/seu-usuario/cliente-cadastro.git
cd cliente-cadastro

2. Inicie o servidor XAMPP e certifique-se de que o Apache e MySQL estão em execução.

3. Crie o banco de dados no MySQL:

Acesse o phpMyAdmin em http://localhost/phpmyadmin.
Crie um banco de dados chamado clienteDB.

4. Importe o arquivo SQL para criar as tabelas necessárias:

No phpMyAdmin, selecione o banco de dados clienteDB.
Vá até a aba Importar e selecione o arquivo clienteDB.sql localizado na raiz do projeto.
Clique em Executar para importar as tabelas.

5. Configure o arquivo de configuração:

No diretório do projeto, edite o arquivo config.php com as credenciais do seu banco de dados.

<?php
$servername = "localhost";
$username = "root";
$password = ""; // Insira a senha do MySQL, se houver
$dbname = "clienteDB";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

6. Abra o navegador e acesse:

http://localhost/cliente-cadastro/index.php

## ⚙️ **Configuração**
Certifique-se de configurar corretamente as credenciais do banco de dados no arquivo config.php.

<?php
$servername = "localhost";
$username = "root";
$password = ""; // Senha do MySQL
$dbname = "clienteDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

## 🎮 **Uso**
1. Página Inicial: Mostra a lista de clientes com opções para editar e excluir.
2. Adicionar Cliente: Clique no botão Adicionar para ir à página de adição de clientes, onde você pode preencher informações e fazer upload de uma foto.
3. Pesquisar: Utilize o campo de pesquisa para filtrar os clientes por nome.
4. Paginação: Use os botões Anterior e Próxima para navegar entre as páginas de clientes.

## 🛠️ **Funcionalidades**
Adicionar Cliente: Permite inserir novos clientes no banco de dados.
Editar Cliente: Permite atualizar informações dos clientes existentes.
Excluir Cliente: Remove um cliente da base de dados.
Pesquisar Cliente: Pesquisa clientes pelo nome em tempo real.
Paginação: Facilita a navegação pelos registros de clientes.

## 🧰 **Tecnologias Utilizadas**
Front-end: HTML, CSS, JavaScript
Back-end: PHP
Banco de Dados: MySQL
Servidor: Apache via XAMPP

## 🗂️ **Estrutura do Projeto**
/cliente-cadastro
|-- /css
|   |-- add.css             # Estilos para a página de adicionar e editar cliente 
|   |-- index.css           # Estilos globais para a aplicação
|-- /images                 # Imagens utilizadas na aplicação
|-- /uploads                # Diretório para uploads de fotos de clientes
|-- /js
|   |-- scripts.js          # JavaScript para funcionalidades da aplicação
|-- add.php                 # Página para adicionar clientes
|-- config.php              # Configuração do banco de dados
|-- delete.php              # Lógica para excluir clientes
|-- edit.php                # Página para editar clientes
|-- index.php               # Página inicial, lista de clientes
|-- clienteDB.sql           # Script SQL para criar as tabelas no banco de dados
|-- README.md               # Documentação do projeto

## 📞 **Contato**
Nome: Kauan Alves Godois
E-mail: kauan.godois07@gmail.com
