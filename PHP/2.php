<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

    <form action="" method="get">

        <label for="inputa"> A: </label>
        <input id=" inputa" name="num1" type="number">

        <label for="inputb"> B: </label>
        <input id=" inputb" name="num2" type="number">

        <input type="submit" value="Soma">
    </form>
    

    <?php
    //var_dump($_REQUEST);

    if(!isset($_REQUEST["num1"]) || !isset($_REQUEST["num2"])){
         echo "<script>
                alert('informe 1 e 2');
                </script>";
        die();
    }

    $num1= $_REQUEST["num1"];
    $num2= $_REQUEST["num2"];

    echo "<p>" .$num1+$num2. "</p>";
    ?>
    <p> SOMA: <?php echo $num1+$num2;?>  </p>
</body>
</html>