<?php
  include_once('pages/conexao.php');
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
    
  <div class="col-md-8 offset-md-2">
    <!-- form user info -->
    <div class="card card-outline-secondary">
      <div class="card-header">
        <h3 class="mb-0">Cadastre-se e se torne nosso aluno(a)!</h3>
      </div>
      <div class="card-body">
        <form class="form" role="form" autocomplete="off" method="POST">
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Nome Completo:</label>
            <div class="col-lg-9">
              <input name="nome" class="form-control" type="text" placeholder=" Exemplo.. José Silva">
            </div>
          </div>                             
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Email</label>
            <div class="col-lg-9">
              <input name="email" class="form-control" type="email" placeholder="email@gmail.com">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Senha</label>
            <div class="col-lg-9">
              <input name="senha" class="form-control" type="password">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">RG:</label>
            <div class="col-lg-9">
              <input name="rg" class="form-control" type="text">
            </div>
          </div>                              
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">CPF:</label>
            <div class="col-lg-9">
              <input name="cpf" class="form-control" type="text">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Data de Nascimento:</label>
            <div class="col-lg-9">
              <input name="data" type="date" class="form-control" >
            </div>
          </div>
          <input type="hidden" name="cadastrar" value="register">
          <button type="submit" class="btn btn-primary">Pronto !</button>
        </form>
        <?php
          if (isset($_POST['cadastrar']) && $_POST['cadastrar'] == "register") {
            $nome = $_POST['nome'];
            //$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $rg = $_POST['rg'];
            $cpf = $_POST['cpf'];
            $data_nascimento = $_POST['data'];
                    
            if (empty($nome) || empty($email) || empty($senha) || empty($rg) || empty($cpf) || empty($data_nascimento)) {
              echo '<br><br>Preencha todos os campos';
            }else{
              $query = "SELECT * FROM usuarios WHERE email = '$email'";
              $result = mysqli_query($conexao, $query);
              $resultado = mysqli_fetch_assoc($result);

              if (isset($resultado)) {
                echo '<br><br>Já existe um usuário cadastrado com este email:&nbsp$email!';
              }else{
                $cadastrar = "INSERT INTO usuarios (nome, email, senha, rg, cpf, data_nascimento) VALUES ('$nome', '$email', '$senha', '$rg', '$cpf', '$data_nascimento')";
                if (mysqli_query($conexao, $cadastrar)) {
                  echo '<br><br>Cadastro efetuado com sucesso.';
                  echo '<br><br>Clique <a href="usuario_login.php">aqui</a> para entrar.';
                }else{
                  echo "Erro ao cadastrar, contate um administrador!";
                }
              }
            }
          }
        ?>
      </div>
    </div>
  </div>                   

  <br><br><br><br>

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