<?php
    session_start();
    require 'conexao.php';
    //variaveis que serÃĢo armazenadas as informaÃ§Ãĩes do usuario
    $usuario = $_POST['usuarioc'];
    $senha = $_POST['senhac'];

    //para desencripitar a senha
    $crypt = md5($senha);

    //buscando no banco de dados nome da tabela com nome dos campos
    $very = "SELECT * FROM user WHERE usuario='$usuario' AND senha='$crypt' LIMIT 1";
    $exec = $conexao->query($very);

    $result = $exec->fetch_assoc();

    //validando os campos
    if (empty($result)) {
        $_SESSION['errologin'] = "Erro: usuario ou senha invalido";
        header("Location: index.php");
    } else {
        $_SESSION['iduser']= $result['id'];
        $_SESSION['nameuser']= $result['nome'];
        header("Location: inicio.php");
    }
?>