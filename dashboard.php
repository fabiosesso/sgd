<?php
	include 'conexao.php';
	$sqlTotalUnidades = "SELECT count(*) as totalUnidades FROM `sgd_unidade`";
    $totalUnidades = mysqli_num_rows($sqlTotalUnidades);

	echo "Total de Unidades: ".$totalUnidades;


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>[FUNDHAS] - Fundação Hélio Augusto de Souza || Sistema de Gestão >>> DECA</title>
    <link rel="stylesheet" href="css/bootstrap.css">


    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }

        #botao {
            background-color: #FF1168;
            color: #ffffff;
            font-weight: bold;
        }

    </style>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="margin-top:40px">
        <?php include "menu.php";?>
    </div>

    <div class="mb-3" style="margin-left: 100px;">
        <label for="totalUnidadesCadastradas" class="form-label">Total de Unidades Cadastradas</label>
        <input type="text" class="form-control" id="totalUnidadesCadastradas" name="totalUnidadesCadastradas" value="<?php echo $totalUnidades ?>">
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>



</html>




