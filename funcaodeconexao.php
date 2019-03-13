<?php
	$hostName = "localhost";
	$userName = "root";
	$passWord = "";
	$nomeBanco = "aluno_db";
	$portaAcesso = 3306;
	
	$conexao = mysqli_connect ($hostName, $userName, $passWord, $nomeBanco, $portaAcesso);
	
	if (mysqli_connect_errno())
	{
		echo "Falha na conexão: " . mysqli_connect_error();
	}else
	{
		echo "Conexão realizada"."</br>";
	}
	
		//mysqli_query($conexao, "CREATE DATABASE Aluno_db");
		
		//CRIAR UMA TABELA
		//mysqli_query($conexao,"CREATE TABLE aluno_tb (ra_aluno int(11) NOT NULL auto_increment,nome_aluno varchar(100) NOT NULL,oficial1_aluno double NOT NULL,oficial2_aluno double NOT NULL,parcial1_aluno double NOT NULL,parcial2_aluno double NOT NULL,mediaFinal_aluno double NOT NULL,PRIMARY KEY (ra_aluno))");
		
		
	
		
		
		//INSERIR VALORES
		$conexao->query("
			insert into aluno_tb(
			ra_aluno,
			nome_aluno,
			oficial1_aluno,
			oficial2_aluno,
			parcial1_aluno,
			parcial2_aluno,
			mediaFinal_aluno)
			values (1,'Igao', 10, 10, 10, 10, 10)
			");
		
		//OU 
		//$ra = 2;$nome = "IGAO";$p1 = 50;$p2 = 60;$t1 = 80;$t2 = 40;$mf = 45;
		//mysqli_query($conexao,"insert into Aluno_tb(ra_aluno,nome_aluno,oficial'_aluno,oficial2_aluno,parcial1_aluno,parcial2_alunomediaFinal_aluno) values ('$ra', '$nome', '$p1', '$p2', '$t1', '$t2', '$mf')")
		
		
		
		
		//EXIBE VALORES
		$result = mysqli_query($conexao, "
		SELECT ra_aluno,
		nome_aluno,
		oficial1_aluno,
		oficial2_aluno,
		parcial1_aluno,
		parcial2_aluno,
		mediaFinal_aluno
		FROM aluno_tb");
		while($row = mysqli_fetch_array($result)){
			echo "Registro Acadêmico : ".$row['ra_aluno']."</br>";
			echo "Nome               : ".$row['nome_aluno']."</br>";
			echo "Avaliação oficial 1: ".$row['oficial1_aluno']."</br>";
			echo "Avaliação parcial 1: ".$row['parcial1_aluno']."</br>";
			echo "Avaliação oficial 2: ".$row['oficial2_aluno']."</br>";
			echo "Avaliação parcial 2: ".$row['parcial2_aluno']."</br>";
			echo "Média Final        : ".$row['mediaFinal_aluno']."</br>";
			echo "<hr>";
		};
		
	mysqli_close($conexao);
	?>