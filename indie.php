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
            Jogos Indie
        </h1>

        <p class="text-secondary">
            Descubra experiências criativas e jogos independentes.
        </p>

    </div>

    <!-- Jogos -->
    <div class="row g-4">


        <!-- 1 - Hollow Knight -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/hollo69.webp"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Hollow Knight">

                <div class="card-body">

                    <h5 class="card-title">
                        Hollow Knight
                    </h5>

                    <p class="card-text">
                        Indie • Metroidvania
                    </p>

                    <a href="detalhehollo.php"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 2 - Hades -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/hades.webp"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Hades">

                <div class="card-body">

                    <h5 class="card-title">
                        Hades
                    </h5>

                    <p class="card-text">
                        Indie • Ação • Roguelike
                    </p>

                    <a href="detalhehades.php"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 3 - Celeste -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/celeste.jpg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Celeste">

                <div class="card-body">

                    <h5 class="card-title">
                        Celeste
                    </h5>

                    <p class="card-text">
                        Indie • Plataforma
                    </p>

                    <a href="detalheceleste.php"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 4 - Cuphead -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/xicara.jpg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Cuphead">

                <div class="card-body">

                    <h5 class="card-title">
                        Cuphead
                    </h5>

                    <p class="card-text">
                        Indie • Ação • Plataforma
                    </p>

                    <a href="detalhexicara.php"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 5 - Stardew Valley -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/fazenda.webp"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Stardew Valley">

                <div class="card-body">

                    <h5 class="card-title">
                        Stardew Valley
                    </h5>

                    <p class="card-text">
                        Indie • Simulação • Fazenda
                    </p>

                    <a href="detalhefazenda.php"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 6 - Undertale -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/under.jpg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Undertale">

                <div class="card-body">

                    <h5 class="card-title">
                        Undertale
                    </h5>

                    <p class="card-text">
                        Indie • RPG • História
                    </p>

                    <a href="detalheundertale.php"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 7 - Dead Cells -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/cells.jpg"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Dead Cells">

                <div class="card-body">

                    <h5 class="card-title">
                        Dead Cells
                    </h5>

                    <p class="card-text">
                        Indie • Ação • Roguelike
                    </p>

                    <a href="detalhedead.php"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


        <!-- 8 - Terraria -->
        <div class="col-md-6 col-lg-3">

            <div class="card h-100 shadow">

                <img src="img/terraria.png"
                     class="card-img-top"
                     style="height:280px; object-fit:contain; background:#000;"
                     alt="Terraria">

                <div class="card-body">

                    <h5 class="card-title">
                        Terraria
                    </h5>

                    <p class="card-text">
                        Indie • Aventura • Sandbox
                    </p>

                    <a href="detalheterraria.php"
                       class="btn btn-primary w-100">
                        Ver Jogo
                    </a>

                </div>

            </div>

        </div>


    </div>

</div>

<?php include "footer.php"; ?>