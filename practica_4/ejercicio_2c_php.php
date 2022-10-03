<?php
//AUTOR: IVAN BISCALDI
//$i=0;
//$i=1;
$i=2;

// bloque 1----------//
if ($i == 0) {
print "i equals 0";
} elseif ($i == 1) {
print "i equals 1";
} elseif ($i == 2) {
print "i equals 2";
}

echo "\n";
// bloque 2----------//
switch ($i) {
case 0:
print "i equals 0";
break;
case 1:
print "i equals 1";
break;
case 2:
print "i equals 2";
break;
}

/*
Los 2 bloques de codigo realizan acciones en base al valor
de i. Las 3 condiciones a evaluar son las mismas. La unica
diferencia el que el bloque 1 usa la estructura 
if...elseif...else y el bloque 2 usa switch-case. 
*/
?>