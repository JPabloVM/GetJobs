<?php ?>

<?php
$bd = new SQLite3("PI.sql");
$sql = "SELECT * FROM Usuario";
$usuarios = $bd->query($sql);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <h2>Cargo</h2>
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
                    <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Feed</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Meu Perfil</a></li>
                </ul>
            </nav>
        </aside>


    </div>
</body>

</html>