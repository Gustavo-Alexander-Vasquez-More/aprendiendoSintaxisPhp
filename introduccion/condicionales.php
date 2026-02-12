<?php

echo "--- Ejemplos de Control de Flujo en PHP ---<br>";
echo "-------------------------------------------<br><br>";

$edad = 20;
$dia = "Lunes";

// 1. if
echo "<strong>1. Ejemplo de if:</strong><br>";
if ($edad >= 18) {
    echo "Eres mayor de edad.<br>";
}
echo "-------------------------------------------<br><br>";

// 2. if else
echo "<strong>2. Ejemplo de if else:</strong><br>";
if ($edad < 18) {
    echo "Eres menor de edad.<br>";
} else {
    echo "Eres mayor de edad.<br>";
}
echo "-------------------------------------------<br><br>";

// 3. if / elseif / else
echo "<strong>3. Ejemplo de if, elseif, else:</strong><br>";
$nota = 7;
if ($nota >= 9) {
    echo "Sobresaliente.<br>";
} elseif ($nota >= 7) {
    echo "Notable.<br>";
} else {
    echo "Necesitas mejorar.<br>";
}
echo "-------------------------------------------<br><br>";

// 4. switch
echo "<strong>4. Ejemplo de switch:</strong><br>";
switch ($dia) {
    case "Lunes":
        echo "Es inicio de semana.<br>";
        break;
    case "Viernes":
        echo "Es casi fin de semana.<br>";
        break;
    default:
        echo "Es otro día.<br>";
}
echo "-------------------------------------------<br><br>";

// 5. while
echo "<strong>5. Ejemplo de while:</strong><br>";
$contador = 1;
while ($contador <= 3) {
    echo "Número: $contador <br>";
    $contador++;
}
echo "-------------------------------------------<br><br>";

// 6. do while
echo "<strong>6. Ejemplo de do while:</strong><br>";
$contadorDo = 5;
do {
    echo "Número: $contadorDo <br>";
    $contadorDo++;
} while ($contadorDo <= 3); // Se ejecuta al menos una vez
echo "-------------------------------------------<br><br>";

// 7. for
echo "<strong>7. Ejemplo de for:</strong><br>";
for ($i = 1; $i <= 3; $i++) {
    echo "Iteración: $i <br>";
}
echo "-------------------------------------------<br><br>";

?>