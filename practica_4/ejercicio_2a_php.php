<?php  
/* AUTOR: IVAN BISCALDI */

// codigo 1----------//
$i = 1;
while ($i <= 10) {
 print $i++;
}

echo "\n";
// codigo 2----------//
$i = 1;
while ($i <= 10):
 print $i;
 $i++;
endwhile;

echo "\n";
// codigo 3----------//
$i = 0;
do {
 print ++$i;
} while ($i<10);

/* 
   Los 3 fragmentos de codigo producen la misma salida 
   El codigo 1 siempre que i sea menor o igual a 10 imprime i y luego lo incrementa. 
   El codigo 2 siempre que i sea menor o igual a 10 imprime i y luego lo incrementa.
   Ambos fragmentos evaluan la condicion de i y luego ejecutan la iteracion.
   A diferencia del primero, el segundo esta escrito con sintaxis alternativa y el incremento 
   esta indicado en una linea aparte.
   El codigo 3 incrementa i y luego lo imprime siempre que i sea menor a 10 .
   La otra diferencia con los primeros fragmentos es que usa la estructura de control
   do while, es decir, primero ejecuta la iteracion y luego evalua la condicion de i.
   */
?>