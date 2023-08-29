<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        <input type="number" name="numero" id="numero">
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php

$numero = $_POST['numero'];

function generarFibonacci($n) {
    
  $num1 = 0;
  $num2 = 1;

  echo $num1;
  
  
  if ($n > 1) {
    echo ", " . $num2;
  }

  for ($i = 2; $i < $n; $i++) {
    $num3 = $num1 + $num2;
    echo ", " . $num3;
    $num1 = $num2;
    $num2 = $num3;
  }
}

$a = generarFibonacci($numero);
echo $a;
?>