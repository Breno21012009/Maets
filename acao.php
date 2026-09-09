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
            Jogos de Ação
        </h1>

        <p class="text-secondary">
            Aventuras intensas e grandes desafios.
        </p>

    </div>

    <!-- Jogos -->
     <div class="row g-4">

        <!-- 1 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow">
                <img src="img/gtaV_quadrada_sem_borda.jpg" class="card-img-top" style="height:280px; object-fit:contain; background:#000;">
                <div class="card-body">
                    <h5 class="card-title">Grand Theft Auto V</h5>
                    <p class="card-text">Ação • Mundo Aberto</p>
                    <a href="detalhegta1.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>

        <!-- 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow">
                <img src="img/rdrcapa2.jpg" class="card-img-top" style="height:280px; object-fit:contain; background:#000;">
                <div class="card-body">
                    <h5 class="card-title">Red Dead Redemption 2</h5>
                    <p class="card-text">Ação • Aventura</p>
                    <a href="detalheRdr.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>

        <!-- 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow">
                <img src="img/gowcapaa.jpg" class="card-img-top" style="height:280px; object-fit:contain; background:#000;">
                <div class="card-body">
                    <h5 class="card-title">God of War</h5>
                    <p class="card-text">Ação • Mitologia</p>
                    <a href="detalheGow.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>

        <!-- 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow">
                <img src="img/spidercapaa.jpg" class="card-img-top" style="height:280px; object-fit:contain; background:#000;">
                <div class="card-body">
                    <h5 class="card-title">Marvel's Spider-Man II</h5>
                    <p class="card-text">Ação • Aventura</p>
                    <a href="detalheSpider.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>

        <!-- 5 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow">
                <img src="img/ghostcapaa.webp" class="card-img-top" style="height:280px; object-fit:contain; background:#000;">
                <div class="card-body">
                    <h5 class="card-title">Ghost of Tsushima</h5>
                    <p class="card-text">Ação • Samurai • Mundo Aberto</p>
                    <a href="detalheGhost.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>

          <!-- 9 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow">
                <img src="img/unchartedcapa.webp" class="card-img-top" style="height:280px; object-fit:contain; background:#000;">
                <div class="card-body">
                    <h5 class="card-title">Uncharted 4</h5>
                    <p class="card-text">Ação • Aventura</p>
                    <a href="detalheUncha.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>


    <!-- 10 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow">
                <img src="img/acmcapa2.avif" class="card-img-top" style="height:280px; object-fit:contain; background:#000;">
                <div class="card-body">
                    <h5 class="card-title">Assassin's Creed Mirage</h5>
                    <p class="card-text">Ação • Aventura • História</p>
                    <a href="detalheCreed.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>

          <!-- 11 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow">
                <img src="img/thelastcapa.webp" class="card-img-top" style="height:280px; object-fit:contain; background:#000;">
                <div class="card-body">
                    <h5 class="card-title">The Last of Us Part I</h5>
                    <p class="card-text">Ação • Aventura</p>
                    <a href="detalheThelast.php" class="btn btn-primary w-100">Ver Jogo</a>
                </div>
            </div>
        </div>

     
    

</div>

<?php include "footer.php"; ?>