<!--Inicio de Conexão-->
<?php
session_start();
include("conexao.php");
$id_usuario = $_SESSION['id_usuario'];
$consulta = "SELECT * FROM Usuario where id_usuario = $id_usuario";
$con = $mysqli->query($consulta) or die($mysqli->error);
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
    <link rel="stylesheet" href="css/EditarPerfil.css">

    <title> Editar Perfil</title>

</head>

<body>
    <div id=main-container>
        <h1> Edite seu Perfil</h1>
        <a href="EditarPerfil.php">
            <h3>Voltar</h3>
        </a>
        <?php while ($dados = $con->fetch_array()) { ?>
        <form id="register-form" action="saveEdit.php" method="POST">
        <div class="full-box">
                    <img class="fotoPerfil" src=<?= $dados["ftPerfil"] ?> alt="foto do perfil">
                </div>
            <!-- imagem para alterar a foto de perfil-->
            <div class="full-box">
                <img src="img/84380_2.png" alt="Altere a foto" id="imgPhoto">
            </div>
            <!--upload de arquivo -->
            <input type="file" id="flImage" name="fImage" accept="image/*">
            <!--Campo do Id, deixei invisivel -->
            <input type="text" id="id" name="id" value="<?php echo $dados["id_usuario"] ?>">
            <!--Campo do nome de usuario-->
            <div class="full-box spacing">
                <label for="nameUser">Nome de Usuario</label>
                <input type="text" name="nameUser" id="nameUser" value="<?php echo $dados["nmUsuario"] ?>" required>
            </div>
            <!--Campo da data de nascimento-->
            <div class="half-box spacing">
                <label for="datanasc">Data de Nascimento</label>
                <input type="date" name="datanasc" id="datanasc"value="<?php echo $dados["dtNascimento"] ?>">
            </div>
            <!--Campo do CPF-->
            <div class="full-box spacing">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" value="<?php echo $dados["cpf"] ?>">
                </div>
                <!--Campo do DDD-->
                <div class="half-box spacing">
                    <label for="ddd">DDD</label>
                    <input type="text" name="ddd" id="ddd" value="<?php echo $dados["ddd"] ?>">
                </div>
                 <!--Campo do TELEFONE-->
                <div class="half-box spacing ">
                    <label for="tel">Telefone</label>
                    <input type="text" name="tel" id="tel" value="<?php echo $dados["telefone"] ?>">
                </div>
                <!--Campo do CEP-->
                <div class="full-box">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" value="<?php echo $dados["cep"] ?>">
                </div>
                <!--Campo do endereço-->
                <div class="half-box spacing">
                    <label for="adress">Endereço</label>
                    <input type="text" name="adress" id="adress" value="<?php echo $dados["endereco"] ?>">
                </div>
                <!--Campo do Numero-->
                <div class="half-box spacing">
                    <label for="num">Número</label>
                    <input type="text" name="num" id="num" value="<?php echo $dados["numero"] ?>">
                </div>
                <!--Campo da descrição-->
                <div class="full-box spacing">
                    <label for="descricao">Descrição</label>
                    <textarea class="descricao" name="descricao" id="descricao" rows="5" cols="60" style="resize: none"><?php echo $dados["descricao"] ?></textarea>
                </div>
                <!--Campo do E-mail-->
                <div class="full-box spacing">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" value="<?php echo $dados["email"] ?>">
                </div>
                <!--Campo do Cargo-->
                <div class="full-box spacing">
                    <label for="cargo">Cargo</label>
                    <input type="text" name="cargo" id="cargo" value="<?php echo $dados["cargo"] ?>">
                </div>
                <!--Campo do Login-->
                <div class="full-box spacing">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" value="<?php echo $dados["login"] ?>">
                </div>
                <!--Campo da senha-->
                <div class="full-box spacing">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" value="<?php echo $dados["senha"] ?>">
                </div>

            <!--Botão Atualizar-->
            <div class="full-box">
                <input class="atualizar" type="submit" name="update" id="update" value="Atualizar">
            </div>
            <!--Botão deletar-->
            <div class="full-box">
                    <a href="Deletar.php">
                        <input class="deletar" type="submit" id="btn-submit" value="Deletar Conta" name="Deletar">
                    </a>    
            </div>
        </form>
        <?php } ?>
        <script src="js/Editar.js" defer></script>
</body>

</html>