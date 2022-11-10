<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    session_start();
    $_SESSION["email"]=$email;
    $_SESSION["password"]=$password;
    header("Location: /principal.php",true, 301);
    exit();
} else {
    echo "<h1>Error</h1>\nNo se pudo leer email y contraseña";
}

?>