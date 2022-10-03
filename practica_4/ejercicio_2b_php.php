<?php 
//AUTOR: IVAN BISCALDI

// bloque 1----------//
for ($i = 1; $i <= 10; $i++) {
 print $i;
}

echo "\n";
// bloque 2----------//
for ($i = 1; $i <= 10; print $i, $i++) ;

echo "\n";
// bloque 3----------//
for ($i = 1; ;$i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}

echo "\n";
// bloque 4----------//
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}

/*
Los 4 bloques de codigo consisten de un bucle de iteracion 'for' 
donde en cada iteracion se incrementa en uno el valorde una variable i.
En los bloques 1,2 y 3 se asigna valor inicial a i y se le incrementa en
cada iteracion, con la estructura de control for. En el bloque 4 se la 
inicializa antes de entrar al bucle y los incrementos se producen en la
secuencia de instrucciones dentro del bucle.
Los bloques 1 y 2 aprovechan la ventaja de la estructura for que permite 
controlar valores en cada iteracion. Los bloques 3 y 4 no, el control lo 
hacen dentro de la secuencia a iterar y producen una salida del bucle cuando
se cumple la condicion indicada.
El bloque 2 por su parte aprovecha la estructura de control para ejecutar 
la instruccion "print".
*/
?>