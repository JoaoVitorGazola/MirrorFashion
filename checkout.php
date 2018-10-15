<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width">
    <title>Checkout Mirror Fashion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="open-iconic-master/font/css/open-iconic-bootstrap.min.css">
    <style>
        body{
            padding-top: 55px;
        }

    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">Mirror Fashion</a>
    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="sobre.php">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ajuda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Perguntas frequentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Entre em contato</a>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Ótima escolha</h1>
        <p class="lead">
            Obrigado por comprar na Mirror Fashion!
            Preencha seus dados para efetivar a compra
        </p>
    </div>
</div>
<div class="card mb-3 container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <h2 class="card-header">Sua compra</h2>
            <div class="card-body">
                <img src="img/produtos/foto1-<?php print $_POST['cor']?>.png" alt="Fuzzy Cardigan" class="img-thumbnail mb-3 d-none d-sm-block">
                <d1>
                    <dt>Produto</dt>
                    <dd>Fuzzy Cardigan</dd>
                    <dt>Cor</dt>
                    <dd><?= $_POST['cor']?></dd>
                    <dt>Tamanho</dt>
                    <dd><?= $_POST['tamanho']?></dd>
                    <dt>Preço</dt>
                    <dd id="preco">R$ 129,90</dd>
                </d1>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-group">
                        <label for="qtd">Quantidade</label>
                        <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="total">Total:</label>
                        <output for="qtd preco" id="total" class="form-control">R$ 129,90</output>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xl-9">
            <form>
                <div class="row">
                    <fieldset class="col-lg-6">
                        <legend>Dados pessoais</legend>
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="email" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
                            <label class="custom-control-label" for="newsletter">Quero receber notícias da Mirror Fashion</label>
                        </div>
                    </fieldset>

                    <fieldset class="col-lg-6">
                        <legend>Cartão de crédito</legend>
                        <div class="form-group">
                            <label for="numero-cartao">Numero - CVV</label>
                            <input type="text" class="form-control" id="numero-cartao" data-mask="9999 9999 9999 9999 - 999"name="numero-cartao">
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Bandeira</span>
                                </div>
                                <select class="custom-select" id="bandeira-cartao">
                                    <option disabled selected>Selecione uma opção</option>
                                    <option value="master">Mastercard</option>
                                    <option value="visa">Visa</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                        </div>
                    </fieldset>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">
                    <span class="oi oi-thumb-up"></span>Confirmar pedido</button>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/total.js"></script>
<script type="text/javascript" src="js/inputmask-plugin.js"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: joaov
 * Date: 10/15/2018
 * Time: 9:31 AM
 */