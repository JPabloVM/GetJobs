<?php

session_start();
include("conexao.php");
$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
$Cpf = mysqli_real_escape_string($mysqli, $_POST['Cpf']);
$DDD = mysqli_real_escape_string($mysqli, $_POST['DDD']);
$Telefone = mysqli_real_escape_string($mysqli, $_POST['Telefone']);
$DatadeNascimento = mysqli_real_escape_string($mysqli, $_POST['DatadeNascimento']);
$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
$Endereco = mysqli_real_escape_string($mysqli, $_POST['Endereco']);
$Cep = mysqli_real_escape_string($mysqli, $_POST['Cep']);
$Numero = mysqli_real_escape_string($mysqli, $_POST['Numero']);
$Descricao = mysqli_real_escape_string($mysqli, $_POST['Descricao']);
$Login = mysqli_real_escape_string($mysqli, $_POST['Login']);
$Senha = mysqli_real_escape_string($mysqli, trim(md5($_POST['Senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: Cadastro.html');
	exit;
}

$sql = "INSERT INTO Usuario (nmUsuario, cpf, dtNascimento, email, endereco, numero, cep, login, senha, ftPerfil, descricao,cargo,ddd,telefone)
        VALUES('$nome','$Cpf', '$DDD', '$Telefone', '$DatadeNascimento', '$Email', 
        '$Endereco', '$Cep', '$Numero', '$Descricao', '$Login', '$Senha')";

if($mysqli->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$mysqli->close();

header('Location: Login.html');
exit;

?>