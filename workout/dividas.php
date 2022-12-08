<?php session_start(); ?>

/*Não finalizado */

    <?php
        if (isset($_GET['nome'])) {
            $_SESSION['lista_dividas'][] = $_GET['nome'];
            }
            $lista_dividas = array();
        if(isset($_GET['valor'])) {
            $_SESSION['lista_dividas'][] = $_GET['valor'];
        }
        $lista_dividas = array();
            if (isset($_SESSION['lista_dividas'])) {
            $lista_dividas = $_SESSION['lista_dividas'];
            }
              
    
    include "template-divida.php";
    ?>

   



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</body>
</html>