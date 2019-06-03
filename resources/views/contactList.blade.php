{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>CONTATOS DE COMPRA</h1>
@stop

@section('content')
<style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
        </head>
                
        <table>
          <tr>
            <th>Produto</th>
            <th>Produto Código</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Enviar Email</th>
            <th>Apagar</th>
          </tr>

          @forelse($data as $contact)
          <div class="card">
                <tr>
                <td>{{$contact['id']}}</td>
                <td>{{$contact['id']}}</td>
                <td>{{$contact['contactName']}}</td>
                <td>{{$contact['phone']}}</td>
                <td>{{$contact['email']}}</td>
                <td><button type="submit" class="btn btn-primary btn-sm">ENVIAR E-MAIL</button></td>
                <td><button type="submit" class="btn btn-danger btn-sm">APAGAR CONTATO</button></td>

                </tr>   
          </div>
          @endforeach


          
        </table>
        {{ $data->links() }}

@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop