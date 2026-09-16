<?php

include "header.php";
include "conexaoBD.php";


// =========================================================
// VERIFICA SE O ID DO JOGO FOI INFORMADO
// =========================================================

if(!isset($_GET["id"]) || !is_numeric($_GET["id"])){

    echo "<div class='container my-4'>
            <div class='alert alert-warning text-center'>
                Jogo não encontrado!
            </div>
          </div>";

    include "footer.php";
    exit;

}


// =========================================================
// PEGA O ID DO JOGO
// =========================================================

$idJogo = intval($_GET["id"]);


// =========================================================
// BUSCA O JOGO NO BANCO
// =========================================================

$consultaJogo = "SELECT * FROM jogos WHERE idJogo = $idJogo";

$resultadoJogo = mysqli_query($conn, $consultaJogo);


// Verifica se encontrou o jogo
if(mysqli_num_rows($resultadoJogo) == 0){

    echo "<div class='container my-4'>
            <div class='alert alert-warning text-center'>
                O jogo solicitado não foi encontrado!
            </div>
          </div>";

    include "footer.php";
    exit;

}


// =========================================================
// ARMAZENA OS DADOS DO JOGO
// =========================================================

$jogo = mysqli_fetch_assoc($resultadoJogo);

$nomeJogo       = $jogo["nomeJogo"];
$descricaoJogo  = $jogo["descricaoJogo"];
$categoriaJogo  = $jogo["categoriaJogo"];
$precoJogo      = $jogo["precoJogo"];

$capaJogo       = $jogo["capaJogo"];
$gameplay1Jogo  = $jogo["gameplay1Jogo"];
$gameplay2Jogo  = $jogo["gameplay2Jogo"];
$gameplay3Jogo  = $jogo["gameplay3Jogo"];

$paginaJogo     = $jogo["paginaJogo"];

?>

<div class="container my-4 text-white">

    <!-- Botão de voltar -->
    <a href="index.php"
       class="btn btn-outline-secondary mb-3">
        &leftarrow; Voltar para os Jogos em Destaque
    </a>


    <div class="row p-4 rounded shadow-lg"
         style="background-color:#0f1922;
                border:1px solid #2a475e;">


        <!-- =================================================
             CARROSSEL DE GAMEPLAYS
        ================================================== -->

        <div class="col-md-7 mb-3 mb-md-0">

            <div id="carouselJogo"
                 class="carousel slide rounded overflow-hidden shadow mb-2"
                 data-bs-ride="carousel">

                <div class="carousel-inner">


                    <!-- Gameplay 1 -->

                    <div class="carousel-item active">

                        <img src="<?php echo $gameplay1Jogo; ?>"
                             class="d-block w-100"
                             style="height:380px;
                                    object-fit:cover;"
                             alt="<?php echo $nomeJogo; ?> - Gameplay 1">

                    </div>


                    <!-- Gameplay 2 -->

                    <div class="carousel-item">

                        <img src="<?php echo $gameplay2Jogo; ?>"
                             class="d-block w-100"
                             style="height:380px;
                                    object-fit:cover;"
                             alt="<?php echo $nomeJogo; ?> - Gameplay 2">

                    </div>


                    <!-- Gameplay 3 -->

                    <div class="carousel-item">

                        <img src="<?php echo $gameplay3Jogo; ?>"
                             class="d-block w-100"
                             style="height:380px;
                                    object-fit:cover;"
                             alt="<?php echo $nomeJogo; ?> - Gameplay 3">

                    </div>

                </div>


                <!-- Botão anterior -->

                <button class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselJogo"
                        data-bs-slide="prev">

                    <span class="carousel-control-prev-icon"
                          aria-hidden="true">
                    </span>

                    <span class="visually-hidden">
                        Anterior
                    </span>

                </button>


                <!-- Botão próximo -->

                <button class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselJogo"
                        data-bs-slide="next">

                    <span class="carousel-control-next-icon"
                          aria-hidden="true">
                    </span>

                    <span class="visually-hidden">
                        Próximo
                    </span>

                </button>

            </div>


            <!-- =================================================
                 MINIATURAS
            ================================================== -->

            <div class="d-flex gap-2 justify-content-start">


                <img src="<?php echo $gameplay1Jogo; ?>"
                     data-bs-target="#carouselJogo"
                     data-bs-slide-to="0"
                     class="img-thumbnail bg-dark border-secondary active"
                     style="width:30%;
                            height:75px;
                            object-fit:cover;
                            cursor:pointer;"
                     alt="Gameplay 1">


                <img src="<?php echo $gameplay2Jogo; ?>"
                     data-bs-target="#carouselJogo"
                     data-bs-slide-to="1"
                     class="img-thumbnail bg-dark border-secondary"
                     style="width:30%;
                            height:75px;
                            object-fit:cover;
                            cursor:pointer;"
                     alt="Gameplay 2">


                <img src="<?php echo $gameplay3Jogo; ?>"
                     data-bs-target="#carouselJogo"
                     data-bs-slide-to="2"
                     class="img-thumbnail bg-dark border-secondary"
                     style="width:30%;
                            height:75px;
                            object-fit:cover;
                            cursor:pointer;"
                     alt="Gameplay 3">

            </div>

        </div>



        <!-- =================================================
             PAINEL LATERAL
        ================================================== -->

        <div class="col-md-5 d-flex flex-column justify-content-between">

            <div>


                <!-- Nome -->

                <h1 class="fw-bold text-white mb-2">

                    <?php echo $nomeJogo; ?>

                </h1>


                <!-- Categoria -->

                <span class="badge bg-secondary mb-3">

                    <?php echo $categoriaJogo; ?>

                </span>


                <!-- Descrição curta -->

                <p class="text-secondary mt-1 mb-3">

                    <?php echo $descricaoJogo; ?>

                </p>


                <!-- FICHA TÉCNICA -->

                <div class="p-3 rounded my-3"
                     style="background-color:#121e2b;
                            border:1px solid #1e3548;
                            font-size:0.9rem;">


                    <div class="d-flex justify-content-between mb-2">

                        <span class="text-secondary">
                            Categoria:
                        </span>

                        <span class="text-info fw-bold">
                            <?php echo $categoriaJogo; ?>
                        </span>

                    </div>


                    <div class="d-flex justify-content-between mb-0">

                        <span class="text-secondary">
                            ID do jogo:
                        </span>

                        <span class="text-light">
                            <?php echo $idJogo; ?>
                        </span>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 PREÇO E BOTÃO
            ================================================== -->

            <div class="p-3 rounded d-flex justify-content-between align-items-center"
                 style="background-color:#000000;
                        border:1px solid #364653;">


                <span class="fs-4 text-success fw-bold">

                    R$ <?php echo number_format($precoJogo, 2, ",", "."); ?>

                </span>


                <a href="<?php echo $paginaJogo; ?>"
                   target="_blank"
                   class="btn btn-success fw-bold px-4 py-2">

                    Comprar Agora

                </a>

            </div>

        </div>



        <!-- =================================================
             DESCRIÇÃO COMPLETA
        ================================================== -->

        <div class="col-12 mt-4 pt-3"
             style="border-top:1px solid #364653;">

            <h4 class="text-white fw-bold mb-3">

                Sobre este jogo

            </h4>


            <p class="text-light fs-6"
               style="line-height:1.6;">

                <?php echo $descricaoJogo; ?>

            </p>

        </div>



        <!-- =================================================
             CAPA DO JOGO
        ================================================== -->

        <div class="col-12 mt-4 pt-3"
             style="border-top:1px solid #364653;">

            <h4 class="text-white fw-bold mb-3">

                Capa do jogo

            </h4>


            <img src="<?php echo $capaJogo; ?>"
                 class="img-fluid rounded shadow"
                 style="max-width:300px;"
                 alt="Capa de <?php echo $nomeJogo; ?>">

        </div>



        <!-- =================================================
             FOTOS DA GAMEPLAY
        ================================================== -->

        <div class="col-12 mt-4 pt-3"
             style="border-top:1px solid #364653;">

            <h4 class="text-white fw-bold mb-3">

                Imagens da Gameplay

            </h4>


            <div class="row">


                <div class="col-md-4 mb-3">

                    <img src="<?php echo $gameplay1Jogo; ?>"
                         class="img-fluid rounded"
                         alt="<?php echo $nomeJogo; ?> Gameplay 1">

                </div>


                <div class="col-md-4 mb-3">

                    <img src="<?php echo $gameplay2Jogo; ?>"
                         class="img-fluid rounded"
                         alt="<?php echo $nomeJogo; ?> Gameplay 2">

                </div>


                <div class="col-md-4 mb-3">

                    <img src="<?php echo $gameplay3Jogo; ?>"
                         class="img-fluid rounded"
                         alt="<?php echo $nomeJogo; ?> Gameplay 3">

                </div>

            </div>

        </div>

    </div>

</div>


<?php include "footer.php"; ?>