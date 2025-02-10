<?php
    session_start();
    if(isset($_REQUEST['usuario']) && isset($_REQUEST['senha'])){

        if($_REQUEST['usuario'] == "gerente" && $_REQUEST['senha'] == "0987"){

            $_SESSION['logado'] = true;
            header("location:produtos.php");
        }else{

            header("location:login.php?login=0");
        }
    }else{
        
        header("location:login.php?");
    }
?>