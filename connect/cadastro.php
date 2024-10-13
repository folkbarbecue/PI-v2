<?php
include("conexao.php");
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$tipo = $_POST['tipo'];
	$medico = $_POST['medico'];
	$restricao = $_POST['restricao'];



	$sql="INSERT INTO cadastro(nome, cpf, telefone, tipo, medico, restricao  )
	VALUES ('$nome', '$cpf', '$telefone', '$tipo', '$medico', '$restricao')";
	if(mysqli_query($conexao, $sql)){
		header("Location: ../connect/retorno.php");
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>