<?php 
	
	include_once('pages/conexao.php');
	$msg = false;

	if (isset($_FILES ['arquivo'])){
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensão de arquivo
		$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
		$diretorio = "upload/";//define o diretorio para onde enviamos o arquivo

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);//define o upload

		$sql_code = "INSERT INTO arquivo (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW() )";
		if ($mysql->query($sql_code))
			$msg = "arquivo enviado com Sucesso";
			else
				$msg = "falha ao enviar arquivo";
			
		

	}


 ?>

<h1>Upload de Arquivos</h1>
<?php if($msg !=false) echo "<p> $msg </p>";?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" required="" name="arquivo">
	<input type="submit" name="salvar">
</form>