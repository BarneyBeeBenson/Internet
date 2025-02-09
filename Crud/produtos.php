<?php
        include_once("produtosDAO.php");
        session_start();
        if($_SESSION['logado'] == false){
            header("location:login.php");
        }
        if(isset($_REQUEST['busca'])){
            $busca = $_REQUEST['busca'];
            $produtos = getProduto($busca);
        }else{
            $produtos = getProdutos();
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Produtos </title>

    <style>
        #um{
            min-height:20vh; 
            display:flex; 
            justify-content: center;
             align-items:center;
            }

        #dois{
            min-height:80vh;
             display:flex; 
             justify-content: center; 
             align-items:center;
            }

        fieldset{
            display:flex; 
            background-color:white; 
            border: 2px solid black;
        }

        th{border: 1px solid black;
             font: 20pt normal black;
            }

        #btExcluir{
            color:red;
        }
        .borda{
            border: 1px solid black;
        }

    </style>

</head>
<body>
<div id="um">
        <fieldset>
            <a href="fechar.php" id="fechar"><button id="fechar"> Fechar </button></a>
            <form action="save&edit.php" method="post">
                 <input type="text" name="tipo" value="Salvar" hidden>
                 <input type="submit" value="Salvar">
            </form>
            <form action="produtos.php" method="get">
                <input type="text" name="busca" id="busca">
                <input type="submit" value="Buscar">
            </form>
        </fieldset>
    </div>

    <div id="dois">
        <fieldset>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Valor</th>
                    <th>Quantidade</th>
                    <th>Nome</th>
                </tr>
                <?php 
                    for($i=0;$i<count($produtos);$i++){
                ?>
                        <tr>
                            <td class="borda"><?php echo $produtos[$i]['idproduto'];?></td>
                            <td class="borda"><?php echo $produtos[$i]['valor'];?></td>
                            <td class="borda"><?php echo $produtos[$i]['quantidade'];?></td>
                            <td class="borda"><?php echo $produtos[$i]['nome'];?></td>
                            <td><form action="save&edit.php" method="post">
                                <input type="text" name="tipo" value="Edit" hidden>
                                <input type="number" name="id" value="<?php echo $produtos[$i]['idproduto'];?>" hidden>
                                <input type="submit" value="Edit">
                            </form></td>
                            <td><form action="produtosControle.php" method="post">
                                <input type="number" name="id" value="<?php echo $produtos[$i]['idproduto'];?>" hidden>
                                <input type="submit" value="Excluir" id="btExcluir">
                            </form></td>
                        </tr>
                <?php
                    }
                ?>
            </table>
        </fieldset>
    </div>
    
</body>
</html>