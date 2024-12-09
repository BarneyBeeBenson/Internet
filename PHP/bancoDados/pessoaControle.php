<?php
    include_once("database.php");
    include_once("pessoaDAO.php");
if(isset($_POST["acao"]) && $_POST["acao"] == "cadastrar"){
    if(isset($_POST["nome"]) && isset($_POST["email"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        save($nome,$email);
        header("location: listar.php");
    }else{
        echo "Não deu certo";
    }
}

if(isset($_POST["acao"]) && $_POST["acao"] == "editar"){
}
?>