<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: Login.html');
	exit();
}

$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "select id_usuario,nmUsuario from usuario where login = '{$usuario}' and senha = md5('{$senha}')";


$result = $mysqli->query($query) or die($mysqli->error);

$row = $result->num_rows;

if($row == 1) {
	 $usuario = mysqli_fetch_assoc($result);
	 $_SESSION['id_usuario'] = $usuario['id_usuario'];
	 header('Location: Home.php');
	 exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: Login.html?err=true');
	exit();
}

?>