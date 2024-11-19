<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico Torno</title>
    <link rel="stylesheet" href="{{ asset('css/historico.css') }}">
    @vite(['resources/css/historico.css'])
</head>

<body style="background-image : url('{{ asset('/storage/img/fundo-site.jpeg') }}');">
    <div class="header">
        <h2>Histórico de Uso</h2>
    </div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Máquina</th>
                    <th>Operador</th>
                    <th>Curso</th>
                    <th>Ação Realizada</th>
                    <th>Data</th>
                    <th>Horário</th>
                </tr>
            </thead>
            <tbody>
                @foreach($historico as $item)
                <tr>
                    <td>{{$item['Maquina']}}</td>
                    <td>{{$item['operador']}}</td>
                    <td>{{$item['curso']}}</td>
                    <td>{{$item['acao']}}</td>
                    <td>{{$item['data']}}</td>
                    <td>{{$item['horario']}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</body>

</html>