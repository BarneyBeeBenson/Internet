<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">

<label for="Min"> Min: </label>
<input id=" Min" name="n2" type="number">

<label for="Max"> Max: </label>
<input id=" Max" name="n1" type="number">

<input type="submit" value="Randomizar">

<?php
$n1 = $_REQUEST["n1"];
$n2 = $_REQUEST["n2"];
?>

<p> <?php echo rand ($n1, $n2) ?> </p>
</body>
</html>