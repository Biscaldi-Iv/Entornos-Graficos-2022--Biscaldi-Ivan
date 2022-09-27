<?php
/* AUTOR: IVAN BISCALDI */
/* funcion doble */
function doble($i) { /* parametro: i */
 return $i*2;
}
$a = TRUE;   /* variable a: booleano // operador binario '=' */
$b = "xyz";  /* variable b:string // operador binario '=' */
$c = 'xyz';  /* variable c:string // operador binario '=' */
$d = 12;     /* variable d:entero // operador binario '=' */
echo gettype($a); /* salida: boolean */
echo gettype($b); /* salida: string */
echo gettype($c); /* salida: string */
echo gettype($d); /* salida: integer */
if (is_int($d)) {
 $d += 4;  /* operador binario '+=' */
}
if (is_string($a)) { /* estructura de control condicional */
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3; /* operador ternario '?:'// operador unario '++' // operador binario '*' */
$f = doble($d++); /* operador binario '=' // llamado a la funcion 'doble(parametro)'  */
$g = $f += 10; /* operador binario '=' // operador binario '+='  */
echo $a, $b, $c, $d, $f , $g; /* salida: 1xyzxyz184444 */
?>