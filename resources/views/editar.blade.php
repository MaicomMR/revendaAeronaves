{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>EDITAR AERONAVE JÁ EXISTENTE.</h1>
@stop

{{-- {{dd($data)}} --}}


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


<form method="post" action="{{ route('controller.update', $data->id)}}" enctype="multipart/form-data">
    {{ method_field('put') }}
    {{ csrf_field() }}
    {{-- {{ csrf_field() }} --}}
    {{-- {{dd($data)}} --}}
    {{-- ARRUMAR A CIMA A PASSAGEM DOS PARAMETROS --}}
    <div class="container-l1">
        <label for="name">Modelo:</label> <br />
    <input type="text" name="name" id="name" value="{{$data->name}}">

        <label for="secondName">Nome Da Aeronave:</label> <br />
        <input type="text" name="secondName" id="secondName" value="{{$data->secondName}}">

        <label for="manufacture_id">Fabricante:</label> <br />
        <input type="text" name="manufacture_id" id="manufacture_id" value="{{$data->manufacture_id}}">

        <label for="flightTime">Horas de Voo:</label> <br />
        <input type="number" name="flightTime" id="flightTime" value="{{$data->flightTime}}">



        <label for="type">Classe:</label> <br />
        <select name="type" id="type">
        <option>{{$data->type}}</option>
            <option value="Monomotor">Monomotor</option>
            <option value="Bi-Monomotor">Bi-Monomotor</option>
            <option value="Jato">Jato</option>
            <option value="Helicóptero">Monomotor</option>
        </select>
    
        <label for="actualCity">Cidade em que esta alocado:</label> <br />
        <input type="text" name="actualCity" id="actualCity" value="{{$data->actualCity}}">

        @if($data->photo)
        {{-- {{dd($data)}} --}}
        <br /><br /><img src="{{asset('storage/').'/'.$data->photo}}" alt="" style="width: 320px;">
        @endif
    </div>
    <div class="container-l1">
        <label for="value">Valor:</label> <br />
        <input type="text" name="value" id="value" value="{{$data->value}}">

        <label for="year">Ano:</label> <br />
        <input type="number" name="year" id="" value="{{$data->year}}">

        <label for="observation">Observações:</label> <br />
        <input type="text" name="observation" id="" value="{{$data->observation}}">       

        <label for="description">Descrição:</label> <br />
        <input type="text" name="description" id="" value="{{$data->description}}">

        <label for="photo">Foto:</label>
        <input type="file" name="photo" id="photo" value="{{$data->photo}}"><br/>

        
        <input type="submit" class="RegisterButton" value="ATUALIZAR">
    </div>
</form>


@stop


@section('js')
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="/js/jquery.mask.min.js"></script>

@endsection


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
