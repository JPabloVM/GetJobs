<?php

session_start();
include("conexao.php");
$id_usuario = $_SESSION['id_usuario'];

if(isset($_POST['update'])){

$nameUser= $_POST['nameUser'];
$datanasc= $_POST['datanasc'];
$cpf= $_POST['cpf'];
$ddd= $_POST['ddd'];
$tel= $_POST['tel'];
$cep= $_POST['cep'];
$adress= $_POST['adress'];
$num= $_POST['num'];
$descricao= $_POST['descricao'];
$email= $_POST['email'];
$cargo= $_POST['cargo'];
$login= $_POST['login'];
$senha= $_POST['senha'];

$sqlUpdate = "UPDATE Usuario SET nmUsuario='$nameUser',cpf='$cpf',dtNascimento='$datanasc',email='$email',endereco='$adress',numero='$num',cep='$cep',descricao='$descricao',cargo='$cargo',ddd='$ddd',telefone='$tel',login='$login',senha='$senha' WHERE id_usuario='$id_usuario'";

$result = $mysqli->query($sqlUpdate);

}
header('Location: EditarPerfil.php');


?>
