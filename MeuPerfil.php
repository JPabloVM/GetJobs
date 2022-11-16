<?php
include("conexao.php");
(isset($_GET['id'])) ? $id_usuario = $_GET['id'] : null;
$sql_code = "SELECT * FROM Usuario where id_usuario = $id_usuario ";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="css/meuPerfil.css">
    <title>Meu Perfil</title>
</head>

<body>
    <div class="container">
        <div class="hamburguer">
            <div class="line" id="line1"></div>
            <div class="line" id="line2"></div>
            <div class="line" id="line3"></div>
            <span>Fechar</span>
        </div>

        <?php while ($usuario = $usuarios->fetchArray()) : ?>
            <header>
                <div class="img-wrapper">
                    <img src="img/perfil/bg.jpg" alt="foto de capa">
                </div>
                <div class="editar-perfil">
                    <li><a class="waves-effect waves-light btn" href="EditarPerfil.html">Editar Perfil</a></li>
                </div>

                <div class="perfil">
                    <img src=<?= $usuario["ftPerfil"] ?> alt="foto de perfil">
                    <h1><?= $usuario["nmUsuario"] ?></h1>
                    <h2><?= $usuario['cargo'] ?></h2>
                </div>
            </header>
            <div class="descricao">
                <h1>Sobre mim</h1>
                <textarea disabled name="descricao"><?= $usuario["descricao"] ?></textarea>

            </div>
        <?php endwhile ?>
        <aside class="sidebar">
            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="Home.php" class="menu-link">Home</a></li>
                    <li class="menu-item"><a href="MeuPerfil.php" class="menu-link">Meu Perfil</a></li>
                </ul>
            </nav>
        </aside>


    </div>
</body>
<script language="javascript" type="text/javascript" src="js/script.js"></script>

</html>