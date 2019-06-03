 
<style>
    body{
        font-size: 9.5px;
    }
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

<h1>REVENDA DE AERONAVES - AERO SUL</h1>
<h2>CATÁLOGO DE AERONAVES</h2>
<h3>Data da Emissão do relatório: {{ date("d/m/Y") }}</h3>







<table>
        <tr>
          <th>Código</th>
          <th>Nome F.</th>
          <th>Nome S.</th>
          <th>Modalidade</th>
          <th>Horas</th>
          <th>Ano</th>
          <th>Valor</th>

          <th>Foto</th>
        </tr>

          <tbody>
                @foreach($data as $airplane)
                <tr>
                    <td>{{$airplane->id}}</td>                   
                    <td>{{$airplane->name}}</td>
                    <td>{{$airplane->secondName}}</td>
                    <td>{{$airplane->type}}</td>
                    <td>{{$airplane->flightTime}}</td>
                    <td>{{$airplane->year}}</td>
                    <td style="width: 70px;">{{number_format($airplane->value, 2, ',', ' ')}}R$</td>
                    <td><img src="{{public_path('storage/').$airplane->photo}}" alt="" style="width: 150px;"></td>  
            </tr>   
              
            
              @endforeach
            </tbody>

          
        </table>