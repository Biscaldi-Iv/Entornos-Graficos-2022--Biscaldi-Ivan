<?php
//Autor: Ivan Biscaldi
//Indicar las salidas:

//parte a
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];//salida: bar
echo $matriz[12]; //salida: 1

unset($matriz);

//parte b
echo "\n";
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];    //salida: 5
echo $matriz["unamatriz"][13];   //salida: 9 
echo $matriz["unamatriz"]["a"];  //salida: 42

unset($matriz);

//parte c
echo "\n";
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;     //matriz = array(5 => 1, 12 => 2, 13 => 56)
$matriz["x"] = 42;  //matriz = array(5 => 1, 12 => 2, 13 => 56, "x" => 42)
unset($matriz[5]);  //matriz = array(12 => 2, 13 => 56, "x" => 42)
unset($matriz);     //matriz= null
?>