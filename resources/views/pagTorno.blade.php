<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torno</title>
    <link rel="stylesheet" href="pagTorno.css">
    @vite(['resources/css/pagTorno.css'])
</head>
<body style="background-image : url('{{ asset('/storage/img/fundo-site.jpeg') }}');">
    <div class="header">
      <h2> Maquinário oficina  </h2> 
    </div>

    <div class="container">
        
        <div class="elemento">
            

                <h1>TORNO CNC hardinge gs 200</h1>   
       
            <h2>Tabela de óleos recomendados:</h2>

            <p>

            <table border="1">
                <thead>
                    <tr>
                        <th>‎ </th>
                        <th>Sistema de Lubrificação Automática</th>
                        <th>Sistema de Refrigeração</th>
                        <th>Lubrificador do Sistema Pneumático</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($maquinas->oleos as $oleo)
                    <tr>
                        <td>{{ $oleo -> nome }}</td>
                        <td>{{ $oleo -> tipo }} </td>
                        
                    </tr>
                @endforeach
                  <!--  <tr>
                        <td>Ajuste do Sistema</td>
                        <td>2 cc/injeção</td>
                        <td>------</td>
                        <td>1 gota/5 ativações</td>
                    </tr>
                    <tr>
                        <td>Periodo de Abastecimento! Substituição</td>
                        <td>72 horas (max.)</td>
                        <td>Conforme necessário</td>
                        <td>Verificação Semanal</td>
                    </tr>
                    <tr>
                        <td>Limpeza do Reservatório</td>
                        <td>Reservatório a Cada 12 Meses</td>
                        <td>Mensal</td>
                        <td>a Cada 6 meses</td>
                    </tr> -->
                </tbody>
            </table>    
        </p>    
        </div>
        <div class="elemento2">
            <img src="{{ asset('/storage/img/gs200-torno.jpg')}}" width="300px" height="200px">
        </div>

        <div class="formulario">
            <h2>Registro</h2>
            <input type="text" placeholder="Nome" /><br />
            <input type="text" placeholder="curso" /><br />
            <input id="date" type="date" />
            <input type="time" id="appt" name="appt" min="09:00" max="18:00" required />
            
      
        
            <h2>O que foi feito</h2> 
      
            <div class="caixa-selecao">
             
            <div>
              <label class="caixa-selecao">Troca de óleo Sistema de lubrificação</label>
              <input type="checkbox" />
            </div>

            <br>
            <div>
              <label class="caixa-selecao">Troca de óleo sistema de refrigeração</label>
              <input type="checkbox" />

            </div>
            <br>
            <div>
              <label class="caixa-selecao">Troca de óleo sistema pneumatico</label>
              <input type="checkbox" />

            </div>

            <div>
                <label class="caixa-selecao">Utilização ‎ </label>
                <input type="checkbox" checked="checked"> 
  
              </div>

        </div>
      <div>
      
          <button class="botao">Enviar dados</button>
        </div>

        <a href="historico">

            <p><button class="botao"> ver Histórico</button></p>
    
        </a>
            
          </form>

    
    
</body>
</html>