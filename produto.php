<?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
$dados = mysqli_query($conexao, "SELECT * FROM produtos where id= $_GET[id]");
$produto = mysqli_fetch_array($dados);
$cabecalho_title = "Produto da Mirror Fashion";
$cabecalho_css = '    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href=\'http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script\'> <link rel="stylesheet" href="css/produto.css"> ';
include ("cabecalho.php"); ?>
<body>
<div class="produto-back">
    <div class="container">
        <div class="produto">
            <h1>
                <?= $produto['nome'] ?>
            </h1>
            <p>
                Por apenas <?= $produto['preco']?>
            </p>

            <form action="checkout.php?id=<?= $produto['id']?>" method="post">
                <fieldset class="cores">
                    <legend>
                        Escolha a cor:
                    </legend>
                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde">
                        <img src="img/produtos/foto<?= $produto['id']?>-verde.png" alt="Produto na cor Verde">
                    </label>

                    <input type="radio" name="cor" value="rosa" id="rosa">
                    <label for="rosa">
                        <img src="img/produtos/foto<?= $produto['id']?>-rosa.png" alt="Produto na cor rosa">
                    </label>

                    <input type="radio" name="cor" value="azul" id="azul">
                    <label for="azul">
                        <img src="img/produtos/foto<?= $produto['id']?>-azul.png" alt="Produto na cor azul">
                    </label>
                </fieldset>

                <button class="comprar" >Comprar</button>
                <fieldset>
                    <legend>
                        Escolha o tamanho:
                    </legend>
                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                    <output for="tamanho" name="valortamanho">42</output>
                </fieldset>
            </form>
        </div>
        <div class="detalhes">
            <h2>
                Detalhes do produto
            </h2>
            <p>
                <?= $produto['descricao']?>
            </p>
            <table>
                <thead>
                <tr>
                    <th>Característica</th>
                    <th>Detalhe</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Modelo</td>
                    <td>Cardigã 7845</td>
                </tr>
                <tr>
                    <td>Material</td>
                    <td>Algodão e poliester</td>
                </tr>
                <tr>
                    <td>Cores</td>
                    <td>Azul, verde e Rosa</td>
                </tr>
                <tr>
                    <td>Lavagem</td>
                    <td>Lavar a mão</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include ("rodape.php"); ?>

<script type="text/javascript" src="js/produto.js"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: joaov
 * Date: 10/15/2018
 * Time: 8:35 AM
 */