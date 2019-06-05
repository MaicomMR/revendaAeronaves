

<h1></h1>
<?php
date_default_timezone_set('America/Sao_Paulo');

$data = (object) $data

?>
<h2>AeroSul Agradece o seu contato</h2><br/><br/>

Senhor(a) {{($data->contactName)}}, muito obrigado pela sua atenção, em breve entraremos em contato através do seu e-mail({{($data->email)}})
ou pelo seu telefone{{($data->phone)}}.<br/>

<br/><br/><br/>

<h3>Dados da Aeronave que você demonstrou interesse:</h3>

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



        <br/><br/><br/>
Atenciosamente, equipe AeroSul.<br>
Caso deseje entrar em contato conosco sinta-se a vontade:
Telefones:<br/>
(99) 3456-3495<br/>
(94) 8570-0273<br/>
(29) 9-2456-8475<br/>
<br><br>
E-mail enviado automaticamente<br>
{{date("j F, Y, g:i a")}}