<?php include "header.php"; ?>

<?php

// ======================================
// JOGOS EM PROMOÇÃO
// ======================================

$jogosPromocao = [

    [
        "nome" => "Call of Duty Modern Warfare III",
        "descricao" => "Guerra intensa, ação explosiva e adrenalina do início ao fim.",
        "preco_original" => 399.90,
        "preco_promocional" => 299.00,
        "imagem" => "img/callof.jpg",
        "pagina" => "detalheCallof.php"
    ],

    [
        "nome" => "Black Myth: Wukong",
        "descricao" => "Uma jornada épica de fantasia, mitologia e batalhas intensas.",
        "preco_original" => 299.90,
        "preco_promocional" => 229.99,
        "imagem" => "img/BLACKK.png",
        "pagina" => "detalheBlack.php"
    ],

    [
        "nome" => "Tekken 8",
        "descricao" => "Lutas eletrizantes, golpes devastadores e rivalidades épicas.",
        "preco_original" => 199.90,
        "preco_promocional" => 106.14,
        "imagem" => "img/tekken.jpg",
        "pagina" => "detalheTekken.php"
    ],

    [
        "nome" => "Mafia",
        "descricao" => "Uma jornada de crime, poder e vingança no submundo da máfia.",
        "preco_original" => 59.90,
        "preco_promocional" => 31.00,
        "imagem" => "img/MAFIAA.png",
        "pagina" => "detalheMafia.php"
    ]

];

?>

<div class="container my-5">

    <!-- TÍTULO -->
    <div class="text-center mb-5">

        <h2 class="fw-bold">
            Jogos em Promoção
        </h2>

        <p class="text-muted">
            Aproveite nossas ofertas e economize na compra dos seus jogos favoritos.
        </p>

    </div>


    <!-- JOGOS -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

        <?php foreach ($jogosPromocao as $jogo): ?>

            <div class="col">

                <div class="card h-100 shadow-sm">

                    <!-- IMAGEM -->
                    <img
                        src="<?php echo $jogo["imagem"]; ?>"
                        class="card-img-top"
                        style="height: 280px; object-fit: cover; object-position: center;"
                        alt="<?php echo htmlspecialchars($jogo["nome"]); ?>"
                    >


                    <div class="card-body d-flex flex-column justify-content-between">

                        <div>

                            <!-- NOME -->
                            <h5 class="card-title fw-bold">
                                <?php echo $jogo["nome"]; ?>
                            </h5>


                            <!-- DESCRIÇÃO -->
                            <p class="card-text text-muted small">
                                <?php echo $jogo["descricao"]; ?>
                            </p>

                        </div>


                        <div>

                            <!-- PREÇOS -->
                            <div class="mb-3">

                                <!-- PREÇO ORIGINAL RISCADO -->
                                <span class="text-muted text-decoration-line-through me-2">
                                    R$
                                    <?php echo number_format(
                                        $jogo["preco_original"],
                                        2,
                                        ",",
                                        "."
                                    ); ?>
                                </span>


                                <!-- PREÇO PROMOCIONAL -->
                                <span class="fw-bold text-success fs-5">
                                    R$
                                    <?php echo number_format(
                                        $jogo["preco_promocional"],
                                        2,
                                        ",",
                                        "."
                                    ); ?>
                                </span>

                            </div>


                            <!-- DESCONTO -->
                            <?php

                            $desconto = (
                                ($jogo["preco_original"] - $jogo["preco_promocional"])
                                / $jogo["preco_original"]
                            ) * 100;

                            ?>

                            <span class="badge bg-danger mb-3">
                                <?php echo round($desconto); ?>% OFF
                            </span>


                            <!-- BOTÃO -->
                            <a
                                href="<?php echo $jogo["pagina"]; ?>"
                                class="btn btn-dark w-100"
                            >
                                Ver jogo
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<?php include "footer.php"; ?>