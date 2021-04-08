<?php
	//Author = Kawan

	//Dados do servidor.

	$host = "localhost";
	$username = "root";
	$dbname = "db_dados";
	$password = "";

	// Criando conexão com o banco de dados.
	$conexao = mysqli_connect($host, $username, $password, $dbname);

	//Checando conexão.

	if (!mysqli_connect($host, $username, $password, $dbname)) {
		echo "Erro ao acessar o banco de dados!";
	}

?>