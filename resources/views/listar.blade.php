{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>AERONAVES CADASTRADAS.</h1>
@stop


@section('content')

@if (session('status'))
   <div class="alert alert-success">
      {{ session('status') }}
   </div> 
@endif

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
            <th>Código</th>
            <th>Nome F.</th>
            <th>Nome S.</th>
            <th>Fabricante</th>
            <th>Modalidade</th>
            <th>Horas</th>
            <th>Ano</th>
            <th>Valor</th>
            <th>Cadastro</th>
            <th>Editar</th>
            <th>Deletar</th>
          </tr>

          @forelse($data as $airplane)
          <div class="card">
                <tr>
                <td>{{$airplane['id']}}</td>
                <td>{{$airplane['name']}}</td>
                <td>{{$airplane['secondName']}}</td>
                <td>{{$airplane['manufacture_id']}}</td>
                <td>{{$airplane['type']}}</td>
                <td>{{$airplane['flightTime']}}h</td>
                <td>{{$airplane['year']}}</td>
                <td>{{$airplane['value']}}</td>
                <td><img src="{{asset('storage/').'/'.$airplane->photo}}" alt="" style="width: 100px; height: 100;"></td>  
                
                

                <td><button type="submit" class="btn btn-primary btn-sm">EDITAR</button></td>

                <form method="POST" action="{{route('controller.destroy', $airplane->id)}}">
                  {{ method_field('delete')}}
                  {{ csrf_field() }}
                  

                <td><button type="submit" class="btn btn-danger btn-sm">APAGAR</button></td>
              </form>
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