<?php
    session_start();
    include("verifica_login.php")
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
                        <nav class="blue darken-3">
                            <ul class="menu">
                                <li class="menu-item"><a href="Home.php" class="menu-link">Home</a></li>
                                <li class="menu-item"><a href="MeuPerfil.php" class="menu-link">Meu Perfil</a></li>
                            </ul>
                        </nav>
                    </aside>
                <!--Fim do sidebar-->
            </div>
            <nav>
                <div class="nav-wrapper blue darken-3">
                    <a href="#" class="brand-logo center">GetJobs</a>
                </div>
            </nav>
            <div class="container">
                <div class="blue lighten-4">
                    <h3 class="center-align black-text">Para sua Casa</h1>
                        <div class="row">
                            <!--Limpeza-->
                            <div class="col s4">
                                <div class="card">
                                    <div class="card-image">
                                        <a href="Feed.php?cargo=Limpeza" class="black-text" name="Limpeza">
                                            <img src="img/rectangle_31.png" alt="Limpeza" />
                                        </a>
                                    </div>
                                    <div class="card-action">
                                        <a href="Feed.php?cargo=Limpeza" class="black-text" name="Limpeza">Limpeza</a>
                                    </div>
                                </div>
                            </div>
                            <!--Fim de Limpeza-->
                            <!--Obra-->
                            <div class="col s4">
                                <div class="card">
                                    <div class="card-image">
                                        <a href="Feed.php?cargo=Obra" class="black-text" name="Obra">
                                            <img src="img/rectangle_32.png" alt="Obra" />
                                        </a>
                                    </div>
                                    <div class="card-action">
                                        <a href="Feed.php?cargo=Obra" class="black-text" name="Obra">Obra</a>
                                    </div>
                                </div>
                            </div>
                            <!--Fim de Obra-->
                            <!--Arquitetura-->
                            <div class="col s4">
                                <div class="card">
                                    <div class="card-image">
                                        <a href="Feed.php?cargo=Arquitetura" class="black-text">
                                            <img src="img/rectangle_33.jpg" alt="Arquitetura" />
                                        </a>
                                    </div>
                                    <div class="card-action">
                                        <a href="Feed.php?cargo=Arquitetura" class="black-text">Arquitetura</a>
                                    </div>
                                </div>
                            </div>
                            <!--Fim de Arquitetura-->
                        </div>
                </div>
                <div class="blue lighten-4">
                    <h3 class="center-align black-text">Para sua Empresa</h3>
                    <div class="row">
                        <!--Designer-->
                        <div class="col s4">
                            <div class="card">
                                <div class="card-image">
                                    <a href="Feed.php?cargo=Designer" class="black-text" >
                                        <img src="img/rectangle_34.png" alt="designer" />
                                    </a>
                                </div>
                                <div class="card-action">
                                    <a href="Feed.php?cargo=Designer" class="black-text" >Designer</a>
                                </div>
                            </div>
                        </div>
                        <!--Fim de Designer-->
                        <!--Desenvolvedor-->
                        <div class="col s4">
                            <div class="card">
                                <div class="card-image">
                                    <a href="Feed.php?cargo=Desenvolvedor" class="black-text" >
                                        <img src="img/rectangle_35.png" alt="Desenvolvedor" />
                                    </a>
                                </div>
                                <div class="card-action">
                                    <a href="Feed.php?cargo=Desenvolvedor" class="black-text" >Dev</a>
                                </div>
                            </div>
                        </div>
                        <!--Fim de Desenvolvedor-->
                        <!--Analista-->
                        <div class="col s4">
                            <div class="card">
                                <div class="card-image">
                                    <a href="Feed.php?cargo=Analista" class="black-text">
                                        <img src="img/rectangle_36.png" alt="Analista" />
                                    </a>
                                </div>
                                <div class="card-action">
                                    <a href="Feed.php?cargo=Analista" class="black-text">Analista</a>
                                </div>
                            </div>
                        </div>
                        <!--Fim de Analista-->
                    </div>
                </div>
            </div>
        </body>
    </main>
    <footer class="page-footer blue-grey lighten-4">
        <script language="javascript" type="text/javascript" src="js/script.js" defer></script>
    </footer>
</html>