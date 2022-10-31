<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="container">
        <?php
        include 'funciones.php';
        $servername = "localhost";
        $username = "root";
        $password = "12345";
        $database="php_data";
        $conn = new mysqli($servername, $username, $password, $database);
        if($conn->connect_error){
        ?>
        <div class="alert alert-danger" role="alert">
            <strong>No se pudo conectar la base de datos: </strong> <?php die("Error: ".$conn->connect_error); ?>
        </div>
        <?php 
        } else { 
            if(isset($_POST['formId1'])){
                $id = $_POST['formId1'];
                if($id<=0) { $id=0; }
                $nom_c=$_POST['ciudad'];
                $pais=$_POST['pais'];
                $habitantes=$_POST['habitantes'];
                $superficie=$_POST['superficie'];
                $tiene_m=$_POST['metro'];
                if(is_null($tiene_m)){ $tiene_m=0; }
                $ciudad=new Ciudad($id,$nom_c,$pais, $habitantes, $superficie, $tiene_m);
                $accion=$_POST['accion'];
                echo '<div class="alert alert-info" role="alert"><p class="mb-0">';
                switch ($accion) {
                    case 0: {
                        registrar($conn, $ciudad);
                        break;
                    }
                    case 1:{
                        editar($conn,$ciudad);
                        break;
                    }
                    case 2:{
                        eliminar($conn,$ciudad);
                        break;
                    }
                    default:break;
                }
                echo "</p></div>";
            }
            $sql="SELECT id, ciudad, pais, habitantes, superficie, tienemetro FROM ciudades";
            $result = $conn->query($sql);
        ?>
        <div class="row">
            <button type="button" class="btn btn-success" data-bs-target="#myModal" 
            data-bs-toggle="modal" onClick="regMode()">Registrar ciudad</button>
            <br>
        </div>
        <div class="table-responsive">
            <table class="table table-primary" id="tbl_ciudades" name="tbl_ciudades">
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
                    <?php if ($result->num_rows > 0) { 
                    while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["ciudad"]; ?></td>
                        <td><?php echo $row["pais"]; ?></td>
                        <td><?php echo $row["habitantes"]; ?></td>
                        <td><?php echo $row["superficie"]; ?></td>
                        <td><?php echo $row["tienemetro"]; ?></td>
                        <td><button type="button" class="btn btn-primary" data-bs-target="#myModal" 
                        data-bs-toggle="modal" onClick="editMode()">Editar</button></td>
                        <td><button type="button" class="btn btn-danger" data-bs-target="#myModal" 
                        data-bs-toggle="modal" onClick="deleteMode()">Eliminar</button></td>
                    </tr>
                    <?php }
                } else{ ?>
                        <tr>
                            <td rowspan="8">Aun no se han cargado ciudades</td>
                        </tr><?php } ?>
                </tbody>
            </table>
        </div>
        <?php $conn->close(); } ?>
    </div>

    <!-- Modal -->
    <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Datos de la ciudad</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <form action="ejercicio_2_p6.php" method="post">
            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-floating mb-3">
                <input
                    type="text" readonly
                    class="form-control" name="formId1" id="formId1" placeholder="Id de la ciudad">
                <label for="formId1">Id de la ciudad</label>
                </div>
                <div class="form-floating mb-3">
                <input
                    type="text" required
                    class="form-control" name="ciudad" id="ciudad" placeholder="Nombre de la ciudad">
                <label for="ciudad">Nombre de la ciudad</label>
                </div>
                <div class="form-floating mb-3">
                <input
                    type="text" required
                    class="form-control" name="pais" id="pais" placeholder="Pais">
                <label for="formId1">Pais</label>
                </div>
                <div class="form-floating mb-3">
                <input required
                    type="number" min="0"
                    class="form-control" name="habitantes" id="habitantes" placeholder="Habitantes de la ciudad">
                <label for="habitantes">Habitantes de la ciudad</label>
                </div>
                <div class="form-floating mb-3">
                <input required
                    type="number" step="0.01" min="0" 
                    class="form-control" name="superficie" id="superficie" placeholder="Superficie de la ciudad">
                <label for="superficie">Superficie de la ciudad</label>
                </div>
                <div class="mb-3">
                    <label for="metro" class="form-label">¿Tiene metro la ciudad?</label>
                    <select class="form-select form-select-lg" name="metro" id="metro" required>
                        <option value="0">No</option>
                        <option value="1">Si</option>
                    </select>
                </div>
                <div class="mb-3" hidden>
                    <label for="accion" class="form-label">Accion</label>
                    <select class="form-select form-select-lg" name="accion" id="accion">
                        <option value="0">Crear</option>
                        <option value="1">Editar</option>
                        <option value="2">Eliminar</option>
                    </select>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="row justify-content-center align-items-right g-2">
                    <div class="col">
                        <button type="sumbit" class="btn btn-success" id="env">Guardar</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </form>

        </div>
    </div>
    </div>
    <script src="modal_helper.js"></script>
</body>
</html>