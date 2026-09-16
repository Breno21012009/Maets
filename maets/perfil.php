<?php

// Inicia a sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica se está logado
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: formLogin.php");
    exit();
}

// Inclui o header
include "header.php";

// Inclui a conexão com o banco
include "conexaoBD.php";

// Pega o e-mail da sessão
$emailUsuario = $_SESSION['emailUsuario'];

// Protege o e-mail para usar na consulta
$emailUsuario = mysqli_real_escape_string($conn, $emailUsuario);

// Busca o usuário pelo e-mail
$consultaUsuario = "SELECT *
                    FROM usuarios
                    WHERE emailUsuario = '$emailUsuario'";

$resultadoUsuario = mysqli_query($conn, $consultaUsuario);

// Verifica se a consulta funcionou
if (!$resultadoUsuario) {

    echo "
    <div class='container mt-5'>
        <div class='alert alert-danger text-center'>
            Erro ao consultar os dados do usuário.
            <br>
            " . mysqli_error($conn) . "
        </div>
    </div>
    ";

    include "footer.php";
    exit();
}

// Verifica se encontrou o usuário
if (mysqli_num_rows($resultadoUsuario) == 0) {

    echo "
    <div class='container mt-5'>
        <div class='alert alert-danger text-center'>
            Não foi possível encontrar os dados do usuário.
        </div>
    </div>
    ";

    include "footer.php";
    exit();
}

// Pega os dados do usuário
$usuario = mysqli_fetch_assoc($resultadoUsuario);

$fotoUsuario = $usuario['fotoUsuario'];
$nomeUsuario = $usuario['nomeUsuario'];
$dataNascimentoUsuario = $usuario['dataNascimentoUsuario'];
$emailUsuario = $usuario['emailUsuario'];
$nivelUsuario = $usuario['nivelUsuario'];

// Formata a data
$dataNascimento = date("d/m/Y", strtotime($dataNascimentoUsuario));

?>

<style>

.perfil-container {
    max-width: 900px;
    margin: 50px auto;
}

.perfil-card {
    background: #171a21;
    border: 1px solid #2a475e;
    border-radius: 10px;
    padding: 35px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
}

.perfil-foto {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #2a475e;
}

.perfil-nome {
    color: white;
    font-size: 28px;
    font-weight: bold;
    margin-top: 15px;
}

.perfil-email {
    color: #8a9aaa;
}

.informacao {
    background: #0f1922;
    border: 1px solid #2a475e;
    border-radius: 6px;
    padding: 15px 20px;
    margin-bottom: 12px;
}

.informacao-titulo {
    color: #8a9aaa;
    font-size: 13px;
    text-transform: uppercase;
    margin-bottom: 4px;
}

.informacao-texto {
    color: white;
    font-size: 17px;
}

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

.btn-editar {
    background: #66c0f4;
    color: #171a21;
    border: none;
    padding: 10px 25px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.2s;
}

.btn-editar:hover {
    background: #4da8d8;
    color: white;
}

</style>


<div class="container perfil-container">

    <!-- Botão voltar -->
    <div class="mb-4">

        <a href="index.php" class="btn-voltar">
            ← Voltar para o início
        </a>

    </div>


    <div class="perfil-card">

        <!-- Foto e informações principais -->
        <div class="text-center mb-4">

            <img
                src="<?php echo htmlspecialchars($fotoUsuario); ?>"
                alt="Foto de <?php echo htmlspecialchars($nomeUsuario); ?>"
                class="perfil-foto"
            >

            <h1 class="perfil-nome">
                <?php echo htmlspecialchars($nomeUsuario); ?>
            </h1>

            <p class="perfil-email">
                <?php echo htmlspecialchars($emailUsuario); ?>
            </p>

        </div>


        <hr class="border-secondary mb-4">


        <h4 class="text-white mb-3">
            Informações da conta
        </h4>


        <!-- Nome -->
        <div class="informacao">

            <div class="informacao-titulo">
                Nome
            </div>

            <div class="informacao-texto">
                <?php echo htmlspecialchars($nomeUsuario); ?>
            </div>

        </div>


        <!-- Data de nascimento -->
        <div class="informacao">

            <div class="informacao-titulo">
                Data de nascimento
            </div>

            <div class="informacao-texto">
                <?php echo $dataNascimento; ?>
            </div>

        </div>


        <!-- E-mail -->
        <div class="informacao">

            <div class="informacao-titulo">
                E-mail
            </div>

            <div class="informacao-texto">
                <?php echo htmlspecialchars($emailUsuario); ?>
            </div>

        </div>


        <!-- Tipo de conta -->
        <div class="informacao">

            <div class="informacao-titulo">
                Tipo de conta
            </div>

            <div class="informacao-texto">

                <?php

                if ($nivelUsuario == "administrador") {
                    echo "Administrador";
                } else {
                    echo "Usuário";
                }

                ?>

            </div>

        </div>


        <!-- Botão editar -->
        <div class="text-center mt-4">

            <a href="editarPerfil.php" class="btn-editar">
                Editar Perfil
            </a>

        </div>

    </div>

</div>


<?php include "footer.php"; ?>