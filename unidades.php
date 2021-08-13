<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>[FUNDHAS] - Fundação Hélio Augusto de Souza || Sistema de Gestão >>> DECA - Listagem de Unidades</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5505c43458.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container" style="margin-top:40px">
        <?php include "menu.php";?>
        <h3 style="margin-top:40px">Unidades Cadastradas</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Unidade</th>
                  <th scope="col">Região</th>
                  <th scope="col">Capacidade Total</th>
                  <th scope="col">Capacidade Atual</th>
                  <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
                include "conexao.php";
                //$sql = "SELECT * FROM `sgd_unidade`";

                $sql = "SELECT `unidadeID`,`unidadeNOME`,`unidadeREGIAO`,"; 
                $sql .= "case `unidadeREGIAO` when 1 then 'Leste' ";
                $sql .= "when 2 then 'Oeste' ";
                $sql .= "when 3 then 'Norte' ";
                $sql .= "when 4 then 'Sul' ";
                $sql .= "when 5 then 'Centro' ";
                $sql .= "when 6 then 'Zona Rural' ";
                $sql .= "when 7 then 'São Francisco Xavier' ";
                $sql .= "end vRegiao, ";
                $sql .= "`unidadeCEP`, ";
                $sql .= "`unidadeENDERECO`, ";
                $sql .= "`unidadeCAPACIDADE_TOTAL`, ";
                $sql .= "`unidadeCAPACIDADE_ATUAL`,  ";
                $sql .= "`unidadePLANTA`, ";
                $sql .= "`unidadeMAPA` ";
                $sql .= " FROM `sgd_unidade`";

                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $idUnidade = $array['unidadeID'];
                    $nomeUnidade = $array['unidadeNOME'];
                    $regiaoUnidade = $array['unidadeREGIAO'];
                    $nomeRegiao = $array['vRegiao'];
                    $capTotalUnidade = $array['unidadeCAPACIDADE_TOTAL'];
                    $capAtualUnidade = $array['unidadeCAPACIDADE_ATUAL'];
            ?>
            <tr>
                <td><?php echo $nomeUnidade ?></td>
                <td><?php echo $nomeRegiao ?></td>
                <td style="text-align: center"><?php echo $capTotalUnidade ?></td>
                <td style="text-align: center"><?php echo $capAtualUnidade ?></td>
                <td><a class="btn btn-warning btn-sm" style="color: #fff" href="editarUnidade.php?id=<?php echo $idUnidade?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>
                <?php } ?>
            </tr>

        </table>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>