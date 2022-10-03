<?php
//Autor: Ivan Biscaldi

function dictionary1(){
    //codigo 1
    $a = array( 'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    4
    );
    return $a;
}
function dictionary2(){
    //codigo 2
    $a['color'] = 'rojo';
    $a['sabor'] = 'dulce';
    $a['forma'] = 'redonda';
    $a['nombre'] = 'manzana';
    $a[]= 4;
    return $a;
}
/* 
Los codigos 1 y 2 generan exactamente el mismo array. 
En el codigo 1 se crea e inicializa el array usando el constructor de array.
En el codigo 2 el array se crea a partir de la asignacion del primer elemento
y cada instruccion va agregando los elementos al mismo array.
*/

echo dictionary1()==dictionary2()?"true":"false";
?>