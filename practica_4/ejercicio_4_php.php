<?php
/*
datos.php :
---------------------------------
    <?php
    $color = 'blanco';
    $flor = 'clavel';
    ?>
---------------------------------
*/

//codigo
echo "El $flor $color \n";
include 'datos.php';
echo "El $flor $color";

/*
Salida:
---------------------
    El
    El clavel blanco
---------------------
En la primer instruccion echo como flor y color 
no han sido declaradas se omiten y luego se envia
un mensaje warning. 
Como flor y color son variables declaradas en datos.php 
y se incluye a este archivo antes del segundo echo, luego
las variables seran reconocidas generando que se imprima
"El clavel blanco"
*/
?>