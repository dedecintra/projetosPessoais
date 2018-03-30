<?php session_start(); ?> 

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
    
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

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
  </head>
  
<?php
    unset($_SESSION['iduser'],$_SESSION['nameuser']);
  ?>
  
<!-- NAVBAR
================================================== -->
  <body>
    <div class="container-fluid p-4 ">
      <form class="form-signin col-md-5" method="post" action="proc_login.php">
        <h2 class="form-signin-heading text-center">Login</h2>
        <label class="sr-only">Usuario</label>
        <input type="text" class="form-control" placeholder="Usuario" name="usuarioc" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha"  name="senhac" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
        <br>
      </form>
    
        <!-- exibiÃƒÂ§ÃƒÂ£o do erro de senha ou usuario errado-->
        <p class="text-center text-danger">
          <?php
            if (isset($_SESSION['errologin'])){
              echo $_SESSION['errologin'];
              unset($_SESSION['errologin']);
            }
          ?>
        </p>
        <!-- exibiÃƒÂ§ÃƒÂ£o do erro de login  -->
        <p class="text-center text-danger">
          <?php
            if (isset($_SESSION['secury'])){
              echo $_SESSION['secury'];
              unset($_SESSION['secury']);
            }
          ?>
        </p>
      </div>  
     

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
