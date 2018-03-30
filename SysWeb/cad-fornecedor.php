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
  
<!-- NAVBAR
================================================== -->
  <body>
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
                        <li><a href="#">Clientes</a></li>
                        <li><a href="#">Funcionarios</a></li>
                        <li><a href="#produtos" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">Produtos<span class="caret"></span></a>
                           
                            <ul class="dropdown-menu">
                                <li><a href="#">Cores</a></li>
                            </ul>
                        <li><a href="#">Financeiro</a></li>
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
      
<div class="container marketing">
<br>
<br>
<br>

   <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="CadastroFornecedor">
        <form class="form-horizontal" method="post" action="proc_cad_fornecedor.php" id="meuFormulario" >
            <!-- Form Name -->
            <h2>Cadastro de fornecedor</h2>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputDomiSocial">Denominação social</label>  
              <div class="col-md-6">
                <input name="inputDomiSocial" type="text" placeholder="" class="form-control input-md" required autofocus>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputCep">CEP</label>  
              <div class="col-md-4">
                <input name="inputCep" type="text" placeholder="" class="form-control input-md">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputEndereco">Endereço</label>  
              <div class="col-md-6">
                <input name="inputEndereco" type="text" placeholder="" class="form-control input-md">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputBairro">Bairro</label>  
              <div class="col-md-6">
                <input name="inputBairro" type="text" placeholder="" class="form-control input-md">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputCidade">Cidade</label>  
              <div class="col-md-6">
              <input id="inputCidade" name="inputCidade" type="text" placeholder="" class="form-control input-md">
              </div>
              <button > </button>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputUf">UF</label>  
              <div class="col-md-6">
              <input id="inputUf" name="inputUf" type="text" placeholder="" class="form-control input-md">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputTelefone">Telefone</label>  
              <div class="col-md-4">
              <input id="inputTelefone" name="inputTelefone" type="text" placeholder="" class="form-control input-md">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputEmail">Email</label>  
              <div class="col-md-6">
              <input id="inputEmail" name="inputEmail" type="text" placeholder="email@dominio.com" class="form-control input-md">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputCnpj">CNPJ</label>  
              <div class="col-md-5">
              <input id="inputCnpj" name="inputCnpj" type="text" placeholder="" class="form-control input-md">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputInscricao">Inscrição</label>  
              <div class="col-md-6">
              <input id="inputInscricao" name="inputInscricao" type="text" placeholder="" class="form-control input-md">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputRamo">Ramo de atividade</label>  
              <div class="col-md-6">
              <input id="inputRamo" name="inputRamo" type="text" placeholder="" class="form-control input-md">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="inputContato">Contato</label>  
              <div class="col-md-6">
              <input id="inputContato" name="inputContato" type="text" placeholder="(xx) xxxx-xxxx" class="form-control input-md">

              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="buttonSalvar"></label>
              <div class="col-md-8">
                <button id="buttonSalvar" name="buttonSalvar" class="btn btn-success">Salvar</button>
                <input type="button" value="Voltar" onClick="JavaScript: window.history.back();" class="btn btn-danger">
              </div>
            </div>
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
                        inputDomiSocial: {
                            required: true
                        },
                        inputCnpj: {
                        require: TestaCPF,
                            function TestaCPF(inputCnpj) {
                                        var Soma;
                                        var Resto;
                                        Soma = 0;
                                        if (inputCnpj == "00000000000") return false;

                                        for (i=1; i<=9; i++) Soma = Soma + parseInt(inputCnpj.substring(i-1, i)) * (11 - i);
                                        Resto = (Soma * 10) % 11;

                                        if ((Resto == 10) || (Resto == 11))  Resto = 0;
                                        if (Resto != parseInt(inputCnpj.substring(9, 10)) ) return false;

                                        Soma = 0;
                                        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(inputCnpj.substring(i-1, i)) * (12 - i);
                                        Resto = (Soma * 10) % 11;

                                        if ((Resto == 10) || (Resto == 11))  Resto = 0;
                                        if (Resto != parseInt(inputCnpj.substring(10, 11) ) ) return false;
                                        return true;
                        },
                    },
                    messages:{
                        inputDomiSocial: {
                            required: "Campo obrigatorio"
                        },
                        inputCep: {
                            require: "cpf invalido"
                                  },
                    }
                });
            </script>
            
      </section>

    </div>
   
         <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Voltar ao Topo</a></p>
        <p>&copy; 2018 SysWeb &middot;</p>
      </footer>

    </div><!-- /.container -->


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
