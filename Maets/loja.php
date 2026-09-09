<?php include "header.php"; ?>

<style>

    .barra-pesquisa {
        background: #171a21;
        color: white;
        border: 1px solid #2a475e;
        border-radius: 8px;
        padding: 14px 18px;
    }

    .barra-pesquisa::placeholder {
        color: #8a9aaa;
    }

    .barra-pesquisa:focus {
        background: #171a21;
        color: white;
        border-color: #66c0f4;
        box-shadow: 0 0 0 0.2rem rgba(102, 192, 244, 0.15);
    }

    .card-jogo {
        transition: 0.25s;
    }

    .card-jogo:hover {
        transform: translateY(-5px);
    }

    .imagem-jogo {
        height: 280px;
        width: 100%;
        object-fit: cover;
        object-position: center;
    }

    .preco {
        color: #198754;
        font-size: 20px;
        font-weight: bold;
    }

    .mensagem-vazia {
        display: none;
        padding: 50px 20px;
    }

</style>


<div class="container my-5">

    <!-- TÍTULO -->
    <div class="text-center mb-5">

        <h1 class="text-white fw-bold">
            Explore nossa Loja
        </h1>

        <p class="text-secondary">
            Encontre jogos de diferentes categorias e descubra novas aventuras.
        </p>

    </div>


    <!-- PESQUISA -->
    <div class="mb-5">

        <input
            type="text"
            id="pesquisa"
            class="form-control form-control-lg barra-pesquisa"
            placeholder="🔎 Pesquisar jogo..."
            autocomplete="off"
        >

    </div>


    <!-- TÍTULO DOS JOGOS -->
    <div class="mb-4">

        <h2 class="text-white mb-1">
            Descubra novos jogos
        </h2>

        <p class="text-secondary mb-0">
            Escolha um jogo para conhecer mais.
        </p>

    </div>


    <!-- JOGOS -->
    <div
        id="listaJogos"
        class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4"
    >


        <!-- GTA V -->
        <div class="col jogo">

            <div class="card card-jogo h-100 shadow-sm">

                <img
                    src="img/gtaV.jpeg"
                    class="card-img-top imagem-jogo"
                    alt="GTA V"
                >

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Grand Theft Auto V
                        </h5>

                        <p class="card-text text-muted small">
                            Explore Los Santos em um dos maiores sucessos da Rockstar.
                        </p>

                    </div>

                    <div>

                        <p class="preco mb-2">
                            R$ 149,90
                        </p>

                        <a
                            href="detalhegta.php"
                            class="btn btn-primary w-100"
                        >
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- MINECRAFT -->
        <div class="col jogo">

            <div class="card card-jogo h-100 shadow-sm">

                <img
                    src="img/mine.jpg.jpeg"
                    class="card-img-top imagem-jogo"
                    alt="Minecraft"
                >

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Minecraft
                        </h5>

                        <p class="card-text text-muted small">
                            Construa, explore e sobreviva em mundos feitos de blocos.
                        </p>

                    </div>

                    <div>

                        <p class="preco mb-2">
                            R$ 99,90
                        </p>

                        <a
                            href="minecraft.php"
                            class="btn btn-primary w-100"
                        >
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- CYBERPUNK -->
        <div class="col jogo">

            <div class="card card-jogo h-100 shadow-sm">

                <img
                    src="img/ciberpunk.jpeg"
                    class="card-img-top imagem-jogo"
                    alt="Cyberpunk 2077"
                >

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Cyberpunk 2077
                        </h5>

                        <p class="card-text text-muted small">
                            Explore Night City em uma aventura futurista.
                        </p>

                    </div>

                    <div>

                        <p class="preco mb-2">
                            R$ 159,90
                        </p>

                        <a
                            href="cyberpunk.php"
                            class="btn btn-primary w-100"
                        >
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- RED DEAD -->
        <div class="col jogo">

            <div class="card card-jogo h-100 shadow-sm">

                <img
                    src="img/rdr.jpg"
                    class="card-img-top imagem-jogo"
                    alt="Red Dead Redemption II"
                >

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Red Dead Redemption II
                        </h5>

                        <p class="card-text text-muted small">
                            Viva uma grande aventura no Velho Oeste.
                        </p>

                    </div>

                    <div>

                        <p class="preco mb-2">
                            R$ 149,90
                        </p>

                        <a
                            href="detalheRdr.php"
                            class="btn btn-primary w-100"
                        >
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- GOD OF WAR -->
        <div class="col jogo">

            <div class="card card-jogo h-100 shadow-sm">

                <img
                    src="img/godofwar.jpg"
                    class="card-img-top imagem-jogo"
                    alt="God of War"
                >

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            God of War
                        </h5>

                        <p class="card-text text-muted small">
                            Acompanhe Kratos e Atreus em uma jornada pela mitologia nórdica.
                        </p>

                    </div>

                    <div>

                        <p class="preco mb-2">
                            R$ 179,90
                        </p>

                        <a
                            href="godofwar.php"
                            class="btn btn-primary w-100"
                        >
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- FORZA -->
        <div class="col jogo">

            <div class="card card-jogo h-100 shadow-sm">

                <img
                    src="img/forza.jpg"
                    class="card-img-top imagem-jogo"
                    alt="Forza Horizon 5"
                >

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Forza Horizon 5
                        </h5>

                        <p class="card-text text-muted small">
                            Corra por paisagens incríveis em um enorme mundo aberto.
                        </p>

                    </div>

                    <div>

                        <p class="preco mb-2">
                            R$ 129,90
                        </p>

                        <a
                            href="forza.php"
                            class="btn btn-primary w-100"
                        >
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- OUTLAST -->
        <div class="col jogo">

            <div class="card card-jogo h-100 shadow-sm">

                <img
                    src="img/outlast.jpg"
                    class="card-img-top imagem-jogo"
                    alt="Outlast"
                >

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Outlast
                        </h5>

                        <p class="card-text text-muted small">
                            Uma experiência intensa de terror e sobrevivência.
                        </p>

                    </div>

                    <div>

                        <p class="preco mb-2">
                            R$ 89,90
                        </p>

                        <a
                            href="outlast.php"
                            class="btn btn-primary w-100"
                        >
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- GHOST OF YOTEI -->
        <div class="col jogo">

            <div class="card card-jogo h-100 shadow-sm">

                <img
                    src="img/ghostofyotei.jpg"
                    class="card-img-top imagem-jogo"
                    alt="Ghost of Yotei"
                >

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Ghost of Yotei
                        </h5>

                        <p class="card-text text-muted small">
                            Uma jornada de ação, exploração e aventura inspirada no Japão.
                        </p>

                    </div>

                    <div>

                        <p class="preco mb-2">
                            R$ 299,90
                        </p>

                        <a
                            href="ghostofyotei.php"
                            class="btn btn-primary w-100"
                        >
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- SPIDER-MAN -->
        <div class="col jogo">

            <div class="card card-jogo h-100 shadow-sm">

                <img
                    src="img/spidermanps4.jpg"
                    class="card-img-top imagem-jogo"
                    alt="Spider-Man PS4"
                >

                <div class="card-body d-flex flex-column justify-content-between">

                    <div>

                        <h5 class="card-title fw-bold">
                            Spider-Man PS4
                        </h5>

                        <p class="card-text text-muted small">
                            Balance-se por Nova York em uma aventura eletrizante.
                        </p>

                    </div>

                    <div>

                        <p class="preco mb-2">
                            R$ 149,90
                        </p>

                        <a
                            href="spidermanps4.php"
                            class="btn btn-primary w-100"
                        >
                            Ver Jogo
                        </a>

                    </div>

                </div>

            </div>

        </div>


    </div>


    <!-- NENHUM RESULTADO -->
    <div
        id="nenhumResultado"
        class="mensagem-vazia text-center"
    >

        <h4 class="text-white">
            😕 Nenhum jogo encontrado
        </h4>

        <p class="text-secondary">
            Tente pesquisar pelo nome de outro jogo.
        </p>

    </div>


</div>


<script>

    const campoPesquisa =
        document.getElementById("pesquisa");

    const jogos =
        document.querySelectorAll(".jogo");

    const nenhumResultado =
        document.getElementById("nenhumResultado");


    campoPesquisa.addEventListener("input", function () {

        const pesquisa =
            campoPesquisa.value
            .toLowerCase()
            .trim();

        let encontrados = 0;


        jogos.forEach(function (jogo) {

            const nome =
                jogo.querySelector(".card-title")
                .innerText
                .toLowerCase();

            const descricao =
                jogo.querySelector(".card-text")
                .innerText
                .toLowerCase();


            if (
                nome.includes(pesquisa) ||
                descricao.includes(pesquisa)
            ) {

                jogo.style.display = "";

                encontrados++;

            }
            else {

                jogo.style.display = "none";

            }

        });


        if (encontrados === 0) {

            nenhumResultado.style.display = "block";

        }
        else {

            nenhumResultado.style.display = "none";

        }

    });

</script>


<?php include "footer.php"; ?>