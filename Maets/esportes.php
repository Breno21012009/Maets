<?php include "header.php"; ?>

<style>

    .btn-voltar {
        color: #8a9aaa;
        border: 1px solid #71808f;
        background: transparent;
        padding: 8px 14px;
        border-radius: 6px;
        text-decoration: none;
        transition: 0.2s;
    }

    .btn-voltar:hover {
        color: white;
        border-color: white;
        background: rgba(255,255,255,0.05);
    }

</style>

<div class="container py-5">

    <!-- Botão voltar -->
    <a href="index.php" class="btn-voltar mb-4 d-inline-block">
        ← Voltar para o início
    </a>

    <!-- Título -->
    <div class="text-center mb-5">

        <h1 class="text-white fw-bold">
            Jogos de Esportes
        </h1>

        <p class="text-secondary">
            Futebol, basquete, corrida e muito mais.
        </p>

    </div>

    <!-- Jogos -->
    <div class="row g-4">

        <!-- 1 - EA Sports FC 26 -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/fc26.jpeg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="EA Sports FC 26">

                <div class="card-body">

                    <h5 class="card-title">
                        EA Sports FC 26
                    </h5>

                    <p class="card-text">
                        Esportes • Futebol
                    </p>

                    <a href="#"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 2 - NBA 2K -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/nba2k.jpeg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="NBA 2K">

                <div class="card-body">

                    <h5 class="card-title">
                        NBA 2K
                    </h5>

                    <p class="card-text">
                        Esportes • Basquete
                    </p>

                    <a href="#"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 3 - Forza Horizon 5 -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/forza.jpeg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Forza Horizon 5">

                <div class="card-body">

                    <h5 class="card-title">
                        Forza Horizon 5
                    </h5>

                    <p class="card-text">
                        Corrida • Mundo Aberto
                    </p>

                    <a href="#"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 4 - F1 25 -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/f1.jpeg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="F1 25">

                <div class="card-body">

                    <h5 class="card-title">
                        F1 25
                    </h5>

                    <p class="card-text">
                        Esportes • Corrida
                    </p>

                    <a href="#"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 5 - Madden NFL -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/madden.jpeg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Madden NFL">

                <div class="card-body">

                    <h5 class="card-title">
                        Madden NFL
                    </h5>

                    <p class="card-text">
                        Esportes • Futebol Americano
                    </p>

                    <a href="#"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 6 - WWE 2K -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/wwe.jpeg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="WWE 2K">

                <div class="card-body">

                    <h5 class="card-title">
                        WWE 2K
                    </h5>

                    <p class="card-text">
                        Esportes • Luta Livre
                    </p>

                    <a href="#"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 7 - EA Sports UFC -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/ufc.jpeg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="EA Sports UFC">

                <div class="card-body">

                    <h5 class="card-title">
                        EA Sports UFC
                    </h5>

                    <p class="card-text">
                        Esportes • Artes Marciais
                    </p>

                    <a href="#"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 8 - Gran Turismo 7 -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/granturismo.jpeg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Gran Turismo 7">

                <div class="card-body">

                    <h5 class="card-title">
                        Gran Turismo 7
                    </h5>

                    <p class="card-text">
                        Corrida • Simulação
                    </p>

                    <a href="#"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include "footer.php"; ?>