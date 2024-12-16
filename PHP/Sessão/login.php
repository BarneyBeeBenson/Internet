<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=st, initial-scale=1.0">
    <title>Document</title>
    

    <style>

        body{
                display: flex;
                justify-content: center;
                align-items:  center;
                min-height: 100lvh;
        }

        fieldset{

            display: flex;
            flex-direction: column;

        }


    </style>
</head>
<body>  
    <fieldset>
        <?php
            if(Isset($_GET["erro"]) && $_GET["erro"]==1){
        ?>  
                <h2> Usuario não logado <h2>
        <?php      
            }
        ?>
        <form action="autenticacao.php" method="post">
            <label for="login">Login</label>
            <input type="text" name="login" id="login">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <input type="submit">
        </form>
    </fieldset>
</body>
</html>