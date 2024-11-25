<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">

<label for="nome"> Nome </label>
<input id=" nome" name="num1" type="number">

<label for="sobrenome"> Sobrenome </label>
<input id=" sobrenome" name="num1" type="number">

<input type="submit" value="concatena">
</form>
<p> 
<?php 
if(isset( $_GET[nome])){
    echo $_GET[nome].$_GET[sobrenome]

}
?>
</p>

</body>
</html>