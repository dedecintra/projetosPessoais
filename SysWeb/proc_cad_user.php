<?php
    //inserindo dados do formulario cadastro
    session_start();

    //chamando a conexao com o banco de dados
    require 'conexao.php';

    $usuario = $_POST['usuarioc'];
    $nome =$_POST['nomec'];
    $senha =$_POST['senhac'];
    $senhaconfirme =$_POST['senhaconfirmec'];

    //INCRIPITANDO A SENHA em uma senha de 32bit
    $crypt = md5($senha);

    //inseri os dados no banco de daods
    $sql ="INSERT INTO user VALUES";
    $sql .= "(null,'$nome','$usuario','$crypt')";

    //verifica se foi realizado com sucesso 
    if ($conexao->query($sql) == TRUE) {
        $_SESSION['cadsucess'] = "Cadastro de usuario realizado com sucesso"; 
        header("Location: cad-usuario.php");
    } else {
        echo "Erro: " .$sql . "<br>" . $conexao->error;
    }
    
    //encerra a conexao com a base de dados 
    $conexao->close();
?>