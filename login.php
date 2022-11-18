<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: Login.html');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario['nome'];
	header('Location: Home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: Login.html');
	exit();
}
?>