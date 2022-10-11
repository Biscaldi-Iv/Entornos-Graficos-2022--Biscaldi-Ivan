<!DOCTYPE html>
<html lang="en">
<head>
    <meta author="Ivan Biscaldi">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Consultas</title>
</head>
<body>
    <div class="container-fluid" style="padding:auto;">
        <h1>Consulta</h1>
        <form action="consultas.php" method="POST">
            <div class="mb-3 row">
                <label for="destino" class="form-label">Para</label>
                <input name="destino" id="destino" type="text" class="form-control"
                readonly value="ivanbisc12@gmail.com">
            </div>
            <div class="mb-3 row">
                <label for="asunto" class="form-label">Asunto</label>
                <input name="asunto" id="asunto" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control" rows="10" id="message" name="message"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
<?php 
if(isset($_POST)){
    $receptor=$_POST["destino"];
    $asunto=$_POST["asunto"];
    $mensaje=$_POST["message"];
    $headers[]='MIME-Version: 1.0'.'\r\n';
    $headers[]='Content-Type:text/html;charset=UTF-8;'.'\r\n';
    if(mail($receptor, $asunto,$mensaje,$headers)){
    ?>
<footer class="bg-light text-center ">
    <div class="alert alert-success">
        <strong>Enviado!</strong>
    </div>
</footer>
<?php
} else{    
?>
<footer class="bg-light text-center ">
    <div class="alert alert-danger">
        <strong>No se pudo enviar!</strong>
    </div>
</footer>
<?php }
} ?>
</body>
</html>