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

            
            <h2>Lubrificação:</h2>
            <p>Troca de óleo: a cada 7000 horas de trabalho.<br></p>
            <h2>Tabela de óleos recomendados</h2>
           
            <p>
            <table border="1">
                <thead>
                    <tr>
                        <th>Fabricante</th>
                        <th>ATÉ 3000 rpm</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($maquinas->oleos as $oleo)
                    <tr>
                        <td>{{ $oleo -> nome }}</td>
                        <td>{{ $oleo -> tipo }} </td> 
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
            <p>
                <h4>Em caso de dúvida, consulte o manual</h4>
                <a href="Manual_ITAP-INI_PT_REV_01.pdf" target="_blank">Manual Bomba ITAP</a>
            </p> 
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
                <div>
                    <label class="caixa-selecao">Troca de óleo</label>
                    <input type="checkbox" name="acoes[]" value="Troca de óleo" />
                </div>
                <br>
                <div>
                    <label class="caixa-selecao">Utilização</label>
                    <input type="checkbox" name="acoes[]" value="Utilização" checked="checked"> 
                </div>
            </div>
            
            <div>
                <button class="botao" type="submit">Enviar dados</button>
            </div>

            <a href="{{ route('historico', ['id' => $maquinas->id]) }}" class="botao">Ver Histórico</a>
        </div>
    </div>
</body>
</html>