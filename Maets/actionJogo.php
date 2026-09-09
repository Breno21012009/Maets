<?php include "header.php" ?>

<?php

// Verifica se o método de envio é POST
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Variáveis
    $nomeJogo = $descricaoJogo = $categoriaJogo = "";
    $precoJogo = $paginaJogo = "";

    $capaJogo = "";
    $gameplay1Jogo = "";
    $gameplay2Jogo = "";
    $gameplay3Jogo = "";

    // Controle de erros
    $erroPreenchimento = false;
    $erroUpload = false;


    // =========================================================
    // NOME DO JOGO
    // =========================================================

    if(empty($_POST["nomeJogo"])){

        echo "<div class='alert alert-warning text-center'>
                O campo <strong>NOME DO JOGO</strong> é obrigatório!
              </div>";

        $erroPreenchimento = true;

    }
    else{

        $nomeJogo = filtrar_entrada($_POST["nomeJogo"]);

    }


    // =========================================================
    // DESCRIÇÃO
    // =========================================================

    if(empty($_POST["descricaoJogo"])){

        echo "<div class='alert alert-warning text-center'>
                O campo <strong>DESCRIÇÃO</strong> é obrigatório!
              </div>";

        $erroPreenchimento = true;

    }
    else{

        $descricaoJogo = filtrar_entrada($_POST["descricaoJogo"]);

    }


    // =========================================================
    // CATEGORIA
    // =========================================================

    if(empty($_POST["categoriaJogo"])){

        echo "<div class='alert alert-warning text-center'>
                O campo <strong>CATEGORIA</strong> é obrigatório!
              </div>";

        $erroPreenchimento = true;

    }
    else{

        $categoriaJogo = filtrar_entrada($_POST["categoriaJogo"]);

    }


    // =========================================================
    // PREÇO
    // =========================================================

    if(empty($_POST["precoJogo"])){

        echo "<div class='alert alert-warning text-center'>
                O campo <strong>PREÇO</strong> é obrigatório!
              </div>";

        $erroPreenchimento = true;

    }
    else{

        $precoJogo = filtrar_entrada($_POST["precoJogo"]);

        if(!is_numeric($precoJogo)){

            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>PREÇO</strong> deve conter um valor válido!
                  </div>";

            $erroPreenchimento = true;

        }

    }


    // =========================================================
    // PÁGINA DO JOGO
    // =========================================================

    if(empty($_POST["paginaJogo"])){

        echo "<div class='alert alert-warning text-center'>
                O campo <strong>PÁGINA DO JOGO</strong> é obrigatório!
              </div>";

        $erroPreenchimento = true;

    }
    else{

        $paginaJogo = filtrar_entrada($_POST["paginaJogo"]);

        if(!filter_var($paginaJogo, FILTER_VALIDATE_URL)){

            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>PÁGINA DO JOGO</strong> deve conter uma URL válida!
                  </div>";

            $erroPreenchimento = true;

        }

    }


    // =========================================================
    // FUNÇÃO PARA FAZER UPLOAD DAS IMAGENS
    // =========================================================

    function enviarImagem($nomeCampo, $diretorio){

        if(
            !isset($_FILES[$nomeCampo]) ||
            $_FILES[$nomeCampo]["size"] == 0
        ){

            echo "<div class='alert alert-warning text-center'>
                    A imagem <strong>$nomeCampo</strong> é obrigatória!
                  </div>";

            return false;
        }


        // Verifica tamanho
        if($_FILES[$nomeCampo]["size"] > 5000000){

            echo "<div class='alert alert-warning text-center'>
                    A imagem <strong>$nomeCampo</strong>
                    deve ser menor que 5MB!
                  </div>";

            return false;
        }


        // Nome original
        $nomeArquivo = basename($_FILES[$nomeCampo]["name"]);

        // Caminho completo
        $caminhoImagem = $diretorio . $nomeArquivo;

        // Extensão
        $tipoDaImagem = strtolower(
            pathinfo($caminhoImagem, PATHINFO_EXTENSION)
        );


        // Extensões permitidas
        if(
            $tipoDaImagem != "jpg" &&
            $tipoDaImagem != "jpeg" &&
            $tipoDaImagem != "png" &&
            $tipoDaImagem != "webp"
        ){

            echo "<div class='alert alert-warning text-center'>
                    A imagem <strong>$nomeCampo</strong>
                    deve estar nos formatos JPG, JPEG, PNG ou WEBP!
                  </div>";

            return false;
        }


        // Faz o upload
        if(
            !move_uploaded_file(
                $_FILES[$nomeCampo]["tmp_name"],
                $caminhoImagem
            )
        ){

            echo "<div class='alert alert-danger text-center'>
                    Erro ao enviar a imagem <strong>$nomeCampo</strong>!
                  </div>";

            return false;
        }


        // Retorna o caminho salvo
        return $caminhoImagem;
    }


    // =========================================================
    // UPLOAD DAS 4 IMAGENS
    // =========================================================

    $diretorio = "assets/img/";


    $capaJogo = enviarImagem(
        "capaJogo",
        $diretorio
    );

    $gameplay1Jogo = enviarImagem(
        "gameplay1Jogo",
        $diretorio
    );

    $gameplay2Jogo = enviarImagem(
        "gameplay2Jogo",
        $diretorio
    );

    $gameplay3Jogo = enviarImagem(
        "gameplay3Jogo",
        $diretorio
    );


    // Verifica se alguma imagem apresentou erro
    if(
        $capaJogo === false ||
        $gameplay1Jogo === false ||
        $gameplay2Jogo === false ||
        $gameplay3Jogo === false
    ){

        $erroUpload = true;

    }


    // =========================================================
    // INSERÇÃO NO BANCO
    // =========================================================

    if(!$erroPreenchimento && !$erroUpload){

        // Inclui conexão
        include "conexaoBD.php";


        // Query
        $inserirJogo = "INSERT INTO jogos
        (
            nomeJogo,
            descricaoJogo,
            categoriaJogo,
            precoJogo,
            capaJogo,
            gameplay1Jogo,
            gameplay2Jogo,
            gameplay3Jogo,
            paginaJogo
        )
        VALUES
        (
            '$nomeJogo',
            '$descricaoJogo',
            '$categoriaJogo',
            '$precoJogo',
            '$capaJogo',
            '$gameplay1Jogo',
            '$gameplay2Jogo',
            '$gameplay3Jogo',
            '$paginaJogo'
        )";


        // Executa
        if(mysqli_query($conn, $inserirJogo)){

            echo "<div class='alert alert-success text-center'>
                    O cadastro do <strong>JOGO</strong>
                    foi efetuado com sucesso!
                  </div>";


            // Mostra capa
            echo "

            <div class='container mb-3 mt-3'>

                <div class='text-center mb-4'>

                    <img src='$capaJogo'
                         title='Capa de $nomeJogo'
                         style='width:250px;'
                         class='img-thumbnail'>

                </div>


                <table class='table'
                       style='--bs-table-color:white;
                              color:white !important;'>

                    <tr>
                        <th style='color:white !important;'>
                            NOME
                        </th>

                        <td style='color:white !important;'>
                            $nomeJogo
                        </td>
                    </tr>


                    <tr>
                        <th style='color:white !important;'>
                            DESCRIÇÃO
                        </th>

                        <td style='color:white !important;'>
                            $descricaoJogo
                        </td>
                    </tr>


                    <tr>
                        <th style='color:white !important;'>
                            CATEGORIA
                        </th>

                        <td style='color:white !important;'>
                            $categoriaJogo
                        </td>
                    </tr>


                    <tr>
                        <th style='color:white !important;'>
                            PREÇO
                        </th>

                        <td style='color:white !important;'>
                            R$ $precoJogo
                        </td>
                    </tr>


                    <tr>
                        <th style='color:white !important;'>
                            PÁGINA DO JOGO
                        </th>

                        <td style='color:white !important;'>
                            $paginaJogo
                        </td>
                    </tr>

                </table>


                <!-- MINIATURAS DAS GAMEPLAYS -->

                <h4 class='text-white mt-4 mb-3'>
                    Fotos da Gameplay
                </h4>

                <div class='row'>

                    <div class='col-md-4 mb-3'>
                        <img src='$gameplay1Jogo'
                             class='img-fluid rounded'
                             alt='Gameplay 1'>
                    </div>

                    <div class='col-md-4 mb-3'>
                        <img src='$gameplay2Jogo'
                             class='img-fluid rounded'
                             alt='Gameplay 2'>
                    </div>

                    <div class='col-md-4 mb-3'>
                        <img src='$gameplay3Jogo'
                             class='img-fluid rounded'
                             alt='Gameplay 3'>
                    </div>

                </div>

            </div>

            ";

        }
        else{

            echo "<div class='alert alert-danger text-center'>
                    Erro ao tentar cadastrar
                    <strong>JOGO</strong>
                    no banco de dados!
                  </div>";

        }

    }

}
else{

    header("location:formJogo.php");

}


// =========================================================
// FUNÇÃO PARA FILTRAR ENTRADAS
// =========================================================

function filtrar_entrada($dado){

    $dado = trim($dado);

    $dado = stripslashes($dado);

    $dado = htmlspecialchars($dado);

    return($dado);

}

?>

<?php include "footer.php" ?>