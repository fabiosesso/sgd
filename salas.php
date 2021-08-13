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

        <h3 style="margin-top:40px">Salas Cadastradas</h3>
        <br>

        <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="pesquisa_sala.php" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </nav>

        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Nome Sala</th>
                  <th scope="col">Capacidade</th>
                  <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
                include "conexao.php";
                $sql = "SELECT * FROM `sgd_sala`";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $idSala = $array['salaID'];
                    $nomeSala = $array['salaNOME'];
                    $capacidadeSala = $array['salaCAPACIDADE'];
            ?>
            <tr>
                <td><?php echo $nomeSala ?></td>
                <td><?php echo $capacidadeSala ?></td>
                <td><a class="btn btn-warning btn-sm" style="color: #fff" href="editarSala.php?id=<?php echo $idSala?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>
                <?php } ?>
            </tr>

        </table>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>