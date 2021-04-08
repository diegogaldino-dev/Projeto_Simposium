<?php
  include_once('pages/conexao.php');


  mysqli_select_db($conexao, $dbname);
    // cria a instrução SQL que vai selecionar os dados
  $query = sprintf("SELECT * FROM usuarios");
  // executa a query
  $dados = mysqli_query($conexao, $query) or die(mysqli_connect_errno());
  // transforma os dados em um array
  $linha = mysqli_fetch_assoc($dados);
  // calcula quantos dados retornaram
  $total = mysqli_num_rows($dados);



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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><span>LOGO</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="barra-nav">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item"><a class="nav-link" href="">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="">Opções</a></li>
          <li class="nav-item"><a class="nav-link" href="">Perfil</a></li>
        </ul>
      </div>
    </nav>  


    <div id="main" class="container-fluid" style="margin-top: 50px">
      <div id="top" class="row">
        <div class="col-sm-3">
          <h2>Itens</h2>
        </div>
        <div class="col-sm-6">
            
        </div>
        <div class="col-sm-3">
          <a href="add.html" class="btn btn-primary pull-right h2" style="float: left; position: relative;">Novo Item</a>
          </div>
        </div>

        <hr/>

        <div id="list" class="row">

        <div class="table-reposve col-md-12">
          <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Email</th>
                <th>RG</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th class="actions">Ações</th>
              </tr>
            </thead>

        <tbody>
     

          <?php
          // se o número de resultados for maior que zero, mostra os dados
          if($total > 0) {
              // inicia o loop que vai mostrar todos os dados
              do {
          ?>
                  <tr>
                    <td><?=$linha['id']?></td>
                    <td><?=$linha['nome']?></td>
                    <td><?=$linha['email']?></td>
                    <td><?=$linha['rg']?></td>
                    <td><?=$linha['cpf']?></td>
                    <td><?=$linha['data_nascimento']?></td>
                    <td class="actions">
                      <a class="btn btn-success btn-xs"href="#">
                      <i class="fas fa-user-check"></i>
                      Ativar</a>
                      <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#delete-modal">
                      <i class="fas fa-user-times"></i>
                      Bloquear</a>
                            
                    </td>
                  </tr>

            <?php
             // finaliza o loop que vai mostrar os dados
             }while($linha = mysqli_fetch_assoc($dados));
               // fim do if 
               }
            ?>
          </tbody>
        </table>

     
                     
                  

   
  </div>

   


  

    
    <footer>
     
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>