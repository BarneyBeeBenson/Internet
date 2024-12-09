<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    include_once("database.php");
    include_once("pessoaDAO.php");

    $lista_pessoa= getUsuarios();
    ?>

    <table>
        <tr>
            <th> ID  </th>
            <th> Nome  </th>
            <th> Email  </th>
        </tr>
        <?php
        for($i = 0; $i <count($lista_pessoa); $i++){
            ?>
            <tr>
                <th> <a href="editar.php?pessoa_id=
                <?php echo $lista_pessoa[$i] ["idusuario"]  ?>  </th>
                <th> <?php echo $lista_pessoa[$i] ["nome"]  ?>  </th>
                <th> <?php echo $lista_pessoa[$i] ["email"]  ?>  </th>
            </tr>

            <?php 
        }
        ?>


    </table>
</body>
</html>