<?php include "header.php"; ?>

<?php

// =========================================================
// VERIFICA SE O FORMULÁRIO FOI ENVIADO
// =========================================================

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // =====================================================
    // VARIÁVEIS
    // =====================================================

    $nomePromocoes = "";
    $descricaoPromocoes = "";
    $categoriaPromocoes = "";
    $precoPromocoes = "";
    $paginaPromocoes = "";

    $capaPromocoes = "";
    $gameplay1Promocoes = "";
    $gameplay2Promocoes = "";
    $gameplay3Promocoes = "";

    $erroPreenchimento = false;
    $erroUpload = false;


    // =====================================================
    // NOME
    // =====================================================

    if(empty($_POST["nomePromocoes"])){

        echo "<div class='alert alert-warning text-center'>
                O campo <strong>NOME DO JOGO</strong> é obrigatório!
              </div>";

        $erroPreenchimento = true;

    } else {

        $nomePromocoes = filtrar_entrada(
            $_POST["nomePromocoes"]
        );

    }


    // =====================================================
    // DESCRIÇÃO
    // =====================================================

    if(empty($_POST["descricaoPromocoes"])){

        echo "<div class='alert alert-warning text-center'>
                O campo <strong>DESCRIÇÃO</strong> é obrigatório!
              </div>";

        $erroPreenchimento = true;

    } else {

        $descricaoPromocoes = filtrar_entrada(
            $_POST["descricaoPromocoes"]
        );

    }


    // =====================================================
    // CATEGORIA
    // =====================================================

    if(empty($_POST["categoriaPromocoes"])){

        echo "<div class='alert alert-warning text-center'>
                O campo <strong>CATEGORIA</strong> é obrigatório!
              </div>";

        $erroPreenchimento = true;

    } else {

        $categoriaPromocoes = filtrar_entrada(
            $_POST["categoriaPromocoes"]
        );

    }


    // =====================================================
    // PREÇO
    // =====================================================

    if(
        !isset($_POST["precoPromocoes"]) ||
        $_POST["precoPromocoes"] === ""
    ){

        echo "<div class='alert alert-warning text-center'>
                O campo <strong>PREÇO PROMOCIONAL</strong> é obrigatório!
              </div>";

        $erroPreenchimento = true;

    } else {

        $precoPromocoes = str_replace(
            ",",
            ".",
            $_POST["precoPromocoes"]
        );

        if(!is_numeric($precoPromocoes)){

            echo "<div class='alert alert-warning text-center'>
                    O <strong>PREÇO</strong> deve conter um valor válido!
                  </div>";

            $erroPreenchimento = true;

        }

    }


    // =====================================================
    // PÁGINA DO JOGO
    // =====================================================

    if(empty($_POST["paginaPromocoes"])){

        echo "<div class='alert alert-warning text-center'>
                O campo <strong>PÁGINA DO JOGO</strong> é obrigatório!
              </div>";

        $erroPreenchimento = true;

    } else {

        $paginaPromocoes = filtrar_entrada(
            $_POST["paginaPromocoes"]
        );

        if(!filter_var($paginaPromocoes, FILTER_VALIDATE_URL)){

            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>PÁGINA DO JOGO</strong>
                    deve conter uma URL válida!
                  </div>";

            $erroPreenchimento = true;

        }

    }


    // =====================================================
    // FUNÇÃO PARA UPLOAD
    // =====================================================

    function enviarImagemPromocao($nomeCampo, $diretorio){

        if(
            !isset($_FILES[$nomeCampo]) ||
            $_FILES[$nomeCampo]["size"] == 0
        ){

            echo "<div class='alert alert-warning text-center'>
                    A imagem <strong>$nomeCampo</strong> é obrigatória!
                  </div>";

            return false;
        }


        // Limite de 5 MB
        if($_FILES[$nomeCampo]["size"] > 5000000){

            echo "<div class='alert alert-warning text-center'>
                    A imagem <strong>$nomeCampo</strong>
                    deve ser menor que 5MB!
                  </div>";

            return false;
        }


        // Nome do arquivo
        $nomeArquivo = basename(
            $_FILES[$nomeCampo]["name"]
        );


        // Caminho
        $caminhoImagem = $diretorio . $nomeArquivo;


        // Extensão
        $tipoDaImagem = strtolower(
            pathinfo(
                $caminhoImagem,
                PATHINFO_EXTENSION
            )
        );


        // Formatos permitidos
        if(
            $tipoDaImagem != "jpg" &&
            $tipoDaImagem != "jpeg" &&
            $tipoDaImagem != "png" &&
            $tipoDaImagem != "webp"
        ){

            echo "<div class='alert alert-warning text-center'>
                    A imagem <strong>$nomeCampo</strong>
                    deve estar nos formatos
                    JPG, JPEG, PNG ou WEBP!
                  </div>";

            return false;
        }


        // Move o arquivo
        if(
            !move_uploaded_file(
                $_FILES[$nomeCampo]["tmp_name"],
                $caminhoImagem
            )
        ){

            echo "<div class='alert alert-danger text-center'>
                    Erro ao enviar a imagem
                    <strong>$nomeCampo</strong>!
                  </div>";

            return false;
        }


        return $caminhoImagem;
    }


    // =====================================================
    // UPLOAD DAS IMAGENS
    // =====================================================

    $diretorio = "assets/img/";


    $capaPromocoes = enviarImagemPromocao(
        "capaPromocoes",
        $diretorio
    );


    $gameplay1Promocoes = enviarImagemPromocao(
        "gameplay1Promocoes",
        $diretorio
    );


    $gameplay2Promocoes = enviarImagemPromocao(
        "gameplay2Promocoes",
        $diretorio
    );


    $gameplay3Promocoes = enviarImagemPromocao(
        "gameplay3Promocoes",
        $diretorio
    );


    // =====================================================
    // VERIFICA UPLOAD
    // =====================================================

    if(
        $capaPromocoes === false ||
        $gameplay1Promocoes === false ||
        $gameplay2Promocoes === false ||
        $gameplay3Promocoes === false
    ){

        $erroUpload = true;

    }


    // =====================================================
    // INSERE NO BANCO
    // =====================================================

    if(
        !$erroPreenchimento &&
        !$erroUpload
    ){

        include "conexaoBD.php";


        $inserirPromocao = "INSERT INTO promocoes
        (
            nomePromocoes,
            descricaoPromocoes,
            categoriaPromocoes,
            precoPromocoes,
            capaPromocoes,
            paginaPromocoes,
            gameplay1Promocoes,
            gameplay2Promocoes,
            gameplay3Promocoes
        )
        VALUES
        (
            '$nomePromocoes',
            '$descricaoPromocoes',
            '$categoriaPromocoes',
            '$precoPromocoes',
            '$capaPromocoes',
            '$paginaPromocoes',
            '$gameplay1Promocoes',
            '$gameplay2Promocoes',
            '$gameplay3Promocoes'
        )";


        // =================================================
        // EXECUTA
        // =================================================

        if(mysqli_query($conn, $inserirPromocao)){

            echo "<div class='alert alert-success text-center'>
                    O cadastro da
                    <strong>PROMOÇÃO</strong>
                    foi efetuado com sucesso!
                  </div>";


            echo "

            <div class='container mb-3 mt-3'>

                <div class='text-center mb-4'>

                    <img src='$capaPromocoes'
                         title='Capa de $nomePromocoes'
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
                            $nomePromocoes
                        </td>

                    </tr>


                    <tr>

                        <th style='color:white !important;'>
                            DESCRIÇÃO
                        </th>

                        <td style='color:white !important;'>
                            $descricaoPromocoes
                        </td>

                    </tr>


                    <tr>

                        <th style='color:white !important;'>
                            CATEGORIA
                        </th>

                        <td style='color:white !important;'>
                            $categoriaPromocoes
                        </td>

                    </tr>


                    <tr>

                        <th style='color:white !important;'>
                            PREÇO PROMOCIONAL
                        </th>

                        <td style='color:white !important;'>
                            R$ $precoPromocoes
                        </td>

                    </tr>


                    <tr>

                        <th style='color:white !important;'>
                            PÁGINA DO JOGO
                        </th>

                        <td style='color:white !important;'>
                            $paginaPromocoes
                        </td>

                    </tr>

                </table>


                <h4 class='text-white mt-4 mb-3'>
                    Fotos da Gameplay
                </h4>


                <div class='row'>

                    <div class='col-md-4 mb-3'>

                        <img src='$gameplay1Promocoes'
                             class='img-fluid rounded'
                             alt='Gameplay 1'>

                    </div>


                    <div class='col-md-4 mb-3'>

                        <img src='$gameplay2Promocoes'
                             class='img-fluid rounded'
                             alt='Gameplay 2'>

                    </div>


                    <div class='col-md-4 mb-3'>

                        <img src='$gameplay3Promocoes'
                             class='img-fluid rounded'
                             alt='Gameplay 3'>

                    </div>

                </div>

            </div>

            ";

        } else {

            echo "<div class='alert alert-danger text-center'>
                    Erro ao tentar cadastrar
                    <strong>PROMOÇÃO</strong>
                    no banco de dados!
                  </div>";

        }

    }

}
else{

    header("location:formPromocoes.php");

}


// =========================================================
// FILTRAR ENTRADAS
// =========================================================

function filtrar_entrada($dado){

    $dado = trim($dado);

    $dado = stripslashes($dado);

    $dado = htmlspecialchars($dado);

    return $dado;
}

?>

<?php include "footer.php"; ?>