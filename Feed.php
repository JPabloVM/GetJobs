<?php
$c = $_GET['cargo'];
include("conexao.php");
$sql_code = "SELECT * FROM Usuario as U where U.cargo = '$c'";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>GetJobs</title>
</head>
<main>

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
        </div>
        <!--Logo e topo da Pagina-->
        <nav>
            <div class="nav-wrapper blue darken-3">
                <a href="#" class="brand-logo center">GetJobs</a>
            </div>
        </nav>
        <!--fim do Logo e topo da Pagina-->
        <div class="container">

            <?php if ($sql_query->num_rows > 0): ?>
            <?php while ($usuario = $sql_query->fetch_assoc()): ?>
            <ul class="collection">
                <li class="collection-item avatar">
                    <img src="<?= $usuario['ftPerfil'] ?>" alt="usuario" class="circle">
                    <span class="title">
                        <?= $usuario['nmUsuario'] ?>
                    </span>
                    <p>
                        <?= $usuario['descricao'] ?>
                    </p>
                    <a href="Perfil.php?id=<?= $usuario['id_usuario'] ?>" class="secundary-content"><i
                            class="arrow_forward">perfil</i></a>
                </li>
            </ul>
            <?php endwhile ?>
            <?php endif ?>
        </div>

    </body>
</main>


<footer class="page-footer blue-grey lighten-4">
    <div class="container">

        <div class="row">
            <div class="col s6 blue darken-3">
                <a href="Home.php" class="rigth-align">
                    <img src="img/home_fill0_wght400_grad0_opsz48_1.png" alt="menu">
                </a>
            </div>
            <div class="col s6 blue-grey lighten-2">
                <a href="MeuPerfil.php" class="center-align">
                    <img src="img/person_fill0_wght400_grad0_opsz48_1.png" alt="perfil">
                </a>
            </div>
        </div>
    </div>
    <script language="javascript" type="text/javascript" src="js/script.js" defer></script>
</footer>

</html>