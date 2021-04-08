<?PHP  if(!isset($_SESSION)) 
  { 
    session_start(); 
  }
?>
<!doctype html>
<html lang="pt-br">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/fontawesome-all.min.css">
    <!--Estilo de Pagina-->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Hello, world!</title>
  </head>

  <body>   
  <!-- Barra de navegação -->
  <nav class=" fixed-top navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="" data-toggle="collapse">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barranavegacao">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="barranavegacao">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="cursos.html">Cursos</a></li>
        <li class="nav-item"><a class="nav-link" href="contato.html">Contato</a></li>
        <li class="nav-item"><a class="btn-custom" href="portal_aluno.html">Portal do aluno</a></li>
      </ul>        
    </div>
  </nav>

  <br><br><br>
  <div class="container">
    <div class="col-sm-10" style="width: 600px; margin-left: 250px; margin-top: 50px;">
      <div class="jumbotron">
        <div class="form-group">
          <center><h1>Login</h1></center>
        </div>
        <form class="form-horizontal" style="margin-left: 50px;" action="pages/valida_login.php" method="post">
          <div class="form-group input-group">
            <span class="input-group-addon">
            <i class="fas fa-user" style="padding-top: 10px;"></i>&nbsp
            </span>
            <input name="email" type="email" class="form-control" placeholder="Enter Email...">
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon">
            <i class="fas fa-lock" style="padding-top: 10px;"></i>&nbsp
            </span>
            <input name="senha" type="password" class="form-control" name="password" placeholder="Enter password...">
          </div>
          <div class="form-group" >
            <button type="submit" class="btn btn-primary">Login</button> 
            <a href="cadastro.php" class="btn btn-danger" role="button">Cadastre-se</a>                            
          </div>             
          <div class="form-group">
            <a href="#">Esqueceu a Senha?</a>
          </div>
          <p class="lead">
          <?php 
            if(isset($_SESSION['loginErro'])){
              echo $_SESSION['loginErro'];
              unset($_SESSION['loginErro']);
            }
          ?>
        </p>
        </form>
      </div>
    </div>
  </div>

  <footer> 
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            &copy; 2018 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Teste</a>. Todos os direitos reservados.
          </div>    
        </div>       
      </div>
    </div>
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>