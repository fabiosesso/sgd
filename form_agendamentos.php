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
    
        <h4 style="text-align: center;">AGENDAMENTOS DE ATENDIMENTOS</h4>

        <form action="inserirUnidade.php" method="post" style="margin-top:20px">
        
            <!--<div style="align-self: center;"><img src="images/FUNDHAS2021.png"></div>-->

            <div class="mb-3">
                <label for="dataAgendamento" class="form-label">Data do Agendamento</label>
                <input type="date" class="form-control" id="dataAgendamento" name="dataAgendamento" required>
            </div>

            <div class="mb-3">
                <label for="horaInicioAgendamento" class="form-label">Hora do Agendamento</label>
                <input type="time" class="form-control" id="horaInicioAgendamento" name="horaInicioAgendamento" required min="07:30" max="16:30">
            </div>

            <div class="mb-3">
                <label for="nomeUnidade" class="form-label">Região</label>
                <select class="form-select" aria-label="Unidade" name="codUnidade" id="codUnidade" required>
                    <option selected>Selecione a Unidade</option>
                    <option value="1">Centro de Desenvolvimento Artístico</option>
                    <option value="2">Unidade Alto da Ponte</option>
                    <option value="3">Unidade Centro</option>
                    <option value="4">Unidade Dom Bosco</option>
                    <option value="5">Unidade Dom Pedro I</option>
                    <option value="6">Unidade Embraer</option>
                    <option value="7">Unidade Eugênio de Melo</option>
                    <option value="8">Unidade Leste</option>
                    <option value="9">Unidade Petrobrás</option>
                    <option value="10">Unidade Sede</option>
                </select>
            </div>
          
            <div class="mb-3">
                <label for="tipoAgenda" class="form-label">Agenda Profissional</label>
                <select class="form-select" aria-label="Agenda Profissional" name="codAgenda" id="codAgenda" required>
                    <option selected>Selecione o tipo de Agenda Profissional</option>
                    <option value="1">Serviço Social</option>
                    <option value="2">Psicologia</option>
                    <option value="3">Odontologia</option>
                    <option value="4">Ambiental</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tipoAtendimento" class="form-label">Tipo de Atendimento</label>
                <select class="form-select" aria-label="Selecione o Tipo de Atendimento" name="codTipoAtendimento" id="codTipoAtendimento" required>
                    <option selected>Selecione o tipo de Atendimento</option>
                    <option value="1">Atendimento Individual</option>
                    <option value="2">Atendimento à Familia</option>
                    <option value="3">Visita Domiciliar</option>
                    <option value="4">Processo de Inscrição</option>
                    <option value="5">Abordagem Grupal</option>
                    <option value="6">Reunião de Equipe</option>
                    <option value="7">Discussão de Casos</option>
                    <option value="8">Discussão de Equipe</option>
                    <option value="9">Registros</option>
                    <option value="10">Relatórios</option>
                    <option value="11">Estudos de Situações Individuais</option>
                    <option value="12">Reunião Externa (Rede de Serviços, CRAS, Conselho, Escola)</option>
                    <option value="13">Consulta Odontológica</option>
                    <option value="14">Folga Abonada</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nomeProfissional" class="form-label">Nome do(a) Profissional</label>
                <select class="form-select" aria-label="Selecione o Tipo de Atendimento" name="codProfissional" id="codProfissional" required>
                    <option selected>Selecione o(a) Profissional</option>
                    <option value="1">Profissional 1</option>
                    <option value="2">Profissional 2</option>
                    <option value="3">Profissional 3</option>
                    <option value="3">Profissional 4</option>
                    <option value="3">Profissional 5</option>
                </select>
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