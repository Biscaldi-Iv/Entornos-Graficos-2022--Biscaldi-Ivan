<?php session_start();
if (isset($_SESSION["email"])) { ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <div class="container p-5 my-5">
        <h1>Bienvenido <?php echo $_SESSION["nombre"]; ?>!</h1>
        <div class="table-responsive">
            <table class="table table-info">
                <thead>
                    <tr>
                        <th scope="col">Contenido</th>
                        <th scope="col">Informacion del alumno</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Codigo de curso</td>
                    </tr>
                    <tr>
                        <td><?php echo $_SESSION["codigo"]; ?></td>
                        <td><?php echo $_SESSION["nombre"]; ?></td>
                        <td><?php echo $_SESSION["email"]; ?></td>
                        <td><?php echo $_SESSION["codigocurso"]; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
  </header>
  <main>

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
<?php } else {
    echo "Los datos no fueron correctamente cargados<br>";
    $server=$_SERVER["SERVER_NAME"];
    die("<a href=\"$server/formulario.html\">Intentelo de nuevo</a>"); } ?>