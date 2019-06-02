<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/estiloBase.css') ?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap" rel="stylesheet">

   

    <title>Home</title>

</head>
@section('content')
<body>
        <div class="pageArea">
    <div class="headerHome">
        <h1>AeroSul - Revenda de Aeronaves </h1>
        
    </div>

    <div class="headerBuscar">
        <form method="get" action="{{route('buscaEspecifica', 'busca')}}">
            <select name="" id="">
                <option value="EMBRAER">EMBRAER</option>
                <option value="CESSNA">CESSNA</option>
                <option value="PIPER">PIPER</option>
            </select>

            <input type="text" name="buscar" id="buscar" style="width: 15vw;">
            <button type="submit">BUSCAR</button>
            <span style="float: right;">
            <a href="{{route('home')}}">
                ADM</a>
            </span>
        </form>

    </div>
    
    @forelse($data as $airplane)
    <div class="card">
        <div class="card_foto">
        <img src="{{asset('storage/').'/'.$airplane->photo}}" alt="" style="width: 210px; height: 210px;">

        </div>
        Nome: {{$airplane['secondName']}} <br />
        {{$airplane['name']}} <br />
        {{-- Valor: {{money_format('%.2n', $airplane->value)}}R$ --}}
        Valor: {{number_format($airplane->value, 2, ',', ' ')}}R$

        
        <a href="{{ route('aviaoExibe', $airplane->id)}}">
            <div class="abrir_card">VER MAIS DETALHES</div>
        </a>
    </div>
    
    @endforeach
    <div class="footer">
            {{ $data->links( "pagination::bootstrap-4") }}
        </div>
    </div>

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
    @stop
    
    
    
</body>

</html>

