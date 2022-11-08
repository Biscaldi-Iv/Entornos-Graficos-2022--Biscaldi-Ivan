<?php
header("Location: /periodico.php", TRUE, 301);
if (isset($_COOKIE["noticia"])) {
    setcookie("noticia", "", time() - 3600);
}
exit;
?>