<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <section class="container border border-secondary rounded">
        <div class="cadastro">
            <form class="form-cadastro form-login" action="testeLogin.php" method="POST">
                <h3 class="text-uppercase">Login</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input name="email" type="email" class="form-control col-sm-7" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input name="senha" type="password" class="form-control col-sm-7" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Entrar</button>
            </form>
            <a href="index.php"><button style="margin: 15px;" type="submit" name="submit" id="submit" class="btn btn-primary">Voltar</button></a>
        </div>

        <div><img src="imagens/loginn.png" alt=""></div>

    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>