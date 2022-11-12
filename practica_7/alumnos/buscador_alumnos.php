<?php
if ($_SESSION["REQUEST_METHOD"]=="POST") {
    $email=$_POST["email"] or 
    die("No se recibio el correctamente la direccion de correo electronico");
    $server='localhost';
    $user='root';
    $password='42330102';
    $db='base2';
    $conn=new mysqli($server, $user, $password, $db);
    if ($conn->connect_error) {
        die("No se puede conectar a la base de datos, intentelo de nuevo!\n". $conn->connect_error);
    }
    $sql="SELECT codigo, nombre, codigocurso, mail FROM alumnos WHERE mail=$email";
    $result=$conn->query($sql);
    if ($result->num_rows()<=0) {
        $conn->close();
        die("La direccion de correo electronico no pertenece a ningun alumno!");
    }
    $row = $result->fetch_assoc();
    $codigo = $row['codigo'];
    $nombre=$row['nombre'];
    $codigocurso=$row['codigocurso'];
    session_start();
    $_SESSION['codigo']=$codigo;
    $_SESSION['nombre']=$nombre;
    $_SESSION['codigocurso']=$codigocurso;
    $_SESSION['email']=$email;
    $conn->close();
    $server=$_SERVER["SERVER_NAME"];
    die("<a href=\"$server/bienvanida.php\">Verificar datos del alumno</a>");
} else {
    echo "No se puede visitar la pagina, intentelo de nuevo!";
}

?>