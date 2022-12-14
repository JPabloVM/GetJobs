<?php

include("conexao.php");
(isset($_GET['id'])) ? $id_usuario = $_GET['id'] : null;
$sql_code = "SELECT * FROM Usuario where id_usuario = $id_usuario ";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/menu.css">
    <?php while ($usuario = $sql_query->fetch_assoc()): ?>
    <!--Defino que o titulo da página será o nome do usuário-->
    <title>
        <?= $usuario['nmUsuario'] ?>
    </title>
</head>

<body>
    <div class="container">
        <!--Inicio do menu hamburguer-->
        <div class="hamburguer">
            <div class="line" id="line1"></div>
            <div class="line" id="line2"></div>
            <div class="line" id="line3"></div>
            <span>Fechar</span>
        </div>
        <!--Fim do menu hamburguer-->

        <!--Inicio do sidebar do projeto, onde incluo os links que direcionam o usuário para outras páginas do projeto-->
        <aside class="sidebar">
            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="Home.php" class="menu-link">Home</a></li>
                    <li class="menu-item"><a href="MeuPerfil.php" class="menu-link">Meu Perfil</a></li>
                </ul>
            </nav>
        </aside>
        <!--Fim do sidebar-->

        <!--Inicio do header-->
        <div class="sessao-header">
            <div class="img-wrapper">
                <img src="img/perfil/bg.jpg" alt="foto de capa">
            </div>
            <div class="foto-perfil">
                <!--Pego a foto de perfil diretamente do banco usuário-->
                <img src=<?= $usuario["ftPerfil"] ?> alt="foto de perfil">
            </div>
            <div class="dados-perfil">
                <h1>
                    <!--Pego o nome diretamente do banco usuário-->
                    <?= $usuario['nmUsuario'] ?>
                </h1>
                <h2>
                    <!--Pego o cargo diretamente do banco usuário-->
                    <?= $usuario['cargo'] ?>
                </h2>
            </div>
        </div>
        <!--Fim do header-->

        <!-- Inicio da descricao-->
        <div class="descricao">
            <!--Pego a descricao diretamente do banco usuário-->
            <textarea disabled name="descricao">
            <?= $usuario['descricao'] ?>
            </textarea>
        </div>
        <!-- Fim da descricao-->

        <!-- Inicio do botão para solicitar-job-->
        <div class="solicitar-job">
            <button type="submit" id="open-modal">solicitar job</button>
        </div>
        <div class="meuModal">
            <div id="fade" class="hide"></div>
            <div id="modal" class="hide">
                <div class="modal-header">
                    <h2>GetJobs</h2>
                    <button id="close-modal">Fechar</button>
                </div>
                <div class="modal-body">
                    <p>
                    Falta pouco para você conseguir solicitar um job, para isso entre em contato com o <?= $usuario['nmUsuario'] ?> ao clicar no botão do WhatsApp e você será direcionado para conversar com ele(a):
                    </p>
                    
                    <p><a href="https://web.whatsapp.com/send?phone=55<?= $usuario['ddd'] ?><?= $usuario['telefone'] ?>&text=Olá <?= $usuario['nmUsuario'] ?>, vim do GetJobs e gostaria de Solicitar um Job!" target="_blank"><i class="fab fa-whatsapp"></i></a></p>
                    <p>Além disso, caso não consiga contato pelo WhatsApp você pode tentar contato a partir do e-mail a seguir:</p>
                    <p><?= $usuario['email'] ?></p>
                </div>
            </div>
        </div>

        <!-- Fim do botão para solicitar-job-->
        <?php endwhile ?>

    </div>
    
</body>
<!--Chamo o script da pasta js para executar o menu hamburguer-->
<script language="javascript" type="text/javascript" src="js/script.js" defer></script>

</html>