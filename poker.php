<?php
$valores = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A");
$palos = array("Corazones", "Diamantes", "Tréboles", "Picas");

function obtenerCartaAleatoria($valores, $palos) {
    $valor = $valores[array_rand($valores)];
    $palo = $palos[array_rand($palos)];
    return "$valor de $palo";
}

$cartas = array();
for ($i = 0; $i < 5; $i++) {
    $cartas[] = obtenerCartaAleatoria($valores, $palos);
}

// Contar la frecuencia de cada valor de carta
$contadorCartas = array();
foreach ($cartas as $carta) {
    $valor = explode(" ", $carta)[0]; // Obtener el valor de la carta (ej: "10" de "10 de Corazones")
    if (!isset($contadorCartas[$valor])) {
        $contadorCartas[$valor] = 1;
    } else {
        $contadorCartas[$valor]++;
    }
}

// Determinar la mano de póker
$mano = "";

if (in_array(2, $contadorCartas)) {
    $mano = "Par";
} elseif (in_array(2, $contadorCartas, true) && count($contadorCartas) == 2) {
    $mano = "Dos Pares";
} else {
    $mano = "Carta Alta";
}

echo "<h1>Mano generada: </h1><br>";
echo " " . implode(",<br> ", $cartas) . "<br>";
echo "<h1><br>Resultado de la mano:$mano</h1>";
?>
