<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        fieldset{
            display: flex;
            align-items: center; 
            justify-content: center;
            flex-direction: column; 
            background-color:white; 
            border: 2px solid black;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        
        label {
            font-size: 18pt;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
            text-align: left;
        }
        
    </style>
</head>
<body>

    
<fieldset>        
        <form action="login-Controller.php" method="post">
            <label for="usuario">Insira seu usuário: </label>
            <input type="text" name="usuario" id="usuario">
            <label for="senha">Insira sua senha: </label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Login">
        </form>
    </fieldset>
    

    <?php
    session_start();
    /* Mandar pra onde quer mandar */
    if(isset($_SESSION['logado'])){
        if($_SESSION['logado'] == true){
            header("location:produtos.php");
        }
    }
    /* erro */
    if(isset($_REQUEST['login'])){
        if($_REQUEST['login'] == 0){
            echo "<p> Usuario ou senha Inválidos</p>";
        }
    }
    ?>

</body>
</html>