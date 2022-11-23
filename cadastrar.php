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
$Cargo = mysqli_real_escape_string($mysqli, ($_POST['cargo']));
$File = mysqli_real_escape_string($mysqli, ($_POST['ftPerfil']));

$upload = salvarFtperfil($_FILES);
if(gettype($upload) == "string"){
	$File = $upload;
}

$sql = "select count(*) as total from Usuario where login = '$Login'";
$result = $mysqli->query($sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: Cadastro.html');
	exit;
}

$sql = "INSERT INTO Usuario(nmUsuario, cpf, dtNascimento, email, endereco, numero, cep, login, senha, ftPerfil, descricao,cargo,ddd,telefone)
        VALUES('$nome','$Cpf', '$DatadeNascimento', '$Email', '$Endereco', '$Numero', 
        '$Cep', '$Login', '$Senha', '$File', '$Descricao', '$Cargo', '$DDD', '$Telefone')";

if($mysqli->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	header('Location: Login.html');
	exit;
}else{
	echo $mysqli->error;
}

$mysqli->close();


function salvarFtperfil($file){
	$fotoDir = "img/ftPerfil/";
	$fotoPath = $fotoDir . basename($file["ftPerfil"]["name"]);
	$fotoTmp = $file["ftPerfil"]["tmp_name"];
	if(move_uploaded_file($fotoTmp, $fotoPath)){
		return $fotoPath;
	}else{
		return false;
	}
}
?>

