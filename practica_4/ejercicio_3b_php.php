<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Edad: <input name="age" size="2">
    <input type="submit" name="submit" value="Ir">
    </form>
<?php
}
else {
    $age = $_POST['age'];
    if ($age >= 21) {
        echo 'Mayor de edad';
    }
    else {
        echo 'Menor de edad';
    }
}
?>
</body></html>

<!--
//AUTOR: IVAN BISCALDI    
El codigo devuelve un documento html cuando llega una solicitud http con 
accion -> "<nombre_del_archivo>.php". Si dentro de la solicitud (que debe
ser del tipo: http post) no se encuentra
una variable de nombre "sumbit" se enviara un formulario solicitando que
se ingrese la edad. El formulario tiene como destino el mismo archivo que
lo genero.
En caso de existir la variable "sumbit" se enviara un mensaje dependiendo
del valor del campo edad enviado por el formulario. 
-->