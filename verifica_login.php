<?php
if(!$_SESSION['id_usuario']){
    header('Location: Login.html');
    exit();
}
?>