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
    
        <h4 style="text-align: center;">CADASTRO DE TIPOS DE PROFISSIONAIS</h4>
        <form action="inserirTipoProfissional.php" method="post" style="margin-top:20px">
        
            <!--<div style="align-self: center;"><img src="images/FUNDHAS2021.png"></div>-->

            <div class="mb-3">
                <label for="descricaoTipoProfissional" class="form-label">Descrição do Tipo de Profissional</label>
                <input type="text" class="form-control" id="descricaoTipoProfissional" name="descricaoTipoProfissional" autocomplete="off" required>
            </div>   
                               
            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn-sm" name="butCadastrar">CADASTRAR</button>
            </div>

        </form>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>