<?php
//Autor: Ivan Biscaldi
//Indicar las salidas:

//parte a
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]"; 
//salida:
//Has entrado en esta pagina a las (hora) horas, con (minutos) minutos y (segundos)
//segundos, del (dd/mm/aaaa)
//Ejemplo:
//Has entrado en esta pagina a las 18 horas, con 40 minutos y 31
//segundos, del 3/10/2022

//parte b
function sumar($sumando1,$sumando2){
$suma=$sumando1+$sumando2;
echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);//salida: 5+6=11
?>