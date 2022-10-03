<?php
function comprobar_nombre_usuario($nombre_usuario){
    //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }
    //compruebo que los caracteres sean los permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
    _";
    for ($i=0; $i<strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }
    echo $nombre_usuario . " es válido<br>";
    return true;
}

/*CASOS DE PRUEBA
+-----+------------+-------------+------------+---------------+---------------------------+
| #ID | Longitud<3 | Longitud>20 | Caracteres | Res. Esperado | Valores                   |
+-----+------------+-------------+------------+---------------+---------------------------+
| 01  |      V     |      V      |     V      |     true      | asdf                      |
+-----+------------+-------------+------------+---------------+---------------------------+
| 02  |      V     |      V      |     V      |     true      | asd                       |
+-----+------------+-------------+------------+---------------+---------------------------+
| 03  |      V     |      V      |     I      |     false     | asdâ                      |
+-----+------------+-------------+------------+---------------+---------------------------+
| 04  |      -     |      I      |     I      |     false     | asdfgäsdfgasdfgasdfgh     |
+-----+------------+-------------+------------+---------------+---------------------------+
| 05  |      I     |      -      |     I      |     false     |  äs                       |
+-----+------------+-------------+------------+---------------+---------------------------+
| 06  |      I     |      -      |     V      |     false     |  as                       |
+-----+------------+-------------+------------+---------------+---------------------------+
| 07  |      -     |      I      |     V      |     false     |  asdfgasdfgasdfgasdfgh    |
+-----+------------+-------------+------------+---------------+---------------------------+
*/

$esperados=array(1 => true, 2 => true, 3 => false, 4 => false,
5 => false, 6 => false, 7 => false);
$valores=array(1 => 'asdf', 2 => 'asd', 3 => 'asdâ', 4 => 'asdfgäsdfgasdfgasdfgh',
5 => 'äs', 6 => 'as', 7 => 'asdfgasdfgasdfgasdfgh');

for($i=1; $i<=7; $i++){
    $resultados[$i]=comprobar_nombre_usuario($valores[$i]);
}
if($resultados==$esperados){
    echo "<h2>Pasa las pruebas</h2>";
}
else{
    echo "<h2>No pasa las pruebas</h2>";
}
?>