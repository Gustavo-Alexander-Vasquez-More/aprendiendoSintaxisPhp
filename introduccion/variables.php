<h1>Variables en PHP</h1>
<?php

echo "<h2>+Variables numéricas</h2>";

$number1 = 10;
echo "variable number1 ", var_dump($number1), "<br>";
$number2 = 2;
echo "variable number2 ", var_dump($number2), "<br>";

echo "<h4>Ejemplo de suma number1 + number2</h4>";
echo "resultado: ", $number1 + $number2, "<br>";

echo "<h2>+Variables de tipo cadena</h2>";
$saludo = "Hola, Mundo!";
echo "variable saludo ", var_dump($saludo), "<br>";

echo "<h2>+Variables booleanas</h2>";
$isTrue = true;
echo "variable isTrue ", var_dump($isTrue), "<br>";

echo "<h2>+Variables de tipo arreglo</h2>", "<h3>*Arreglo simple</h3>";
$colores = ["rojo", "verde", "azul"];
echo "variable colores: ", var_dump($colores), "<br>";
//Se accede a traves del indice del arreglo
echo "<h4>Ejemplo de concatenacion con los datos del arreglo</h4>", "Estos son algunos de los colores primarios: ", implode(", ", $colores), "<br>";

echo "<h3>*Arreglo con clave-valor</h3>";
$persona = [
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid"
];
echo "variable persona: ", var_dump($persona), "<br>";
//Se accede a traves de la clave del arreglo
echo "<h4>Ejemplo de concatenacion con los datos del arreglo</h4>", "Hola mi nombre es ", $persona["nombre"], " tengo ", $persona["edad"], " años y vivo en ", $persona["ciudad"], "<br>";

echo "<h2>+Variables de tipo objeto</h2>";
//variable de tipo objeto
$objeto = (object) [
    "nombre" => "Maria",
    "edad" => 25,
    "ciudad" => "Barcelona"
];

echo "variable objeto: ", var_dump($objeto), "<br>";
//Se accede a una propiedad del objeto
echo "<h4>Ejemplo de concatenacion con los datos del objeto</h4>", "Hola mi nombre es ", $objeto->nombre, " tengo ", $objeto->edad, " años y vivo en ", $objeto->ciudad;
?>