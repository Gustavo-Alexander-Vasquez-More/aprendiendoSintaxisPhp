<?php

//funciones sin parametros
function saludar()
{
    echo "<h2>Hola, bienvenido a mi sitio web!</h2>";
}

saludar();

//funciones con parametros
function suma($a, $b)
{
    echo $a + $b;
}

suma(5, 20);

echo "<br>";

//funciones con retorno
function multiplicacion($a, $b)
{
    return $a * $b;
}

echo multiplicacion(5, 20);

?>