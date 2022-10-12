<!DOCTYPE html>
<html lang="en">
<head>
    <meta author="Ivan Biscaldi">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="container-fluid" style="padding:auto;">
        <h1>Consulta</h1>
        <form action="" method="POST" id="formulario">
            <div class="mb-3 row">
                <label for="destino" class="form-label">Para</label>
                <input name="destino" id="destino" type="text" class="form-control"
                onchange="document.getElementById('formulario').setAttribute('action','mailto:'+this.value)">
            </div>
            <div class="mb-3 row">
                <label for="subject" class="form-label">Asunto</label>
                <input name="subject" id="subject" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control" rows="3" id="message" name="message" readonly>
                Hola amigo/a, <br>    
                Te recomiendo visitar <?php echo $_SERVER[‘HTTP_HOST’]; ?>
                </textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Recomendar</button>
            </div>
        </form>
    </div>
</body>
</html>