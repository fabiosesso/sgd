<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>[FUNDHAS] - Fundação Hélio Augusto de Souza || Sistema de Gestão >>> DECA - Listagem de Salas</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5505c43458.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container" style="margin-top:40px">
        <?php include "menu.php";?>
        <h3 style="margin-top:40px">Tipos de Profissionais Cadastradas</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Tipo de Profissional</th>
                  <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
                include "conexao.php";
                $sql = "SELECT * FROM `sgd_tipoprofissional`";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $tipoprofissionalDESCRICAO = $array['tipoprofissionalDESCRICAO'];
            ?>
            <tr>
                <td><?php echo $tipoprofissionalDESCRICAO ?></td>
                <td><a class="btn btn-warning btn-sm" style="color: #fff" href="editarTipoProfissional.php?id=<?php echo $tipoprofissionalID ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>
                <?php } ?>
            </tr>

        </table>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>