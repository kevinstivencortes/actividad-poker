<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio4.php" method="post">
        <input type="number" name="numero" id="number">
        <input type="submit" value="enviar">
    </form>
</body>
</html>


<?php 

$numero  = $_POST['numero'];

function ingreseNumero($n){

    $arreglo = str_split($n);

    $n = array_sum($arreglo);

    print_r($n);
}

$a = ingreseNumero($numero);

?>