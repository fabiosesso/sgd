<?php
	include "conexao.php";
	$id = $_GET['id'];
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

    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
    
        <h4 style="text-align: center;">CADASTRO DE SALAS</h4>

        <form action="updateSala.php" method="post" style="margin-top:20px">
        	<?php
        		$sql = "SELECT * FROM `sgd_sala` WHERE salaID = $id";

        		$buscar = mysqli_query($conexao, $sql);
        		while ($array = mysqli_fetch_array($buscar)) {
        			$idSala = $array['salaID'];
                    $nomeSala = $array['salaNOME'];
                    $capacidadeSala = $array['salaCAPACIDADE'];        		
        	?>

            <div class="mb-3">
                <label for="nomeSala" class="form-label">Nome da Sala</label>
                <input type="text" class="form-control" id="nomeSala" name="nomeSala" autocomplete="off" value="<?php echo $nomeSala ?>">
                <input type="number" class="form-control" id="idSala" name="idSala" autocomplete="off" value="<?php echo $idSala ?>" style="display: none">
            </div>

            <div class="mb-3">
                <label for="capacidadeSala" class="form-label">Capacidade Sala</label>
                <input type="number" class="form-control" name="capacidadeSala" autocomplete="off" value="<?php echo $capacidadeSala ?>"> 
            </div>   
                               
            <!--<div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Carregar Planta Unidade</label>
            </div>   -->                    
            <div style="text-align: right;">
                <button type="submit" id="botao" name="butAtualizar"  class="btn btn-sm">A T U A L I Z A R</button>
            </div>
            
            <?php } ?>
        </form>
    </div>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>