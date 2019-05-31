<?php

use Illuminate\Database\Seeder;

class airplanesForTest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // $table->increments('id');
        // $table->string('name');
        // $table->string('secondName');                       
        // $table->string('flightTime');
        // $table->string('actualCity');
        // $table->double('value');
        // $table->string('year');
        // $table->string('observation');
        // $table->string('type');
        // $table->string('description');

        $data = date('Y-m-d H:i:s');
        DB::table('airplanes')->insert([
            [
                'name' => "EMB-711",
                'secondname' => "Corisco",
                'flighttime' => 3507,
                'actualcity' => "Ribeirão Preto",
                'value' => 470000,
                'year' => 1976,
                'type' => 'Monomotor',
                'description' => 'teste',
                'manufacture_id' => 2,
                'observation' => "",
                'created_at' => $data
                
            ],
            [
                'name' => "Cessna 206",
                'secondName' => "Stationair",
                'flightTime' => 4189,
                'actualCity' => "Porto Alegre",
                'value' => 950000,
                'year' => 1974,
                'type' => 'Monomotor',
                'description' => 'Equipamento GNS 430 - Navcom KX 155 - Stormscope - ADF KR 87/02 - Horizontes - Transponder Garmin - XPonders - Seletora de áudio Garmin 340 com Markel Beacon e Entercom - ISL - Cronometro Digital.',
                'manufacture_id' => 1,
                'observation' => "",
                'created_at' => $data 
            ],
            [
                'name' => "PA-34",
                'secondName' => "Sêneca 5",
                'flightTime' => 5871,
                'actualCity' => "Belo Horizonte",
                'value' => 2750000,
                'year' => 2005,
                'type' => 'Bimotor',
                'description' => 'Painel 1 GNS 430 - 1 GNS 530 - 1 KMD 850 multi function (Radar, Storm Scope, EGPWS e TCAS) - Piloto Automático STec 55x - Homologado RNAV',
                'manufacture_id' => 3,
                'observation' => "",
                'created_at' => $data  
            ]]
        );
    }
}


