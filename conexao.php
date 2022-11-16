<?php

$hostname = "localhost";
$bancodedados = "getjobs";
$usuario = "root";
$senha = "Ndantas1516!";
//conecta com o banco
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
//Verifica conexão 
if($mysqli->connect_error){
    die("Falha ao conectar no banco de dados");
}