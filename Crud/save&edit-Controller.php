<?php
    include_once("produtosDAO.php");
    session_start();
    if($_SESSION['logado'] == false){
        header("location:login.php");
    }
    if(isset($_REQUEST['tipo'])){

        if($_REQUEST['tipo'] == "Save"){

            $valor= $_REQUEST['valor'];
            $quantidade= $_REQUEST['quantidade'];
            $nome= $_REQUEST['nome'];
            save($valor,$quantidade,$nome);
            header("location:produtos.php");
        }else if($_REQUEST['tipo'] == "Edit"){
            
            $id= $_REQUEST['id'];
            $valor= $_REQUEST['valor'];
            $quantidade= $_REQUEST['quantidade'];
            $nome= $_REQUEST['nome'];
            update($valor,$quantidade,$nome,$id);
            header("location:produtos.php");
        }
    }
?>