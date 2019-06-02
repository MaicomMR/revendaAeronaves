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
        <input type="text" name="name" id="">

        <label for="">Nome Da Aeronave:</label> <br />
        <input type="text" name="secondName" id="">

        <label for="">Fabricante:</label> <br />
        <input type="text" name="manufacture_id" id="">

        <label for="">Horas de Voo:</label> <br />
        <input type="number" name="flightTime" id="">
    </div>
    <div class="container-l1">
        <label for="">Cidade em que esta alocado:</label> <br />
        <input type="text" name="actualCity" id="actualCity">

        <label for="">Valor:</label> <br />
        <input type="number" name="value" id="">

        <label for="">Ano:</label> <br />
        <input type="number" name="year" id="">
    </div>
    <div class="container-l1">
        <label for="">Observações:</label> <br />
        <textarea name="observation" id="" cols="30" rows="8"></textarea>
    </div>
    <div class="container-l1">
        <label for="">Descrição:</label> <br />
        <textarea name="description" id="" cols="30" rows="8"></textarea>
    </div>
    <div class="container-l1">
        <label for="">Foto:</label>
        <input type="file" name="" id="">
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