<?php

/*
    Extensão MySQL Melhorada // https://www.php.net/manual/pt_BR/book.mysqli.php //
    Maneira simples de como criar uma conexão com a base de dados. Dessa forma inclue em toda a sua página web 
    via INCLUDE o arquivo "conexao.php".

    *** include(conexao.php); ***
*/

//VARIAVEIS PARA CONEXÃO
$host = "localhost"; // IP do local/servidor onde esta hospedado o banco de dados. Se for na propria máquina usar "LOCALHOST"
$user = "usuarioBancoDeDados"; // Usuário de acesso no banco de dado. Geralmente criado quando instala o WAMP/XAMP.
$pass = "senhaBancoDeDados"; // Senha de acesso no banco de dado. Geralmente criado quando instala o WAMP/XAMP.
$bd = "nomeDoBancoDeDados"; // Nome do Banco de dados.

//EXTENSÃO DO MySQLi PARA CRIAR A CONEXÃO
$mysqli = new mysqli($host, $user, $pass, $bd);

//CHECANDO A CONEXÃO
if ($mysqli->connect_errno) {
    echo "Connect failed: " . $mysqli->connect_errno;
    exit();
};
