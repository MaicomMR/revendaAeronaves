{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>ESTATÍSTICAS</h1>
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
            <th>Fabricante</th>
            <th>Somatória</th>
          </tr>
          @foreach($data as $airplane)
                
                


                <tr>
                <td>{{$airplane->manufacture_id}}</td>
                <td>{{$airplane['num']}}</td>
                
                </tr>             
          @endforeach          
        </table>



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            
          ['Task', 'Hours per Day'],
         
        @foreach ($data as $airplane)
        {!! "['$airplane->manufacture_id', $airplane->num]," !!}
        @endforeach
        ]);


        var options = {
          title: 'Aeronaves Organizadas por Fabricante'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop