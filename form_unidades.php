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
    
        <h4 style="text-align: center;">CADASTRO DE UNIDADES</h4>

        <form action="inserirUnidade.php" method="post" style="margin-top:20px">
        
            <!--<div style="align-self: center;"><img src="images/FUNDHAS2021.png"></div>-->

            <div class="mb-3">
                <label for="nomeUnidade" class="form-label">Nome da Unidade</label>
                <input type="text" class="form-control" id="nomeUnidade" name="nomeUnidade" autocomplete="off" required>
            </div>
          
            <div class="mb-3">
                <label for="regiaoUnidade" class="form-label">Região</label>
                <select class="form-select" aria-label="Região" name="codRegiao" id="codRegiao" required>
                    <option selected>Selecione a região</option>
                    <option value="1">Leste</option>
                    <option value="2">Oeste</option>
                    <option value="3">Norte</option>
                    <option value="4">Sul</option>
                    <option value="5">Centro</option>
                    <option value="6">Zona Rural</option>
                    <option value="7">São Francisco Xavier</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="cepUnidade" class="form-label">CEP</label>
                <input type="number" class="form-control" name="cepUnidade" id="cepUnidade" autocomplete="off" required>
            </div>

            <div class="mb-3">
                <label for="enderecoCompleto" class="form-label">Endereço Completo</label>
                <input type="text" class="form-control" name="enderecoCompleto" id="enderecoCompleto" autocomplete="off" required>
            </div>

            <div class="mb-3">
                <label for="capacidadeOperacional" class="form-label">Capacidade Operacional</label>
                <input type="number" class="form-control" name="capacidadeOperacional" id="capacidadeOperacional" autocomplete="off" required>
            </div>   
            
            <div class="mb-3">
                <label for="capacidadeAtual" class="form-label">Capacidade Atual</label>
                <input type="number" class="form-control" name="capacidadeAtual" id="capacidadeAtual" autocomplete="off" required>
            </div>

            <!--<div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Carregar Planta Unidade</label>
            </div>   -->                    
            <div style="text-align: right;">
                <button type="submit" id="botao" name="butCadastrar"  class="btn btn-sm">CADASTRAR</button>
            </div>

        </form>
    </div>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>