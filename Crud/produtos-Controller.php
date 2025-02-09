<?php
    include_once("produtosDAO.php");
    session_start();
    if($_SESSION['logado'] == false){
        header("location:login.php");
    }
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        delete($id);
        header("location:produtos.php");
    }
?>