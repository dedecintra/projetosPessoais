<?php
ob_start();

if (( $_SESSION['iduser'] == "")||($_SESSION['nameuser']=="")) {
    $_SESSION['secury'] = "Erro fazer login";
    header("Location: index.php");
} 
?>