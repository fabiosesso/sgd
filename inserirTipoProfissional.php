<?php

	include 'conexao.php';

	$tipoprofissional = $_POST['descricaoTipoProfissional'];

	$sql = "INSERT INTO `sgd_tipoprofissional`(`tipoprofissionalDESCRICAO`) VALUES ('$tipoprofissional')";

	$inserir = mysqli_query($conexao, $sql);

	header("Location: tipos_profissionais.php");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!--<div class="container" style="width: 500px; margin-top: 20px;">
	<center><h4>Sala inserida com sucesso!!!</h4></center>
	<div style="padding-top: 20px;">
		<center><a href="salas.php" role="button" class="btn btn-sm btn-primary">RELAÇÃO DE SALAS</a></center>
	</div>
	
</div>-->
