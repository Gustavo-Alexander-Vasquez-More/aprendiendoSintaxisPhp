<?php 

//Variable numerica
$number1 =10;
$number2=2;

//variable de tipo cadena
$saludo = "Hola, Mundo!";

//variable booleana
$isTrue = true;

//variable arreglo
$colores = ["rojo", "verde", "azul"];

//variable arreglo con clave-valor
$persona = [
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid"
];

//variable de tipo objeto
$objeto = (object) [
    "nombre" => "Maria",
    "edad" => 25,
    "ciudad" => "Barcelona"
];

//Ejemplo de suma
echo $number1 + $number2, "<br>";
echo $saludo, "<br>";
//usando operadores ternarios e imprimiendo booleanos
echo $isTrue ? "<h2>La variable es verdadera</h2>" : "<h2>La variable es falsa</h2>", "<br>";
//llamando elementos del arreglo
echo "Primer elemento del array: ", $colores[0], "<br>";
echo "todos los elementos del arreglo: ", implode(", " , $colores), "<br>";
echo "Nombre: ", $persona["nombre"], "<br>";
echo "Edad: ", $persona["edad"], "<br>";
echo "Ciudad: ", $persona["ciudad"], "<br>";
//llamando objetos
echo "Nombre: ", $objeto->nombre, "<br>";
echo "Edad: ", $objeto->edad, "<br>";
echo "Ciudad: ", $objeto->ciudad, "<br>";
?>