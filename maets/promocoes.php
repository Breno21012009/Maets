<?php include "header.php"; ?>
<?php include "conexaoBD.php"; ?>

<?php

// Consulta todas as promoções cadastradas
$sql = "SELECT * FROM promocoes ORDER BY id_Promocoes DESC";

$resultado = mysqli_query($conn, $sql);

?>

<h2 class="mb-4">Promoções</h2>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

<?php

if ($resultado && mysqli_num_rows($resultado) > 0) {

    while ($jogo = mysqli_fetch_assoc($resultado)) {

?>

    <!-- Card da promoção -->
    <div class="col">

        <div class="card h-100 shadow-sm">

            <!-- Capa -->
            <img 
                src="<?php echo $jogo['capaPromocoes']; ?>"
                class="card-img-top"
                style="height: 280px; object-fit: cover; object-position: center;"
                alt="<?php echo $jogo['nomePromocoes']; ?>"
            >

            <div class="card-body d-flex flex-column justify-content-between">

                <div>

                    <!-- Nome -->
                    <h5 class="card-title fw-bold">
                        <?php echo $jogo['nomePromocoes']; ?>
                    </h5>

                    <!-- Descrição -->
                    <p class="card-text text-muted small">
                        <?php echo $jogo['descricaoPromocoes']; ?>
                    </p>

                    <!-- Categoria -->
                    <span class="badge bg-secondary mb-2">
                        <?php echo $jogo['categoriaPromocoes']; ?>
                    </span>

                </div>

                <div>

                    <!-- Preço original -->
                    <p class="text-muted text-decoration-line-through mb-0">
                        R$ <?php echo number_format($jogo['precoOriginalPromocoes'], 2, ',', '.'); ?>
                    </p>

                    <!-- Preço promocional -->
                    <p class="fw-bold text-success fs-5 mb-2">
                        R$ <?php echo number_format($jogo['precoPromocoes'], 2, ',', '.'); ?>
                    </p>

                    <!-- Ver promoção -->
                    <a 
                        href="visualizarPromocao.php?id=<?php echo $jogo['id_Promocoes']; ?>"
                        class="btn btn-primary w-100"
                    >
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

    <div class="col-12">

        <div class="alert alert-secondary text-center">
            Nenhuma promoção cadastrada.
        </div>

    </div>

<?php

}

?>

</div>

<?php include "footer.php"; ?>