<?php 

$cadena = "Hola mundo ADSI";

echo "La cadena original es: " . $cadena;
echo "<br>";

// Logitud de la cadena
echo "La longitud de caracteres es: " . strlen($cadena);
echo "<br>";

// Posición de una palabra
echo "La posicion del texto ADSI es: " . strpos($cadena, "ADSI");
echo "<br>";

// Cambiar a minúscula
echo "Cadena en minúscula: " . strtolower($cadena);
echo "<br>";

// Cambiar a mayúscula
echo "Cadena en mayúscula: " . strtoupper($cadena);
echo "<br>";

// Revertir cadena
echo "Cadena revertida: " . strrev($cadena);
echo "<br>";

// Reemplazar palabra en una cadena
echo str_replace("ADSI", "WS", "Hola mundo ADSI");
echo "<br>";

?>