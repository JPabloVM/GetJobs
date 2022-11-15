<?php 

$bd = new SQLite3("PI.sql");

$sql = "DROP TABLE IF EXISTS Usuario";

if ($bd->exec($sql)) 
    echo "\ntabela usuario apagada\n";

$sql = "CREATE TABLE Usuario (
    id_usuario int PRIMARY KEY,
    nmUsuario varchar(50),
    cpf varchar(12),
    dtNascimento Date,
    email varchar(50),
    endereco varchar(50),
    numero int,
    cep varchar(12),
    login varchar(50),
    senha varchar(18),
    ftPerfil varchar(200),
    descricao varchar(500)
);
    ";

if ($bd->exec($sql)) 
    echo "\ntabelas criadas\n";
else 
    echo "\nerro ao criar tabelas\n";

$sql = "INSERT INTO Usuario (id_usuario, nmUsuario, cpf, dtNascimento, email, endereco, numero, cep, login, senha, ftPerfil, descricao) 
        VALUES (
            0,
            'Douglas',
            '40586546360',
            '05/10/2001',
            'doug@gmail.com',
            'rua erval seco',
            95,
            06852546,
            'doug',
            19190,
            'https://akamai.sscdn.co/uploadfile/letras/fotos/e/f/d/9/efd9ba55e7245d54782ef93f9bdfe1a9.jpg',
            'Óla meu nome é Douglas'
        )";

if ($bd->exec($sql)) 
    echo "\nusuario inserido com sucesso\n";
else 
    echo "\nerro ao inserir usuario\n";

$sql = "SELECT * FROM Usuario";
$rs = $bd->query($sql);

while($usuario = $rs->fetchArray()){
    print_r($usuario);
}
?>

