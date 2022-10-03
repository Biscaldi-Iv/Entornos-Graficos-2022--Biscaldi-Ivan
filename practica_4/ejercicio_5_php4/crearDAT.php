<?php
//Autor: Ivan Biscaldi

$archivo= fopen("contador.dat", "w+"); //crea el archivo || al escribir borra el contenido anterior
$contador=0;
fwrite($archivo, $contador);
fclose($archivo);

?>