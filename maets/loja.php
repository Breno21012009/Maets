<?php include "header.php"; ?>
<?php include "conexaoBD.php"; ?>

<?php

// Verifica se foi escolhida alguma categoria
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';

// Consulta os jogos
if ($categoria != '') {

    $sql = "SELECT * FROM jogos 
            WHERE categoriaJogo = '$categoria'
            ORDER BY idJogo DESC";

} else {

    $sql = "SELECT * FROM jogos 
            ORDER BY idJogo DESC";

}

$resultado = mysqli_query($conn, $sql);

?>


<!-- TÍTULO -->

<h2 class="mb-4">
    Categorias
</h2>


<!-- ABAS / BOTÕES DE CATEGORIA -->

<div class="row g-3 mb-5">


    <!-- TODOS -->

    <div class="col-6 col-md-3 col-lg-2">

        <a href="loja.php"
           class="btn btn-light w-100 py-3 fs-5">

            Todos

        </a>

    </div>


    <!-- AÇÃO -->

    <div class="col-6 col-md-3 col-lg-2">

        <a href="loja.php?categoria=Ação"
           class="btn btn-light w-100 py-3 fs-5">

            Ação

        </a>

    </div>


    <!-- ESPORTES -->

    <div class="col-6 col-md-3 col-lg-2">

        <a href="loja.php?categoria=Esportes"
           class="btn btn-light w-100 py-3 fs-5">

            Esportes

        </a>

    </div>


    <!-- RPG -->

    <div class="col-6 col-md-3 col-lg-2">

        <a href="loja.php?categoria=RPG"
           class="btn btn-light w-100 py-3 fs-5">

            RPG

        </a>

    </div>


    <!-- INDIE -->

    <div class="col-6 col-md-3 col-lg-2">

        <a href="loja.php?categoria=Indie"
           class="btn btn-light w-100 py-3 fs-5">

            Indie

        </a>

    </div>


</div>



<!-- TÍTULO DOS JOGOS -->

<?php

if ($categoria != '') {

    echo '<h2 class="mb-4">Jogos de ' . htmlspecialchars($categoria) . '</h2>';

} else {

    echo '<h2 class="mb-4">Jogos em Destaque</h2>';

}

?>


<!-- LISTA DE JOGOS -->

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">


<?php

if ($resultado && mysqli_num_rows($resultado) > 0) {

    while ($jogo = mysqli_fetch_assoc($resultado)) {

?>


        <!-- CARD DO JOGO -->

        <div class="col">

            <div class="card h-100 shadow-sm">


                <!-- CAPA -->

                <img src="<?php echo htmlspecialchars($jogo['capaJogo']); ?>"
                     class="card-img-top"
                     style="height: 280px; object-fit: cover; object-position: center;"
                     alt="<?php echo htmlspecialchars($jogo['nomeJogo']); ?>">


                <!-- INFORMAÇÕES -->

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>


                        <!-- NOME -->

                        <h5 class="card-title fw-bold">

                            <?php echo htmlspecialchars($jogo['nomeJogo']); ?>

                        </h5>


                        <!-- DESCRIÇÃO -->

                        <p class="card-text text-muted small">

                            <?php echo htmlspecialchars($jogo['descricaoJogo']); ?>

                        </p>


                        <!-- CATEGORIA -->

                        <span class="badge bg-secondary mb-2">

                            <?php echo htmlspecialchars($jogo['categoriaJogo']); ?>

                        </span>


                    </div>


                    <div>


                        <!-- PREÇO -->

                        <p class="fw-bold text-success fs-5 mb-2">

                            R$
                            <?php

                            echo number_format(
                                $jogo['precoJogo'],
                                2,
                                ',',
                                '.'
                            );

                            ?>

                        </p>


                        <!-- BOTÃO VER JOGO -->

                        <a href="visualizarJogo.php?id=<?php echo $jogo['idJogo']; ?>"
                           class="btn btn-primary w-100">

                            Ver Jogo

                        </a>


                    </div>

                </div>

            </div>

        </div>


<?php

    }

} else {

?>


    <!-- NENHUM JOGO -->

    <div class="col-12">

        <div class="alert alert-secondary text-center">

            Nenhum jogo encontrado nesta categoria.

        </div>

    </div>


<?php

}

?>


</div>


<?php include "footer.php"; ?>