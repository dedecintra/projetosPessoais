<?php
require 'config.php';
$conexao = new mysqli(WINEX_HOST,WINEX_USER,WINEX_PASS,WINEX_DB);
if ($conexao -> connect_error) {
    echo 'erro ao conectar com bd'. $conexao->connect_error;

}else{
    echo"sucesso ";
}
?>