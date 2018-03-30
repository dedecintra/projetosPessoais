<?php
    session_start();
    require 'secury.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SysWeb</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="vendor/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="vendor/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="vendor/carousel.css" rel="stylesheet">
    
    <!--INCLUINDO BIBLIOTECAS JQUERY| VALIDATION-->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    
  </head>

<!--classe criada para exibir o erro em vermelho -->
<style type="text/css">
    .error{
        color: red;
    }
</style>
    
  <body>
   
    <!--MENU INICIO-->
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">SysWeb</span>
              </button>
              <a class="navbar-brand" href="inicio.php">SysLoja</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">Cadastros <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="cad-fornecedor.php">Fornecedores</a></li>
                        <li><a href="#">Cliente</a></li>
                        <li><a href="#">Funcionarios</a></li>
                        
                        <li><a href="#produtos" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">Produtos<span class="caret"></span></a>
                           
                            <ul class="dropdown-menu">
                                <li><a href="#">Cores</a></li>
                            </ul>
                                </li>
                                <li><a href="#">Financeiro</a></li>
                                <li><a href="#">Parametro</a></li>
                                <li><a href="closed.php">Sair</a></li>
                            </ul>
                    </li>
                
                <li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">Movimentação<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Estoque</a></li> 
                         <li><a href="#">Financeiro</a></li> 
                          <li><a href="#">Caixa</a></li> 
                           <li><a href="#">Fechamento de comissoes</a></li>              
                    </ul>
                </li>
                  
               
                <li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">Relatórios<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Financeiro</a></li> 
                         <li><a href="#">Vendas</a></li> 
                          <li><a href="#">Comissoes</a></li> 
                           <li><a href="#">Estoque</a></li> 
                            <li><a href="#">Codigo de barras</a></li> 
                             <li><a href="#">Produtos</a></li>  
                              <li><a href="#">Pedidos</a></li>          
                    </ul>
                  </li>
                  
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Segurança <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="cad-usuario.php">Cadastro de Usúario </a></li>
                    <li><a href="#">Trocar Senha</a></li>
                    <li><a href="#">Efetuar Logoff</a></li>
                  </ul>
                </li>
                
                <li><a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">Utilitarios<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Configurações</a></li> 
                         <li><a href="#">Limpeza</a></li> 
                    </ul>     
                </li>
                </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    <!--MENU FIM-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <br>
    <br>
    <br>
    
    <div class="container">
            <h2>Formulario de cadastro de usuario</h2>
            <br>
            <form method="post" action="proc_cad_user.php" id="meuFormulario">
                        <div class="form-group">    
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputName">Nome</label>
                                    <input class="form-control" id="nomec" type="text" aria-describedby="nameHelp" name="nomec" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputLastName">Usuario</label>
                                    <input class="form-control" id="usuarioc" type="text" aria-describedby="nameHelp" name="usuarioc" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input class="form-control" id="senhac" type="password" name="senhac" requireds>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleConfirmPassword">Confirme a senha</label>
                                    <input class="form-control" type="password" name="senhaconfirmec" required>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
                                
                        <p class="text-center text-sucess">
                            <?php
                                if (isset($_SESSION['cadsucess'])){
                                    echo $_SESSION['cadsucess'];
                                    unset($_SESSION['cadsucess']);
                                }
                            ?>
                        </p>
                    </form>
                    <script>
                        $( "#meuFormulario" ).validate({
                            rules: {
                                nomec: {
                                    required: true
                                    },
                                usuarioc: {
                                    required: true
                                    },
                                senhac:{
                                    required: true
                                    },
                                senhaconfirmec: {
                                    required: true,
                                    equalTo: "#senhac"
                                    }
                            },
                            messages:{
                                nomec: {
                                    required: "Campo obrigatorio"
                                    },
                                usuarioc: {
                                    required: "Campo obrigatorio"
                                    },
                                senhac:{
                                    required: "Campo obrigatorio"
                                    },
                                senhaconfirmec: {
                                    required: "Campo obrigatorio",
                                    equalTo: "As senhas são diferentes"
                                    }
                            }
                        });
                    </script>
        </div>
    
    </div>

    <div class="container marketing">
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Volte ao topo</a></p>
        <p>&copy; 2018 SysWeb &middot;</p>
      </footer>

    </div>
    <!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="vendor/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="vendor/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>