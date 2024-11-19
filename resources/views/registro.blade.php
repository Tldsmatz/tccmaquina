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
                    <th>Data e Hora</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $historico)
                <tr>
                    <td>{{ $historico->maquina->nome }}</td> 
                    <td>{{ $historico->operador }}</td>
                    <td>{{ $historico->curso }}</td>
                    <td>{{ $historico->acao_realizada }}</td>
                    <td>{{ $historico->data_hora }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>