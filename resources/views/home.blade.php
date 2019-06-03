@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 style="text-align: center;">PAINEL DO ADMINISTRADOR</h1>
@stop

@section('content')

<div style="text-align: center;">
<h3>Nome do Usuário:</h3>
    <h4>{{Auth::user()->name}}</h4>
    
    <h3>E-mail utilizado para realizar o login:</h3>
    <h4>{{Auth::user()->email}}</h4>
</div>
    
@stop