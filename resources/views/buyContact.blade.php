
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
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="/js/jquery.mask.min.js"></script>

    <title>Home</title>

</head>
@section('content')
<body>
    <div class="headerHome">
        <h1>AeroSul - Revenda de Aeronaves </h1>       
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    

    <div class="airplaneData">
<br>
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


          

        <form method="post" action="{{ route('registerContact') }}" enctype="multipart/form-data">

        <input type="text" class="form-control" id="productId" name="productId" placeholder="Seu Nome" value="{{$data->id}}" readonly style="display: none;">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                        <br/><input type="text" class="form-control" id="contactName" name="contactName" placeholder="Seu Nome" value="{{old('contactName')}}">
                </div>
            </div>
            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">E-mail:</label>
                    <div class="col-sm-10">
                            <br/><input type="text" class="form-control" id="email" name="email" placeholder="Seu e-mail para contato" value="{{old('email')}}">
                    </div>
                </div>
                <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Telefone:</label>
                        <div class="col-sm-10">
                                <br/><input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                        </div>
                    </div>
            <button type="submit" class="btn btn-primary">ENTRAR EM CONTATO</button>
        </form>
    </div>
    <script>
            $(document).ready(function() {
              $('#phone').mask('(##) # ## ## ## ##');
            });
          </script>  
</body>
</html>