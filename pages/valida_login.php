
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else
    {
        session_destroy();
        session_start(); 
    }
?>

<?php 
    //Author = Kawan
    include_once('conexao.php');

    $email = $_POST["email"];
    $senha  = $_POST["senha"];
    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha ='$senha'";

    $result = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_assoc($result);

    if (isset($resultado)) {
        $_SESSION['usuarioid'] = $resultado['id'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['documento'] = $resultado['rg'];
        $_SESSION['usuariocpf'] = $resultado['cpf'];
        $_SESSION['usuarioemail'] = $resultado['email'];
        $_SESSION['usuariosenha'] = $resultado['senha'];
        $_SESSION['usuariodata'] = $resultado['data_nascimento'];
        $_SESSION['autenticado'] = true ;
        header("Location:../tela_usuario.php");
        unset($_SESSION['loginErro']);
    }else{    
        $_SESSION['autenticado'] = false ;
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        echo $_SESSION['loginErro'];
        header("Location:../portal_aluno.php");
        $_SESSION['pais'] = false;    
    }
        
?>
