<?php
    include_once("produtosDAO.php");
    session_start();
    if($_SESSION['logado'] == false){
        header("location:login.php");
    }
    $titulo = $_REQUEST['tipo']; 
    if($_REQUEST['tipo'] == "Edit"){
        $produto = getProdutobyid($_REQUEST['id']);
    }else{
        $produto = array("valor"=>"","quantidade"=>"","nome"=>"");
    }
    if(!isset($_REQUEST['id'])){
        $_REQUEST['id'] = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $titulo; ?> </title>

    <style>
        
        #uno{
            min-height:100vh; 
            display:flex; 
            justify-content: center; 
            align-items:center;
            }

        fieldset{
            display:flex; 
            flex-direction: column; 
            align-items:center;
            background-color:white; 
            border: 2px solid black;
        }

        form{
            display:flex;
            flex-direction: column;
            align-items:center;
        }

        button{
            font: 20pt normal black; 
            margin: 2px;
        }

        .mae{min-width:100%; 
            display:flex; 
            justify-content:space-between; 
            margin: 1px;
        }

    </style>

</head>
<body>

     <div id="uno">

        <fieldset>
            
            <form action="save&edit-Controller.php" method="post">

                <div class="mae">
                <label for=""> Valor </label>
                <input type="number" name="valor" id="valor" value="<?php echo $produto['valor'];?>"> 
                </div>

                <div class="mae">
                <label for=""> Quantidade </label>
                <input type="number" name="quantidade" id="quantidade" value="<?php echo $produto['quantidade'];?>">
                </div>

                <div class="mae">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $produto['nome'];?>">
                </div> 

                <input type="text" name="tipo" value="<?php echo $_REQUEST['tipo']?>" hidden>
                <input type="number" name="id" value="<?php echo $_REQUEST['id']?>" hidden>
                <input type="submit" value="Confirmar">

            </form>

            <a href="produtos.php"><button>Cancelar</button></a>

        </fieldset>

    </div>

</body>
</html>