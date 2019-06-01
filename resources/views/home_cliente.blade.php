<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo asset('css/estiloBase.css') ?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap" rel="stylesheet">
    
    <title>Home</title>

</head>

<body>
    <div class="headerHome">
        <h1>AeroSul - Revenda de Aeronaves </h1>
    </div>

    <div class="headerBuscar">

        <select name="" id="">
            <option value="EMBRAER">EMBRAER</option>
            <option value="CESSNA">CESSNA</option>
            <option value="PIPER">PIPER</option>
        </select>

        <input type="text"> <button type="submit">BUSCAR</button>
    </div>


    <!-- <div class="cards_field">
        <div class="card">
            <div class="card_foto"></div>
            Nome: Embraer ASDASD <br />
            Valor: 874.125.123,00
            <div class="abrir_card">VER MAIS DETALHES</div>
        </div> -->


        @foreach($data as $airplane) 
        <div class="card">
            <div class="card_foto"></div>
            Nome: {{$airplane['secondName']}} <br />
            {{$airplane['name']}} <br />
            Valor: {{$airplane['value']}}R$
            
            <div class="abrir_card">VER MAIS DETALHES</div>
        </div>
        @endforeach
 

    </div>

</body>

</html>