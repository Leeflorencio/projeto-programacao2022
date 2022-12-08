<?php
session_start();
/*print_r($_SESSION); */

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&family=Kalam&display=swap');
    </style>

    <title>Área usuário</title>
</head>

<body>

    <div>
        <header class="menu">
            <div class="logo">
                <img src="../imagens/save-money" alt="">
                <h1>WorkOut</h1>
            </div>
            <nav>
                <a id="link" href="../index.php">Home</a>
                <a id="link" href="#box-despesas-right">Minhas Dividas</a>
                <a id="link" href="#">Adicionar Divida</a>
                <a id="link" href="../login.php">Sair</a>
            </nav>
        </header>

        <section>

            <div class="box">
                <div class="row row-box">
                    <div class="col col-5 testecoll">
                        <div class="jumbotron">
                            <h1 class="display-5">Olá, usuário!</h1>
                            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            <hr class="my-4">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Leia mais</a>
                        </div>

                        <div id="box-despesas-left" class="jumbotron">
                            <p class="lead font-weight-bold">Adicionar despesas</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero quibusdam repudiandae quos qui quod minima perferendis aut. Ipsa in porro voluptatem, ab optio odio voluptates modi ad minus nemo sunt?</p>
                        </div>

                        <div id="grafico" class="jumbotron">
                            <p class="lead font-weight-bold">Gastos mensais</p>
                            <div class="img-grafico">
                                <img src="../imagens/grafico-_cropped.png" alt="">
                            </div>

                            <div class="grafico-porcnt">
                                <div>
                                    <span class="badge badge-pill badge-primary">Alimentação: 37,3%</span>
                                </div>

                                <div>
                                    <span class="badge badge-pill badge-success">Educação: 9,0%</span>
                                </div>

                                <div>
                                    <span class="badge badge-pill badge-danger">Presentes: 9,0%</span>
                                </div>


                                <div>
                                    <span class="badge badge-pill badge-warning">Contas: 29,9%</span>
                                </div>

                                <div>
                                    <span class="badge badge-pill badge-secondary">Lazer: 14,9%</span>
                                </div>
                            </div>
                        </div>



                    </div>

                    <!-- FIM DA TESTECOLL (TROCAR ESSE NOME) -->

                    <div class="col col-5 testecoll2">
                        <div class="jumbotron">
                            <p class="lead font-weight-bold">Painel</p>

                            <div class="saldos-user">
                                <div>
                                    <div id="painel-box" class="border-light">
                                        <div class="img-painel"><img src="../imagens/wallet.png" alt=""></div>
                                        <p class="p-painel">Saldo:</p>
                                        <p class="p-painel">R$1.500,00</p>
                                    </div>

                                    <div id="painel-box" class="border-light">
                                        <div class="img-painel"><img src="../imagens/receita.png" alt=""></div>
                                        <p class="p-painel">Receita:</p>
                                        <p class="p-painel">R$500,00</p>
                                    </div>
                                </div>


                                <div>
                                    <div id="painel-box" class="border-light">
                                        <div class="img-painel"><img src="../imagens/despesa.png" alt=""></div>
                                        <p class="p-painel">Despesa:</p>
                                        <p class="p-painel">R$800,00</p>
                                    </div>

                                    <div id="painel-box" class="border-light">
                                        <div class="img-painel"><img src="../imagens/credit-card.png" alt=""></div>
                                        <p class="p-painel">Cartão de crédito:</p>
                                        <p class="p-painel">R$900,00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="box-despesas-right" class="jumbotron">
                            <p class="lead font-weight-bold">Minhas despesas</p>
                            <div class="my-despesas">

                                <div id="painel-box-2" class="border border-danger">
                                    <div class="img-painel"><img src="../imagens/despesas-02.png" alt=""></div>
                                    <p class="p-painel">Faculdade:</p>
                                    <p class="p-painel">R$500,00</p>
                                </div>
                                <button id="botao-despesas" type="button" class="btn btn-outline-danger">Excluir</button>
                                <button id="botao-despesas" type="button" class="btn btn-outline-primary">Editar</button>
                            </div>

                            <div class="my-despesas">

                                <div id="painel-box-2" class="border border-danger">
                                    <div class="img-painel"><img src="../imagens/despesas-02.png" alt=""></div>
                                    <p class="p-painel">Alimentação:</p>
                                    <p class="p-painel">R$700,00</p>
                                </div>
                                <button id="botao-despesas" type="button" class="btn btn-outline-danger">Excluir</button>
                                <button id="botao-despesas" type="button" class="btn btn-outline-primary">Editar</button>
                            </div>

                            <div class="my-despesas">

                                <div id="painel-box-2" class="border border-danger">
                                    <div class="img-painel"><img src="../imagens/despesas-02.png" alt=""></div>
                                    <p class="p-painel">Presentes:</p>
                                    <p class="p-painel">R$250,00</p>
                                </div>
                                <button id="botao-despesas" type="button" class="btn btn-outline-danger">Excluir</button>
                                <button id="botao-despesas" type="button" class="btn btn-outline-primary">Editar</button>
                            </div>

                            <div class="my-despesas">

                                <div id="painel-box-2" class="border border-danger">
                                    <div class="img-painel"><img src="../imagens/despesas-02.png" alt=""></div>
                                    <p class="p-painel">Internet:</p>
                                    <p class="p-painel">R$80,00</p>
                                </div>
                                <button id="botao-despesas" type="button" class="btn btn-outline-danger">Excluir</button>
                                <button id="botao-despesas" type="button" class="btn btn-outline-primary">Editar</button>
                            </div>
                        </div>

                        <div id="box-despesas-right" class="jumbotron">
                            <p class="lead font-weight-bold">Blog</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Como começar a investir</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et a veritatis, aspernatur       porro                                                     autem.</p>
                                            <a href="#" class="btn btn-primary">Visitar</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Dicas para não fazer dívidas</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et a veritatis, aspernatur porro autem.</p>
                                            <a href="#" class="btn btn-primary">Visitar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FIM DA DIV COL-5 testecoll2-->
                    </div>
                </div>

                <!-- RODAPE  -->
                <footer class="rodape-user">
                    <div class="logo">
                        <img src="../imagens/save-money" alt="">
                        <h1>WorkOut</h1>
                    </div>

                    <div>
                        <img class="img-rodape-user" src="../imagens/investidor.png" alt="">
                    </div>
                </footer>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>


    <!-- IMAGENS RETIRADAS DA FREEPIK E FLATICONS 
        <a href="https://www.freepik.com/free-vector/investor-with-laptop-monitoring-growth-dividends-trader-sitting-stack-money-investing-capital-analyzing-profit-graphs-vector-illustration-finance-stock-trading-investment_10173124.htm#page=2&query=giving%20money&position=29&from_view=keyword">Image by pch.vector</a> on Freepik -->
</body>

</html>