<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo asset('css/estiloBase.css') ?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Home</title>

</head>

<body>
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

            <input type="text" name="buscar" id="buscar">
            <button type="submit">BUSCAR</button>
        </form>

    </div>


    <div class="airplaneData">

        Nome: {{$data['name']. '-'. $data['secondName']}} <br />
        Horas de voo: {{$data['flightTime']}}h <br />
        Localizado em: {{$data['actualCity']}} <br />
        Ano: {{$data['year']}} <br />
        Tipo: {{$data['type']}} <br />
        Valor: {{$data['value']}} <br />
        Observações: {{$data['observation']}} <br />
        Descrição: {{$data['description']}} <br />
    </div>
    <div class="airplanePhoto">
            <img src="{{asset('storage/').'/'.$data->photo}}" alt="" style="width: 100%;">
    </div>
    <div class="airplaneContact">

        <br>
        <form>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="contactName" placeholder="Seu Nome">
                </div>
            </div>
            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">E-mail:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="contactName" placeholder="Seu e-mail para contato">
                    </div>
                </div>
                <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Telefone:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="contactName" placeholder="(XX) 920004947">
                        </div>
                    </div>

            <button type="submit" class="btn btn-primary">ENTRAR EM CONTATO</button>
        </form>



    </div>

</body>

</html>