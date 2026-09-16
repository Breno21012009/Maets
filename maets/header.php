<?php
    error_reporting(0);
    session_start();

    date_default_timezone_set('America/Sao_Paulo');

    if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){

        $idUsuario = $_SESSION['idUsuario'];
        $nomeUsuario = $_SESSION['nomeUsuario'];
        $emailUsuario = $_SESSION['emailUsuario'];
        $nivelUsuario = $_SESSION['nivelUsuario'];

        $nomeCompleto = explode(' ', $nomeUsuario);
        $primeiroNome = $nomeCompleto[0];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MAETS - Plataforma Digital de Compra de Jogos</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">

    <link href="css/styles.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">


<style>

    body{
        background:#0f1922;
        color:white;
    }

    .navbar{
        background:#171a21;
    }

    .navbar-brand,
    .nav-link{
        color:white !important;
    }

    .nav-link:hover{
        color:#66c0f4 !important;
    }

    .banner{
        background: linear-gradient(
            rgba(0, 0, 0, 0.6),
            rgba(0, 0, 0, 0.7)
        ), url('img/indie.jpg');

        background-repeat:no-repeat;
        background-size:cover;
        background-position:center top;

        color:white;
        padding:60px 0;
    }

    .audiowide{
        font-family:"Audiowide", sans-serif;
    }

    /* Cards dos jogos */

    .card{
        background:#171a21;
        color:white;
        border:1px solid #2a475e;
    }

    .card-title{
        color:white;
    }

    .card-text{
        color:#c7d5e0;
    }

    /* Botões de categoria */

    .btn-light{
        background:#171a21;
        color:white;
        border:1px solid #2a475e;
    }

    .btn-light:hover{
        background:#2a475e;
        color:white;
    }

</style>

</head>


<body>


<!-- MENU -->

<nav class="navbar navbar-expand-lg navbar-dark">

    <div class="container">

        <!-- LOGO -->

        <a class="navbar-brand audiowide" href="index.php">
            MAETS
        </a>


        <!-- BOTÃO MOBILE -->

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- MENU -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto">


                <!-- LOJA -->

                <li class="nav-item">

                    <a class="nav-link" href="loja.php">
                        Loja
                    </a>

                </li>


                <!-- PROMOÇÕES -->

                <li class="nav-item">

                    <a class="nav-link" href="promocoes.php">
                        Promoções
                    </a>

                </li>


                <!-- SOBRE -->

                <li class="nav-item">

                    <a class="nav-link" href="sobre.php">
                        Sobre
                    </a>

                </li>


            </ul>


            <!-- ÁREA DO USUÁRIO -->

            <ul class="navbar-nav">

                <?php

                if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){

                    if($nivelUsuario == "administrador"){

                        echo "

                        <li class='nav-item dropdown'>

                            <a class='nav-link dropdown-toggle'
                               href='#'
                               data-bs-toggle='dropdown'>

                                <i class='bi bi-person-circle'></i>
                                $primeiroNome

                            </a>


                            <ul class='dropdown-menu dropdown-menu-end'>


                                <!-- PERFIL -->

                                <li>

                                    <a class='dropdown-item' href='perfil.php'>

                                        <i class='bi bi-person'></i>
                                        Meu Perfil

                                    </a>

                                </li>


                                <!-- BIBLIOTECA -->

                                <li>

                                    <a class='dropdown-item' href='biblioteca.php'>

                                        <i class='bi bi-book'></i>
                                        Biblioteca

                                    </a>

                                </li>


                                <!-- AMIGOS -->

                                <li>

                                    <a class='dropdown-item' href='#'>

                                        <i class='bi bi-people'></i>
                                        Amigos

                                    </a>

                                </li>


                                <!-- MINHAS COMPRAS -->

                                <li>

                                    <a class='dropdown-item' href='#'>

                                        <i class='bi bi-handbag'></i>
                                        Minhas Compras

                                    </a>

                                </li>


                                <!-- FAVORITOS -->

                                <li>

                                    <a class='dropdown-item' href='#'>

                                        <i class='bi bi-heart'></i>
                                        Favoritos

                                    </a>

                                </li>


                                <li>
                                    <hr>
                                </li>


                                <!-- GERENCIAR USUÁRIOS -->

                                <li>

                                    <a class='dropdown-item' href='listarUsuarios.php'>

                                        <i class='bi bi-gear'></i>
                                        Gerenciar Usuários

                                    </a>

                                </li>


                                <!-- CADASTRAR JOGO -->

                                <li>

                                    <a class='dropdown-item' href='formJogo.php'>

                                        <i class='bi bi-controller'></i>
                                        Cadastrar Jogo

                                    </a>

                                </li>


                                <!-- CADASTRAR PROMOÇÃO -->

                                <li>

                                    <a class='dropdown-item' href='formPromocoes.php'>

                                        <i class='bi bi-tag'></i>
                                        Cadastrar Promoção

                                    </a>

                                </li>


                                <li>
                                    <hr>
                                </li>


                                <!-- SAIR -->

                                <li>

                                    <a class='dropdown-item' href='logout.php'>
                                        Sair
                                    </a>

                                </li>


                            </ul>

                        </li>

                        ";

                    }

                    else{

                        if($nivelUsuario == "comum"){

                            echo "

                            <li class='nav-item dropdown'>

                                <a class='nav-link dropdown-toggle'
                                   href='#'
                                   data-bs-toggle='dropdown'>

                                    <i class='bi bi-person-circle'></i>
                                    $primeiroNome

                                </a>


                                <ul class='dropdown-menu dropdown-menu-end'>


                                    <!-- PERFIL -->

                                    <li>

                                        <a class='dropdown-item' href='perfil.php'>

                                            <i class='bi bi-person'></i>
                                            Meu Perfil

                                        </a>

                                    </li>


                                    <!-- BIBLIOTECA -->

                                    <li>

                                        <a class='dropdown-item' href='biblioteca.php'>

                                            <i class='bi bi-book'></i>
                                            Biblioteca

                                        </a>

                                    </li>


                                    <!-- AMIGOS -->

                                    <li>

                                        <a class='dropdown-item' href='#'>

                                            <i class='bi bi-people'></i>
                                            Amigos

                                        </a>

                                    </li>


                                    <!-- MINHAS COMPRAS -->

                                    <li>

                                        <a class='dropdown-item' href='#'>

                                            <i class='bi bi-handbag'></i>
                                            Minhas Compras

                                        </a>

                                    </li>


                                    <!-- FAVORITOS -->

                                    <li>

                                        <a class='dropdown-item' href='#'>

                                            <i class='bi bi-heart'></i>
                                            Favoritos

                                        </a>

                                    </li>


                                    <li>
                                        <hr>
                                    </li>


                                    <!-- SAIR -->

                                    <li>

                                        <a class='dropdown-item' href='logout.php'>
                                            Sair
                                        </a>

                                    </li>


                                </ul>

                            </li>

                            ";

                        }

                    }

                }

                else{

                    echo "

                    <li class='nav-item'>

                        <a class='nav-link' href='formLogin.php'>
                            Login
                        </a>

                    </li>

                    ";

                }

                ?>

            </ul>

        </div>

    </div>

</nav>



<!-- BANNER -->

<header class="banner">

    <div class="container text-center">

        <img src="img/logo.maets-removebg-preview.png"
             width="220"
             style="margin-bottom: -70px;">

        <h1 class="audiowide">
            MAETS
        </h1>

        <p class="lead">
            Plataforma Digital de Compra de Jogos Digitais
        </p>

        <a href="explorar.php" class="btn btn-primary">
            Explorar Jogos
        </a>

    </div>

</header>



<!-- CONTEÚDO -->

<section class="py-5">

    <div class="container">