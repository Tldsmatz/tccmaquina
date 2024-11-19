<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/style.css'])
</head>
<body style="background-image : url('{{ asset('/storage/img/fundo-site.jpeg') }}');">
    <div class="header">
        <h2> PCM 4.0 </h2> 
      </div>
  
    <br>
    <br>

    <div class="container">
        @foreach($maquinas as $maquina)
        <div class="maquina">
            <img src="{{ asset( $maquina->imagem ) }}" alt="Torno gs200">
            <h2>{{ $maquina->nome}}</h2>
            <a href="{{ route('maquinas', ['id' => $maquina->id]) }}">Utilizar maquina</a>
        </div>
        @endforeach

        <dialog id="alerta">            
            <p>Olá, alerta da máquina</p>
            <button>Enviar</button> 
        </dialog>
       
    </div>

</body> 
<script>
    
    const alerta = document.getElementById('alerta');
    const botaoAlerta = document.querySelector('#alerta button')

    // function AbrirAlertaTorno(id){
    //     alerta.showModal();
        

    //     botaoAlerta.addEventListener('click' , function() {
    //         window.location.href = '';
    //     })
    // }

    function AbrirAlertaBomba(){
        alerta.showModal();
        

        botaoAlerta.addEventListener('click' , function() {
            window.location.href = 'maquinas';
        })
    }
</script>


