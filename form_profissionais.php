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
    
        <h4 style="text-align: center;">CADASTRO DE PROFISSIONAIS</h4>

        <form action="inserirSala.php" method="post" style="margin-top:20px">
        
            <!--<div style="align-self: center;"><img src="images/FUNDHAS2021.png"></div>-->

            <div class="mb-3">
                <label for="unidadeProfissional" class="form-label">Região</label>
                <select class="form-select" aria-label="Unidade Atual" name="codUnidade" id="codUnidade" required>
                    <option selected>Selecione a unidade</option>
                    <option value="1">Unidade Alto da Ponte</option>
                    <option value="2">Unidade Dom Pedro I</option>
                    <option value="3">Unidade Dom Bosco</option>
                    <option value="4">Unidade Centro</option>
                    <option value="5">Unidade Leste</option>
                    <option value="6">Unidade Petrobrás</option>
                    <option value="7">Unidade Embraer</option>
                    <option value="8">Unidade Eugênio de Melo</option>
                    <option value="9">Unidade Sede</option>
                    <option value="10">Centro de Desenvolvimento Artístico</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nomeProfissional" class="form-label">Nome do Profissional</label>
                <input type="text" class="form-control" name="nomeProfissional" id="nomeProfissional" autocomplete="off" required>
            </div> 

            <div class="mb-3">
                <label for="tipoProfissional" class="form-label">Área Profissional</label>
                <select class="form-select" aria-label="Tipo de Profissional" name="codTipoProfissional" id="codTipoProfissional" required>
                    <option selected>Selecione área profissional</option>
                    <option value="1">Assistente Social</option>
                    <option value="2">Psicólogo</option>
                    <option value="3">Gestor</option>
                    <option value="4">Oficial Administrativo</option>
                    <option value="5">Professor</option>
                    <option value="6">Educador Social</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tipoProfissional" class="form-label">Cargo em Comissão/Gratificação</label>
                <select class="form-select" aria-label="Tipo de Profissional" name="codTipoProfissional" id="codTipoProfissional" required>
                    <option selected>Selecione cargo em comissão/gratificação</option>
                    <option value="1">Diretor</option>
                    <option value="2">Assessor</option>
                    <option value="4">Chefe de Divisão</option>
                    <option value="5">Supervisão</option>
                    <option value="6">Coordenação</option>
                    <option value="7">Concursado</option>
                </select>
            </div> 

            <div class="mb-3">
                <label for="dataNascimentoProfissional" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="dataNascimentoProfissional" id="dataNascimentoProfissional" autocomplete="off" required>
            </div> 

            <div class="mb-3">
                <label for="dataAdmissaoProfissional" class="form-label">Data de Admissão</label>
                <input type="date" class="form-control" name="dataAdmissaoProfissional" id="dataAdmissaoProfissional" autocomplete="off" required>
            </div> 

            <div class="mb-3">
                <label for="situacaoProfissional" class="form-label">Situação Atual</label>
                <select class="form-select" aria-label="Situação" name="codSituacaoProfissional" id="codSituacaoProfissional" required>
                    <option selected>Situação Atual</option>
                    <option value="1">Admitido</option>
                    <option value="2">Afastado</option>
                    <option value="3">Em férias</option>
                    <option value="4">Atestado Médico</option>
                    <option value="5">Folga Abonada</option>
                    <option value="6">Folga</option>
                    <option value="7">Demitido</option>
                    <option value="8">Suspenso</option>
                    <option value="12">Outro</option>
                </select>
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