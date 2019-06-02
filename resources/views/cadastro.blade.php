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
        <label for="">Modelo:</label> <br />
    <input type="text" name="name" id="" value="{{old('name')}}">

        <label for="">Nome Da Aeronave:</label> <br />
        <input type="text" name="secondName" id="" value="{{old('secondName')}}">

        <label for="">Fabricante:</label> <br />
        <input type="text" name="manufacture_id" id="" value="{{old('manufacture_id')}}">

        <label for="">Horas de Voo:</label> <br />
        <input type="number" name="flightTime" id="" value="{{old('flightTime')}}">
    </div>
    <div class="container-l1">
        <label for="">Classe:</label> <br />
        <select name="type" id="">
            <option value="Monomotor">Monomotor</option>
            <option value="Bi-Monomotor">Bi-Monomotor</option>
            <option value="Jato">Jato</option>
            <option value="Helicóptero">Monomotor</option>
        </select>

        <label for="">Cidade em que esta alocado:</label> <br />
        <input type="text" name="actualCity" id="actualCity" value="{{old('actualCity')}}">

        <label for="">Valor:</label> <br />
        <input type="number" name="value" id="" value="{{old('value')}}">

        <label for="">Ano:</label> <br />
        <input type="number" name="year" id="" value="{{old('year')}}">
    </div>
    <div class="container-l1">
        <label for="">Observações:</label> <br />
        <textarea name="observation" id="" cols="30" rows="8" value="{{old('observation')}}"></textarea>
    </div>
    <div class="container-l1">
        <label for="">Descrição:</label> <br />
        <textarea name="description" id="" cols="30" rows="8" value="{{old('description')}}"></textarea>
    </div>
    <div class="container-l1">
        <label for="">Foto:</label>
        <input type="file" name="" id="" value="{{old('name')}}">
    </div>
    <div class="container-l1">
        <input type="submit" class="RegisterButton" value="CADASTRAR">
    </div>
</form>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop