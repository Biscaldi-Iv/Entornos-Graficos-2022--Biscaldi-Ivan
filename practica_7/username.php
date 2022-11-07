<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta lang="es" name="author" content="Ivan Biscaldi">
    <title>Ejercicio 3- Practica 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
</head>
<body>
    <?php
    if (isset($_COOKIE['username'])) {
        $username=$_COOKIE['username'];
    }
    if (isset($_POST['username'])) {
        $username=$_POST['username'];
        setcookie('username', $username, time()+3600*24);
    }
    ?>
    <div class="container-fluid">
        <div class="row-cols-auto justify-content-center align-items-center g-2">
            <div class="col-lg-3">
                <h1>Registrar nombre de usuario</h1>
                <form method="post" action="username.php">
                    <div class="form-floating mb-3">
                      <input type="text" required
                        class="form-control" name="username" id="username" placeholder="Ingresar nombre de usuario">
                      <label for="username">Nombre de usuario</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-lg-3">
                <h1>Nombre de usuario</h1>
                <?php if(isset($username)) { ?>
                <p>El ultimo nombre de usuario ingresado fue:</p>
                <h3><?php echo $username; ?></h3>
                <?php } else { ?>
                <div class="alert alert-danger" role="alert">
                  <h4 class="alert-heading">No hay nombre de usuario</h4>
                  <p>Puede que aun no haya registrado un nombre de usuario<br>
                  o que se haya borrado la cookie que lo contenia</p>
                  <hr>
                  <p class="mb-0">Los nombres de usuario se guardaran en cookies</p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</html>