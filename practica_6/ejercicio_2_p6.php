<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "42330102";
        $database="php_data";
        $conexion=mysqli_connect($servername, $username, $password, $database);
        if(!$conexion){
        ?>
        <div class="alert alert-danger" role="alert">
            <strong>No se pudo conectar la base de datos: </strong> <?php die("Error: ".mysqli_connect_error()); ?>
        </div>
        <?php 
        } else { 
            $sql="SELECT id, ciudad, pais, habitantes, superficie, tienemetro FROM ciudades";
            $result = mysqli_query($conexion, $sql);
        ?>
        <div class="row">
            <button type="button" class="btn btn-success">Registrar ciudad</button>
            <br>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <caption>Tabla de ciudades</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">País</th>
                        <th scope="col">Habitantes</th>
                        <th scope="col">Superficie</th>
                        <th scope="col">Tiene metro</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0) { 
                    while($row = mysqli_fetch_assoc($result)) {?>
                    <tr class="">
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["ciudad"]; ?></td>
                        <td><?php echo $row["pais"]; ?></td>
                        <td><?php echo $row["habitantes"]; ?></td>
                        <td><?php echo $row["superficie"]; ?></td>
                        <td><?php echo $row["tienemetro"]; ?></td>
                        <td><button type="button" class="btn btn-primary">Editar</button></td>
                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                    <?php }} else{ ?>
                        <tr>
                            <td rowspan="8">Aun no se han cargado ciudades</td>
                        </tr><?php } ?>
                </tbody>
            </table>
        </div>
        <?php mysqli_close($conexion); } ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>