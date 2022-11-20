<?php

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
    <link rel="stylesheet" href="js/EditarPerfil.js">
    <link rel="stylesheet" href="css/EditarPerfil.css">
    

    <title> Editar Perfil</title>
</head>

<body>
    
    <div id=main-container>
        <h1> Edite seu Perfil</h1>
        <a href="#"><h3>Sair</h3></a>

        <form id="register-form">
        <div class="full-box">
                <img class="fotoPerfil" src="img/ellipse_7.png" alt="foto do perfil">
            </div>
            <div class="full-box">
            <a href="#"><img  class="editarImagem" src="img/84380_2.png" alt="editar imagem"></a>
            </div>
            <div class="full-box spacing">
            <label for="name">Nome</label>
                <input type="text" name="name" id="name" placeholder="Nome">
            </div>
            <div class="half-box">
            <label for="nameUser">Nome de Usuario</label>
                <input type="text" name="nameUser" id="nameUser" placeholder="Nome do Usuario" data-min-length="3">
            </div>
            <div class="half-box spacing">
            <label for="datenasc">Data de Nascimento</label>
                <input type="date" name="datanasc" id="datanasc" placeholder="00/00/0000">
            </div>
            <div class="full-box spacing">
            <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="example@email.com" >
            </div>
            <div class="full-box">
            <label for="adress">Endereço</label>
                <input type="text" name="adress" id="adress" placeholder="Rua das Olimpiadas">
            </div>
            <div class="full-box">
            <label for="descricao">Descrição</label>
                <textarea class="descricao" name="descricao"  rows="5" cols="60" style="resize: none" placeholder="Descrição"></textarea>
            </div>
            <div class="full-box">
                <input class="deletar" type="submit" id="btn-submit" value="Deletar Conta">
            </div>
            <div class="full-box">
                <input  class="atualizar" type="submit" id="btn-submit" value="Atualizar"> 
            </div>
        </form>
    </div>
    <p class="error-validation template"></p>
    <script src=""></script>
</body>

</html>