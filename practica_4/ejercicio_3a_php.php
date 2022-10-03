<html>
<head><title>Documento 1</title></head>
<body>
<?php
echo "<table width = 90% border = '1' >";
$row = 5;
$col = 2;
for ($r = 1; $r <= $row; $r++) {
echo "<tr>";
for ($c = 1; $c <= $col;$c++) {
echo "<td>&nbsp;</td>\n";
}
echo "</tr>\n";
}
echo "</table>\n";
?>
</body></html>
<!--
//AUTOR: IVAN BISCALDI    
El codigo devuelve un documento html con una tabla 
de 5 filas y 2 columnas que tiene todas sus celdas
en blanco, cuando llega una solicitud http con 
accion <nombre_del_archivo>.php 
-->