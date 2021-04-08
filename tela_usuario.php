<?PHP  if(!isset($_SESSION)); 
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><span>Logo</span></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="barra-nav">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item"><a class="nav-link" href="">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="sair.php">Sair</a></li>
        </ul>
        
      </div>
    </nav>  


    <div id="main" class="container-fluid" style="margin-top: 50px">

        <div id="top" class="row">
          <div class="col-sm-12">
            <span></span>
          </div>
          
        </div>
        <!--topo-->

        
     <!-- List group -->
<div class="card card-outline-secondary">
         <div class="card-header">
          <div class="card-header">
          <h3 class="mb-6"><span><font size="30"><i class="fas fa-user-circle"></i></font></span><br>
            <?php
             echo "Bem Vindo(a)" .$_SESSION['usuarioNome'];
            ?>
        </h3>
        </div>
        <br>

      <div class="row">
       <div class="col-sm-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
      </div>  
        <div class="col-sm-10">  
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            Cursos

          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><?php
                    
           echo "<strong> Nome do Usuario: </strong>". $_SESSION['usuarioNome'];
           echo "<br> <strong>CPF: </strong>".$_SESSION['usuariocpf'];
           echo "<br> <strong>RG: </strong>".$_SESSION['documento'];
           echo "<br> <strong>Email: </strong>" .$_SESSION['usuarioemail'];
           echo "<br> <strong>Senha :</strong>".$_SESSION['usuariosenha'];
           echo "<br> <strong>Data De Nascimento: </strong>" .$_SESSION['usuariodata'];
           ?>
            
          </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">1</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">12</div>
        </div>
      </div>     
     </div>

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