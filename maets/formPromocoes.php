<?php include "header.php"; ?>

<div class="container my-4">

    <div class="d-flex justify-content-center mb-4">
        <h2 class="text-white">Cadastrar Promoção</h2>
    </div>

    <div class="d-flex justify-content-center">

        <form action="actionPromocoes.php"
              method="POST"
              enctype="multipart/form-data"
              class="was-validated"
              style="width: 100%; max-width: 700px;">

            <!-- ============================= -->
            <!-- CAPA -->
            <!-- ============================= -->

            <div class="mb-3">

                <label for="capaPromocoes"
                       class="form-label text-white">
                    Capa do jogo
                </label>

                <input
                    type="file"
                    name="capaPromocoes"
                    id="capaPromocoes"
                    class="form-control"
                    accept=".jpg,.jpeg,.png,.webp"
                    required
                >

                <div class="invalid-feedback">
                    Selecione a capa do jogo.
                </div>

            </div>


            <!-- ============================= -->
            <!-- GAMEPLAY 1 -->
            <!-- ============================= -->

            <div class="mb-3">

                <label for="gameplay1Promocoes"
                       class="form-label text-white">
                    Gameplay 1
                </label>

                <input
                    type="file"
                    name="gameplay1Promocoes"
                    id="gameplay1Promocoes"
                    class="form-control"
                    accept=".jpg,.jpeg,.png,.webp"
                    required
                >

                <div class="invalid-feedback">
                    Selecione a primeira imagem de gameplay.
                </div>

            </div>


            <!-- ============================= -->
            <!-- GAMEPLAY 2 -->
            <!-- ============================= -->

            <div class="mb-3">

                <label for="gameplay2Promocoes"
                       class="form-label text-white">
                    Gameplay 2
                </label>

                <input
                    type="file"
                    name="gameplay2Promocoes"
                    id="gameplay2Promocoes"
                    class="form-control"
                    accept=".jpg,.jpeg,.png,.webp"
                    required
                >

                <div class="invalid-feedback">
                    Selecione a segunda imagem de gameplay.
                </div>

            </div>


            <!-- ============================= -->
            <!-- GAMEPLAY 3 -->
            <!-- ============================= -->

            <div class="mb-3">

                <label for="gameplay3Promocoes"
                       class="form-label text-white">
                    Gameplay 3
                </label>

                <input
                    type="file"
                    name="gameplay3Promocoes"
                    id="gameplay3Promocoes"
                    class="form-control"
                    accept=".jpg,.jpeg,.png,.webp"
                    required
                >

                <div class="invalid-feedback">
                    Selecione a terceira imagem de gameplay.
                </div>

            </div>


            <!-- ============================= -->
            <!-- NOME -->
            <!-- ============================= -->

            <div class="form-floating mb-3">

                <input
                    type="text"
                    name="nomePromocoes"
                    id="nomePromocoes"
                    class="form-control"
                    placeholder="Nome do jogo"
                    required
                >

                <label for="nomePromocoes">
                    Nome do jogo
                </label>

                <div class="invalid-feedback">
                    Informe o nome do jogo.
                </div>

            </div>


            <!-- ============================= -->
            <!-- DESCRIÇÃO -->
            <!-- ============================= -->

            <div class="form-floating mb-3">

                <textarea
                    name="descricaoPromocoes"
                    id="descricaoPromocoes"
                    class="form-control"
                    placeholder="Descrição"
                    style="height:120px;"
                    required
                ></textarea>

                <label for="descricaoPromocoes">
                    Descrição
                </label>

                <div class="invalid-feedback">
                    Informe a descrição do jogo.
                </div>

            </div>


            <!-- ============================= -->
            <!-- CATEGORIA -->
            <!-- ============================= -->

            <div class="form-floating mb-3">

                <select
                    name="categoriaPromocoes"
                    id="categoriaPromocoes"
                    class="form-select"
                    required
                >

                    <option value="" selected disabled>
                        Selecione
                    </option>

                    <option value="Ação">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="RPG">RPG</option>
                    <option value="Estratégia">Estratégia</option>
                    <option value="Esportes">Esportes</option>
                    <option value="Corrida">Corrida</option>
                    <option value="Terror">Terror</option>
                    <option value="Sobrevivência">Sobrevivência</option>
                    <option value="Sandbox">Sandbox</option>

                </select>

                <label for="categoriaPromocoes">
                    Categoria
                </label>

                <div class="invalid-feedback">
                    Selecione uma categoria.
                </div>

            </div>


            <!-- ============================= -->
            <!-- PREÇO ORIGINAL -->
            <!-- ============================= -->

            <div class="form-floating mb-3">

                <input
                    type="number"
                    name="precoOriginalPromocoes"
                    id="precoOriginalPromocoes"
                    class="form-control"
                    placeholder="Preço original"
                    min="0"
                    step="0.01"
                    required
                >

                <label for="precoOriginalPromocoes">
                    Preço original (R$)
                </label>

                <div class="invalid-feedback">
                    Informe o preço original.
                </div>

            </div>


            <!-- ============================= -->
            <!-- PREÇO PROMOCIONAL -->
            <!-- ============================= -->

            <div class="form-floating mb-3">

                <input
                    type="number"
                    name="precoPromocoes"
                    id="precoPromocoes"
                    class="form-control"
                    placeholder="Preço promocional"
                    min="0"
                    step="0.01"
                    required
                >

                <label for="precoPromocoes">
                    Preço promocional (R$)
                </label>

                <div class="invalid-feedback">
                    Informe o preço promocional.
                </div>

            </div>


            <!-- ============================= -->
            <!-- LINK PARA COMPRA -->
            <!-- ============================= -->

            <div class="form-floating mb-4">

                <input
                    type="url"
                    name="paginaPromocoes"
                    id="paginaPromocoes"
                    class="form-control"
                    placeholder="Link para compra"
                    required
                >

                <label for="paginaPromocoes">
                    Link para compra
                </label>

                <div class="invalid-feedback">
                    Informe um link válido.
                </div>

            </div>


            <!-- ============================= -->
            <!-- BOTÃO -->
            <!-- ============================= -->

            <div class="text-center">

                <button
                    type="submit"
                    class="btn btn-dark px-5 py-2"
                >
                    Cadastrar Promoção
                </button>

            </div>

        </form>

    </div>

</div>

<?php include "footer.php"; ?>