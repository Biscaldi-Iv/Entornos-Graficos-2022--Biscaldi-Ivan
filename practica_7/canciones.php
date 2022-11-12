<!doctype html>
<html lang="es">

<head>
    <title>Buscador de canciones</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
    <!-- place navbar here -->
        <ul class="nav justify-content-center flex-column bg-dark">
            <li class="nav-item p-5">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <div class="input-group w-50">
                            <input type="search" required minlength="4"
                            class="form-control" name="buscador" id="buscador" aria-describedby="helpId" 
                            placeholder="Buscar">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                        <small id="helpId" class="form-text text-muted">
                            Inserte el nombre de la cancion que quiere buscar
                        </small>
                    </div>
                </form>
            </li>
        </ul>
    </header>
<?php
$canciones= array();

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $palabra= $_POST["buscador"];
    $server='localhost';
    $user='root';
    $password='42330102';
    $db='prueba';
    $conn=new mysqli($server, $user, $password, $db);
    if ($conn->connect_error) {
        die("No se puede conectar a la base de datos, intentelo de nuevo!\n". $conn->connect_error);
    }
    $sql="SELECT canciones FROM buscador WHERE canciones LIKE $palabra";
    $result=$conn->query($sql);
    if ($result->num_rows() > 0) {
        while ($row=$result->fetch_assoc()) {
            $canciones[]=$row["canciones"];
        }
    }
    $conn->close();
}
?>
    <main>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col">Cancion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($canciones as $c) { ?>
                        <tr>
                            <td><?php echo $c; ?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer>
    <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
