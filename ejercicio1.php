<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <input type="text" name="texto" id="texto" placeholder="ingrese una palabra que sea palindroma">
        <input type="submit" value="enviar">

    </form>
</body>
</html>



<?php 

$palabra = $_POST['texto'];

function esPalindroma ($texto){
    $texto = strtolower(str_replace(" ", "", "$texto"));

    $invertida = strrev($texto);

    if($invertida === $texto){
        echo "es una palabra palindroma";
    }
    else{
        echo "no es una palabra palindroma";
    }
}

$a = esPalindroma($palabra);
 echo $a;


?>