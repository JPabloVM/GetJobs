<?php 
    session_start();
    include("conexao.php");
    $id_usuario = $_SESSION['id_usuario'];

    $sqlUpdate = "DELETE from Usuario where id_usuario= $id_usuario";

    $result = $mysqli->query($sqlUpdate);

    session_destroy();
    header("Location: Login.html");
?>