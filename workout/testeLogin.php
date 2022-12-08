<?php
    session_start();
//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    //Acesso liberado
    include_once('includes/conecta.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);
   
    if(mysqli_num_rows($result) < 1){

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }else{

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: area-usuario/user.php');
    }

} else{
    //Acesso negado
    header('Location: login.php');
}

?>