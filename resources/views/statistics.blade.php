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
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data1 = google.visualization.arrayToDataTable([
            
          ['Task', 'Hours per Day'],
         
        @foreach ($data as $airplane)
        {!! "['$airplane->manufacture_id', $airplane->num]," !!}
        @endforeach
        ]);


        var options1 = {
          title: 'Aeronaves Organizadas por Fabricante'
        };

        var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart1.draw(data1, options1);
 
        var data2 = google.visualization.arrayToDataTable([
            
          ['Tipo', 'Quantidade'],
         
        @foreach ($data2 as $airplane)
        {!! "['$airplane->type', $airplane->num]," !!}
        @endforeach
        ]);


        var options2 = {
          title: 'Aeronaves Organizadas por Tipo'
        };

        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart2.draw(data2, options2);
      }


    
    </script>
  </head>

  
  <body>
    
    <div id="piechart2" style="width: 900px; height: 500px;" style="float: left;"></div>
    <div id="piechart1" style="width: 900px; height: 500px;" style="float: left;"></div>
  </body>
</html>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop