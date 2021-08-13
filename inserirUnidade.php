<?php

	include 'conexao.php';

	$unidade = $_POST['nomeUnidade'];
	$regiao = $_POST['codRegiao'];
	$cep = $_POST['cepUnidade'];
	$endereco = $_POST['enderecoCompleto'];
	$capOperacional = $_POST['capacidadeOperacional'];
	$capAtual = $_POST['capacidadeAtual'];

	$sql = "INSERT INTO `sgd_unidade`(`unidadeNOME`, `unidadeREGIAO`, `unidadeCEP`, `unidadENDERECO`, `unidadeCAPACIDADE_TOTAL`, `unidadeCAPACIDADE_ATUAL`) VALUES ('$unidade',$regiao,$cep,'$endereco',$capOperacional,$capAtual)";

	$inserir = mysqli_query($conexao, $sql);

	header("Location: unidades.php");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!--<div class="container" style="width: 500px; margin-top: 20px;">
	<center><h4>Unidade inserida com sucesso!!!</h4></center>
	<div style="padding-top: 20px;">
		<center><a href="unidades.php" role="button" class="btn btn-sm btn-primary">RELAÇÃO DE UNIDADES</a></center>
	</div>
	
</div>-->
