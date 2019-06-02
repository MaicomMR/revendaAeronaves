{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>CADASTRAR NOVA AERONAVE.</h1>
@stop






@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<link rel="stylesheet" href="<?php echo asset('css/estiloBase.css') ?>" type="text/css">


<form method="post" action="{{ route('controller.store') }}" enctype="multipart/form-data">

    {{ csrf_field() }}

    <div class="container-l1">
        <label for="name">Modelo:</label> <br />
    <input type="text" name="name" id="name" value="{{old('name')}}">

        <label for="secondName">Nome Da Aeronave:</label> <br />
        <input type="text" name="secondName" id="secondName" value="{{old('secondName')}}">

        <label for="manufacture_id">Fabricante:</label> <br />
        <input type="text" name="manufacture_id" id="manufacture_id" value="{{old('manufacture_id')}}">

        <label for="flightTime">Horas de Voo:</label> <br />
        <input type="number" name="flightTime" id="flightTime" value="{{old('flightTime')}}">



        <label for="type">Classe:</label> <br />
        <select name="type" id="type">
            <option value="Monomotor">Monomotor</option>
            <option value="Bi-Monomotor">Bi-Monomotor</option>
            <option value="Jato">Jato</option>
            <option value="Helicóptero">Monomotor</option>
        </select>
    
        <label for="actualCity">Cidade em que esta alocado:</label> <br />
        <input type="text" name="actualCity" id="actualCity" value="{{old('actualCity')}}">
    </div>
    <div class="container-l1">
        <label for="value">Valor:</label> <br />
        <input type="text" name="value" id="value" value="{{old('value')}}">

        <label for="year">Ano:</label> <br />
        <input type="number" name="year" id="" value="{{old('year')}}">

        <label for="observation">Observações:</label> <br />
        <input type="text" name="observation" id="" value="{{old('observation')}}">       

        <label for="description">Descrição:</label> <br />
        <input type="text" name="description" id="" value="{{old('description')}}">

        <label for="photo">Foto:</label>
        <input type="file" name="photo" id="photo" value="{{old('name')}}"><br/>

        <input type="submit" class="RegisterButton" value="CADASTRAR">
    </div>
</form>


@stop


@section('js')
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="/js/jquery.mask.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#value').mask('.###.###.##0,00', {reverse: true});
    });
  </script>  
@endsection


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
