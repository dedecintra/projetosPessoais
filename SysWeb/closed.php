<?php
    session_destroy();
    unset($_SESSION['iduser'],$_SESSION['nomeuser']);
    header("Location: index.php");
?>