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
    <!-- Compiled and minified CSS -->

</head>

<body>
    </div>
    </nav>


    <?php while ($usuario = $usuarios->fetchArray()) : ?>
        <header>
            <div class="img-wrapper">
                <img src="img/perfil/bg.jpg" alt="foto de capa">
            </div>
            <div id="nav-mobile" class="solicitar-job">
                <li><a class="waves-effect waves-light btn" href="#">Editar Perfil</a></li>
            </div>

            <div class="container">
                <div class="perfil">
                    <img src=<?= $usuario["ftPerfil"] ?> alt="foto de perfil">
                    <h1><?= $usuario["nmUsuario"] ?></h1>

                </div>
        </header>
        <div class="descricao">

            <textarea disabled name="descricao"><?= $usuario["descricao"] ?></textarea>

        </div>
    <?php endwhile ?>
    <div class="solicitar-job">
        <button type="submit">Solicitar Job</button>
    </div>

    </div>
</body>

</html>