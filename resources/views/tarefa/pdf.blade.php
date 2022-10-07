<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv = "Conten-Type" Content = "text/html; charset=UTF-8"/>
    <style>
        .titulo{
            border:1px;
            background-color:#c2c2c2;
            text-align:center;
            width:100%;
            text-transform:uppercase;
            font-weight:bold;
            margin-bottom:25px;
        }
        .tabela{
            width:100%;
        }
        .tabela th{
            text-align:left;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
    <body>
        
        <div class="titulo">Listagem de Tarefas</div>
        <table class="tabela">
        <thead>
            <th>ID</th>
            <th>Tarefa</th>
            <th>Data Limite Conclusao</th>
        </thead>
        <tbody>
            @foreach ($tarefas as $key => $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->tarefa }}</td>
                    <td>{{ date('d/m/Y',strtotime($tarefa->data_limite_conclusao)) }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
        <div class="page-break">Pagina 1</div>
        <div class="page-break">Pagina 2</div>
        <div class="page-break">Pagina 3</div>
    </body>
</html>