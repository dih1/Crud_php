<?php

$servername = "localhost"; // padrao server local
$database = "crud_estoque"; // alterar conforme seu banco de dados
$username ="root"; // padão - root
$password =""; //senha de conexao do banco de dados.

//create connect

$conexao = mysqli_connect($servername, $username, $password, $database);