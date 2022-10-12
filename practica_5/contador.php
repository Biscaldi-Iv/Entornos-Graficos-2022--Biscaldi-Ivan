<?php
session_start();
if(isset($_SESSION['visitadas'])){
    $_SESSION['visitadas']+=1;
} else {
    $_SESSION['visitadas']=1;
}
echo "Visitaste ".$_SESSION['visitadas']." páginas";
?>