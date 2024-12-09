<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquinas</title>
    @vite(['resources/css/pagMaq.css'])
</head>
<body style="background-image : url({{ asset('/storage/img/fundo-site.jpeg') }});">
    <div class="header">
      <h2> Maquinário oficina </h2> 
    </div>

    <div class="container">
        <div class="elemento">
             <h1>{{ $maquinas->nome }}</h1> 

            
           
            <h2>Tabela de óleos recomendados</h2>
           
            <p>
                @php
                    $tabela = json_decode($maquinas->tabela, true)
                @endphp
            <table border="1">
                <thead>
                    <tr>
                        @foreach($tabela[0] as $item)
                        <th>{{ $item }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabela as $i => $linha)
                    @if($i == 0)
                    @php
                        continue;
                    @endphp
                    @endif
                    <tr>
                        @foreach($linha as $coluna)
                        <td>{{ $coluna }}</td>    
                        @endforeach 
                    </tr>
                    @endforeach
                    <!-- <tr>
                        <td>ATLANTIC</td>
                        <td>EUREKA - 68 </td>
                        <td>EUREKA – 46</td>
                    </tr>
                    <tr>
                        <td>ESSO </td>
                        <td>ÓLEO PARA TURBINA - 68</td>
                        <td>ÓLEO PARA TURBINA – 46</td>
                    </tr>
                     <tr>
                        <td>MOBIL OIL</td>
                        <td>DTE - 26</td>
                        <td>DTE - 24</td>
                    </tr>
                    <tr>
                        <td>IPIRANGA</td>
                        <td>IPTUR AW - 68</td>
                        <td>IPTUR AW - 46</td>
                    </tr>
                    <tr>
                        <td>PETROBRÁS</td>
                        <td>MARBRAX TR - 68</td>
                        <td>MARBRAX TR - 46</td>
                    </tr>
                    <tr>
                        <td>SHELL</td>
                        <td>TELLUS - 68</td>
                        <td>TELLUS - 46</td>
                    </tr>
                    <tr>
                        <td>TEXACO</td>
                        <td>REGAL R & O - 68 </td>
                        <td>REGAL R & O - 46</td>
                    </tr> -->
                </tbody>
            </table>    
            </p> 
            @if(isset($maquinas->manual) && !empty($maquinas->manual))
            <p>
                <h4>Em caso de dúvida, consulte o manual</h4>
                <a href="{{ $maquinas->manual }}" target="_blank">Manual {{ $maquinas->nome }}</a>
            </p> 
            @endif
        </div>

        <div class="elemento2">
            <img src="{{ asset($maquinas->imagem) }}" width="300px" height="200px">
        </div>

        <div class="formulario">
            <h2>Registro</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{ session('success') }}</li>
                    </ul>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
<form  method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required/><br />
    <input type="text" name="curso" placeholder="Curso" required/><br />
    <input id="date" type="date" name="data" required/>
    <input type="time" id="appt" name="horario" min="09:00" max="18:00" required />

    <h2>O que foi feito</h2> 
            <div class="caixa-selecao">
                @foreach ($maquinas->servicos as $servico)
                <div>
                    <label class="caixa-selecao">{{ $servico->descricao }}</label>
                    <input type="checkbox" name="acoes[]" value="{{ $servico->descricao }}" />
                </div>
                @endforeach
            
            </div>
            
            <div>
                <button class="botao" type="submit">Enviar dados</button>
            </div>

            <a href="{{ route('historico', ['id' => $maquinas->id]) }}" class="botao">Ver Histórico</a>
        </div>
    </div>
</body>
</html>