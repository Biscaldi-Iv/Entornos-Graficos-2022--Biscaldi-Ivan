<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta lang="es" name="author" content="Ivan Biscaldi">
    <title>Cambiador de estilos</title>
    <?php
    $estilos=array(0=>'Default',1=>'Colores', 2=>'Colores 2');
    $e=0;
    if (isset($_COOKIE['estilo'])) {
        $e=$_COOKIE['estilo'];
    }
    if (isset($_POST['estilo'])) {
        $e=$_POST['estilo'];
        setcookie('estilo', $e, time()+3600);
    }
    ?>
<style>
*{
    font-family: sans-serif;
}
p{
    font-size: bold 15px;
}
button{
    border: none;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    padding: 15px 32px;
    box-shadow: 0 9px #999;
}
.container{
    padding-left: 20px;
    padding-top: 20px;
    box-shadow: -10px -10px 5px lightblue;
}
<?php
switch ($e) {
    case 0: {?>
button{
    background-image: linear-gradient(left to right, lightgrey, grey);
    text-color: black;
    font-size: 18px;
}
.anuncio{
    background-color: lightgrey;
}
<?php break;
    }
    case 1:{?> 
button{
    background-image: linear-gradient(left to right, mediumseagreen, forestgreen);
    text-color: white;
    font-size: bold 18px;
}
button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
button:hover{
  background-color: #3e8e41;
}
.anuncio{
    background-color: mediumseagreen;
}
h1, p{
    text-align: center;
    color: white;
}
<?php break; 
    }
    case 2:{?>
button{
    background-image: linear-gradient(left to right, blue, lightblue);
    text-color: white;
    font-size: bold 18px;
}
button:active {
  background-color: rgb(20, 53, 118);
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
button:hover{
  background-color: rgb(20, 53, 118);
}
.anuncio{
    background-color: dodgerblue;
}
h1, p{
    text-align: center;
    color: white;
}
<?php } 
    } ?>   
</style>
</head>
<body>
    <div class="container">
        <div class="block-styles">
            <form method="post" action="ejercicio_1_p7.php">
                <select id="estilo" name="estilo">
                <?php
                foreach ($estilos as $i => $es) {
                    echo "<option value='$i'>$es</option>";
                }
                ?>
                </select>
                <button type="submit">Cambiar</button>
            </form>
        </div>
        <div class="anuncio">
            <h1>En esta pagina se pueden elegir los estilos</h1>
            <p>El estilo actual es: <?php echo $estilos[$e]; ?></p>
        </div>
    </div>
</body>
</html>