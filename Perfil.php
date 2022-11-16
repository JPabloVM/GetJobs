<?php

include("conexao.php");
(isset($_GET['id'])) ? $id_usuario = $_GET['id'] : null;
$sql_code = "SELECT * FROM Usuario where id_usuario = $id_usuario ";
$sql_code2 = "SELECT * FROM Habilidades where id_usuario = $id_usuario ";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
$sql_query2 = $mysqli->query($sql_code2) or die($mysqli->error);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Perfil</title>
</head>

<body>
    <div class="container">

        <?php while ($usuario = $sql_query->fetch_assoc()): ?>
        <div class="hamburguer">
            <div class="line" id="line1"></div>
            <div class="line" id="line2"></div>
            <div class="line" id="line3"></div>
            <span>Fechar</span>
        </div>

        <header>
            <div class="img-wrapper">
                <img src="img/perfil/bg.jpg" alt="foto de capa">
            </div>
            <div class="perfil">
                <img src=<?= $usuario["ftPerfil"] ?> alt="foto de perfil">
                <h1>
                    <?= $usuario['nmUsuario'] ?>
                </h1>
                <?php while ($habilidades = $sql_query2->fetch_assoc()): ?>
                <h2>
                    <?= $habilidades['cargo'] ?>
                </h2>
                <?php endwhile ?>
            </div>
        </header>
        <aside class="sidebar">

            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="Home.php" class="menu-link">Home</a></li>
                    <li class="menu-item"><a href="MeuPerfil.php" class="menu-link">Meu Perfil</a></li>
                </ul>
            </nav>
        </aside>
        <!-- Inicio da descricao-->
        <div class="descricao">

            <textarea disabled name="descricao">
            <?= $usuario['descricao'] ?>

            </textarea>


        </div>
        <!-- Fim da descricao-->
        <!-- Inicio do botão para solicitar-job-->
        <div class="solicitar-job">
            <button type="submit">Solicitar Job</button>
        </div>
        <!-- Fim do botão para solicitar-job-->
        <?php endwhile ?>

    </div>
</body>
<script language="javascript" type="text/javascript" src="js/script.js"></script>

</html>