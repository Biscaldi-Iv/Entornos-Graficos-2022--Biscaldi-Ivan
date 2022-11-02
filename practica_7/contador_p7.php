<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta lang="es" name="author" content="Ivan Biscaldi">
    <title>Contador</title>
    <style>
    *{
    font-family: sans-serif;
    }
    .container{
    padding-left: 30px;
    padding-top: 30px;
    box-shadow: -10px -10px 5px lightblue;
    text-align: center;
    }
    .number{
    font-size: 78px;
    }
    </style>
</head>
<body>
    <?php
    $n=0;
    if (isset($_COOKIE['contador'])) {
        $n=$_COOKIE['contador'];
    }
    $n+=1;
    setcookie('contador', $n, time()+3600*24);
    ?>
    <div class="container">
        <h1>El numero de visitas a la pagina es:</h1>
        <div class="number">
            <?php echo $n; ?>
        </div>
    <button onclick="document.location='contador_p7.php'">Recargar</button>
    </div>
</body>
</html>