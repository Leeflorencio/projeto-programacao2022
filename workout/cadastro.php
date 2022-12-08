<?php

    if(isset($_POST['submit'])){
       // print_r($_POST['name']);
       // print_r($_POST['email']);
       // print_r($_POST['senha']);

       include_once('includes/conecta.php');

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
      
        $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
    <section class="container border border-secondary rounded">
        <div class="cadastro">
            <h3 class="text-uppercase">Cadastro</h3>
            <form class="form-cadastro" action="cadastro.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input name="name" type="text" class="form-control col-sm-7" id="nome" aria-describedby="nomeHelp" placeholder="Seu nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input name="email" type="email" class="form-control col-sm-7" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input name="senha" type="password" class="form-control col-sm-7" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Estou de acordo</label>
                    <small class="form-text text-muted">Ao continuar, estou de acordo com os Termos de Uso <br> e Aviso de Privacidade do Work Out.</small>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Cadastrar</button>
            </form>

            <a href="index.php"><button style="margin: 15px;" type="submit" name="submit" id="submit" class="btn btn-primary">Voltar</button></a>
        </div>

        <div>
            <img class="img-cadastro" src="imagens/cadastro.png" alt="">
        </div>
        
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</body>
</html>