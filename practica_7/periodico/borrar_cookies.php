<?php
if (isset($_COOKIE["noticia"])) {
    setcookie("noticia", "", time() - 3600);
    setcookie("noticia", "", time() - 3600, "/");
}
header("Location: /periodico.php", TRUE, 301);
exit;
?>