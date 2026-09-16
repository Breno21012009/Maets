<?php include "header.php"; ?>

<?php

include "conexaoBD.php";


// =========================================================
// VERIFICA POST
// =========================================================

if ($_SERVER["REQUEST_METHOD"] != "POST") {

    header("Location: formPromocoes.php");
    exit;

}


// =========================================================
// RECEBER DADOS
// =========================================================

$nomePromocoes = trim($_POST["nomePromocoes"] ?? "");
$descricaoPromocoes = trim($_POST["descricaoPromocoes"] ?? "");
$categoriaPromocoes = trim($_POST["categoriaPromocoes"] ?? "");
$precoOriginalPromocoes = $_POST["precoOriginalPromocoes"] ?? "";
$precoPromocoes = $_POST["precoPromocoes"] ?? "";
$paginaPromocoes = trim($_POST["paginaPromocoes"] ?? "");


// =========================================================
// VALIDAR DADOS
// =========================================================

if (
    empty($nomePromocoes) ||
    empty($descricaoPromocoes) ||
    empty($categoriaPromocoes) ||
    $precoOriginalPromocoes === "" ||
    $precoPromocoes === "" ||
    empty($paginaPromocoes)
) {

    echo "
    <div class='container my-5'>
        <div class='alert alert-warning text-center'>
            Preencha todos os campos obrigatórios.
        </div>
    </div>
    ";

    include "footer.php";
    exit;
}


if (!is_numeric($precoOriginalPromocoes) || !is_numeric($precoPromocoes)) {

    echo "
    <div class='container my-5'>
        <div class='alert alert-warning text-center'>
            Os preços informados são inválidos.
        </div>
    </div>
    ";

    include "footer.php";
    exit;
}


if ($precoPromocoes >= $precoOriginalPromocoes) {

    echo "
    <div class='container my-5'>
        <div class='alert alert-warning text-center'>
            O preço promocional deve ser menor que o preço original.
        </div>
    </div>
    ";

    include "footer.php";
    exit;
}


if (!filter_var($paginaPromocoes, FILTER_VALIDATE_URL)) {

    echo "
    <div class='container my-5'>
        <div class='alert alert-warning text-center'>
            O link para compra não é válido.
        </div>
    </div>
    ";

    include "footer.php";
    exit;
}


// =========================================================
// FUNÇÃO DE UPLOAD
// =========================================================

function enviarImagemPromocao($campo)
{

    if (
        !isset($_FILES[$campo]) ||
        $_FILES[$campo]["error"] != UPLOAD_ERR_OK
    ) {

        return false;
    }


    // Limite de 5 MB

    if ($_FILES[$campo]["size"] > 5000000) {

        return false;
    }


    // Verifica extensão

    $extensao = strtolower(
        pathinfo(
            $_FILES[$campo]["name"],
            PATHINFO_EXTENSION
        )
    );


    $extensoesPermitidas = [
        "jpg",
        "jpeg",
        "png",
        "webp"
    ];


    if (!in_array($extensao, $extensoesPermitidas)) {

        return false;
    }


    // Gera nome único

    $novoNome = uniqid("promocao_", true) . "." . $extensao;


    // Diretório

    $diretorio = "assets/img/";


    // Cria pasta se não existir

    if (!is_dir($diretorio)) {

        mkdir($diretorio, 0777, true);

    }


    // Caminho final

    $caminho = $diretorio . $novoNome;


    // Move arquivo

    if (
        move_uploaded_file(
            $_FILES[$campo]["tmp_name"],
            $caminho
        )
    ) {

        return $caminho;

    }


    return false;

}


// =========================================================
// UPLOAD DAS IMAGENS
// =========================================================

$capaPromocoes = enviarImagemPromocao(
    "capaPromocoes"
);

$gameplay1Promocoes = enviarImagemPromocao(
    "gameplay1Promocoes"
);

$gameplay2Promocoes = enviarImagemPromocao(
    "gameplay2Promocoes"
);

$gameplay3Promocoes = enviarImagemPromocao(
    "gameplay3Promocoes"
);


// =========================================================
// VERIFICAR IMAGENS
// =========================================================

if (
    $capaPromocoes === false ||
    $gameplay1Promocoes === false ||
    $gameplay2Promocoes === false ||
    $gameplay3Promocoes === false
) {

    echo "
    <div class='container my-5'>
        <div class='alert alert-danger text-center'>
            Erro ao enviar uma ou mais imagens.
            <br>
            Verifique se as imagens estão em JPG, JPEG, PNG ou WEBP
            e possuem menos de 5MB.
        </div>
    </div>
    ";

    include "footer.php";
    exit;
}


// =========================================================
// INSERIR NO BANCO
// =========================================================

$sql = "INSERT INTO promocoes
(
    nomePromocoes,
    descricaoPromocoes,
    categoriaPromocoes,
    precoPromocoes,
    precoOriginalPromocoes,
    capaPromocoes,
    paginaPromocoes,
    gameplay1Promocoes,
    gameplay2Promocoes,
    gameplay3Promocoes
)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = mysqli_prepare($conn, $sql);


if (!$stmt) {

    die(
        "Erro ao preparar cadastro: "
        . mysqli_error($conn)
    );

}


mysqli_stmt_bind_param(
    $stmt,
    "sssddsssss",
    $nomePromocoes,
    $descricaoPromocoes,
    $categoriaPromocoes,
    $precoPromocoes,
    $precoOriginalPromocoes,
    $capaPromocoes,
    $paginaPromocoes,
    $gameplay1Promocoes,
    $gameplay2Promocoes,
    $gameplay3Promocoes
);


// =========================================================
// EXECUTAR
// =========================================================

if (mysqli_stmt_execute($stmt)) {

    echo "
    <div class='container my-5'>

        <div class='alert alert-success text-center'>

            <strong>Promoção cadastrada com sucesso!</strong>

        </div>


        <div class='text-center'>

            <img
                src='$capaPromocoes'
                style='width:250px;'
                class='img-thumbnail mb-4'
            >

            <br>

            <a
                href='promocoes.php'
                class='btn btn-dark'
            >
                Ver Promoções
            </a>

        </div>

    </div>
    ";

}
else {

    echo "
    <div class='container my-5'>

        <div class='alert alert-danger text-center'>

            Erro ao cadastrar promoção:

            " . mysqli_stmt_error($stmt) . "

        </div>

    </div>
    ";

}


mysqli_stmt_close($stmt);

?>

<?php include "footer.php"; ?>