<?php

$host = "localhost"; //recebe o local do banco de dados
$user = "root"; //qual é o usuário
$pass = ""; //qual é a senha
$dbname = "crud"; //base de dados criada
$port = 3306; //porta, geralmente essa é a padrão

//conexão com a porta
$conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass);


//conexão sem a porta
//$conn = new PDO("mysql:host=$host;dbname=$dbname".$dbname, $user, $pass);