

<h1></h1>

<?php

$data = (object) $data

?>
<h3>Informativo de Contato para compra</h3>

@foreach($data as $contact)
@endforeach

Nome do contato: {{($data->contactName)}}<br/>
E-mail do interessado: {{($data->email)}}<br/>
Telefone para Contato: {{($data->phone)}}<br/>

Produto que demonstrou interesse: {{$data->productId}}
<br/><br/><br/>

<h3>Dados da Aeronave:</h3>

{{-- Modelo da Aeronave: {{($data->attributes[14]->name}}<br/> --}}


Nome: {{$emailData['name']. '-'. $emailData['secondName']}} <br />
        Horas de voo: {{$emailData['flightTime']}}h <br />
        Localizado em: {{$emailData['actualCity']}} <br />
        Ano: {{$emailData['year']}} <br />
        Tipo: {{$emailData['type']}} <br />
        Valor: {{number_format($emailData->value, 2, ',', '.')}}R$ <br />

        <div class="airplanePhoto">
            <td><img src="{{public_path('storage/').$emailData->photo}}" alt="" style="width: 150px;"></td>  
        </div>