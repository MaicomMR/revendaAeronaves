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
                'created_at' => $data,
                'photo' => 'fotos/emb711.jpg'
                
            ],[
                'name' => "Cessna Citation",
                'secondName' => "Citation 501 SP",
                'flightTime' => 8040,
                'actualCity' => "Miami",
                'value' => 2900000,
                'year' => 1984,
                'type' => 'Monomotor',
                'description' => '# 8.040 TT
                # Ciclos 7.000
                # Horas disponíveis Motores: 1.740 h para o Overhal
                # Horas disponíveis para o HSI – LH 640 h e RH 1390 h
                # Entrega com fase V feita (vence em fev 17)
                # Full IFR - Radar Quadricolor - GPS. - Sem RVSM
                # Exterior muito bom - Sempre hangarado - Sem histórico de acidente
                # Interior homologado para 6 passageiros em muito bom estado c/ galley e toilette
                # Troco por Citation II ou vendo',
                'manufacture_id' => 1,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/citation501.jpg'
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
                'created_at' => $data,
                'photo' => 'fotos/cessna206.jpg'
            ],[
                'name' => "Bonanza",
                'secondName' => "F33",
                'flightTime' => 4189,
                'actualCity' => "Dourados",
                'value' => 550000,
                'year' => 1990,
                'type' => 'Monomotor',
                'description' => '3.200 TT - 470 h após geral até 2022 (OUTRA - NETO)',
                'manufacture_id' => 4,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/bonanzav35.jpg'
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
                'created_at' => $data,
                'photo' => 'fotos/seneca5.jpg'  
            ],
            [
                'name' => "Bonanza",
                'secondName' => "Bonanza F-33",
                'flightTime' => 5871,
                'actualCity' => "São Paulo",
                'value' => 800000,
                'year' => 1991,
                'type' => 'Monomotor',
                'description' => '# 3.200 TT - 470 h após geral até 2022 (OUTRA - NETO)
                # IFR - PA III - Stormscope
                # Sem registro de acidente
                # Todas as cadernetas desde zero
                # Troca por Bonanza A36',
                'manufacture_id' => 4,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/bonanza33.jpg'  
            ],
            [
                'name' => "Baron D55",
                'secondName' => "D55",
                'flightTime' => 5068,
                'actualCity' => "São Paulo",
                'value' => 479000,
                'year' => 1969,
                'type' => 'Bimotor',
                'description' => '# 5.068,1 TT e 100 h após motores 285 hp - 1600 h disp.
                # Full IFR com 2 Horizontes - DME - VOR C/ Glide Slope - NAV.
                # Painel de Rádios com 2 COM VHF King - GPS Garmin 100 - TxpC
                # Estuda proposta',
                'manufacture_id' => 4,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/baron55.jpg'  
            ],
            [
                'name' => "Cessna 310",
                'secondName' => "310 Q",
                'flightTime' => 3789,
                'actualCity' => "Vitória",
                'value' => 440000,
                'year' => 1974,
                'type' => 'Bimotor',
                'description' => '# Célula 4.521 TT
                # Motor LH 6.790 TT e 21 hs após TBO
                # Motor RH 4.020 TT e 21 hs após TBO
                # Painel : 02 VOR BENDIX/KING • 01 DME KN 64 BENDIX/KING • 02 ADF KR 87 BENDIX/KING • 01 CAIXA DE ÁUDIO GARMIN GMA 347 • RADAR BENDIX COLOR • GPS LERAN TNL 2000A ACOPLADO AO P/A • PILOTO AUTOMÁTICO ARGUS 5000 DE 3 EIXOS • 01 HORIZONTE A VÁCUO • 01 HORIZONTE ELÉTRICO • 02 TURN CORDINATION • 02 INDICADORES DE VOR • 01 GPS PORTÁTIL GARMIN 295 • INTERCOM 6 ASSENTOS
                # Todas as manutenções e boletins (Ads e Das) em dia, somos o terceiro proprietário, no periodo que estamos (vide RAB) nossas operações são só em pista de asfalto inclusive na fazenda é hangarada sempre inclusive fora da base.
                # Aceita troca por RV10
                # Aeronave nota 9,5',
                'manufacture_id' => 1,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/cessna310.jpg'  
            ],
            [
                'name' => "Aero Commander",
                'secondName' => "Turbo Commander 690 B",
                'flightTime' => 8970,
                'actualCity' => "Vitória",
                'value' => 1100000,
                'year' => 1977,
                'type' => 'Bimotor',
                'description' => '# Célula com 8.900 TT - Turbinas Dash-10 com 4.000 h disponíveis.
                # 300 kt velocidade - 270 litros hora - 5:30 autonomia - opera em 650 Mts pista - painel novo completo C/tics - 1 + 8 passageiros
                # 50% custo manutenção King
                # Não precisa simulador p/ piloto.
                # IAM Set / 2019 - REV 150 h - SB 241 - C.A - etc
                # Aeronave está IMPECÁVEL.
                # Aceita Robinson R66 na negociação',
                'manufacture_id' => 1,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/commander690.jpg'  
            ],
            [
                'name' => "EMB-712",
                'secondname' => "Corisco",
                'flighttime' => 3507,
                'actualcity' => "Ribeirão Preto",
                'value' => 420000,
                'year' => 1976,
                'type' => 'Monomotor',
                'description' => 'teste',
                'manufacture_id' => 2,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/emb711-2.jpg'
                
            ],
            [
                'name' => "EMB-711",
                'secondname' => "Corisco",
                'flighttime' => 3507,
                'actualcity' => "Ribeirão Preto",
                'value' => 350000,
                'year' => 1976,
                'type' => 'Monomotor',
                'description' => 'teste',
                'manufacture_id' => 2,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/emb711-3.jpg'
                
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
                'created_at' => $data,
                'photo' => 'fotos/seneca5.jpg'  
            ],
            [
                'name' => "Bonanza",
                'secondName' => "Bonanza F-33",
                'flightTime' => 5871,
                'actualCity' => "São Paulo",
                'value' => 800000,
                'year' => 1991,
                'type' => 'Monomotor',
                'description' => '# 3.200 TT - 470 h após geral até 2022 (OUTRA - NETO)
                # IFR - PA III - Stormscope
                # Sem registro de acidente
                # Todas as cadernetas desde zero
                # Troca por Bonanza A36',
                'manufacture_id' => 4,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/bonanza33.jpg'  
            ],
            [
                'name' => "Baron D55",
                'secondName' => "D55",
                'flightTime' => 5068,
                'actualCity' => "São Paulo",
                'value' => 479000,
                'year' => 1969,
                'type' => 'Bimotor',
                'description' => '# 5.068,1 TT e 100 h após motores 285 hp - 1600 h disp.
                # Full IFR com 2 Horizontes - DME - VOR C/ Glide Slope - NAV.
                # Painel de Rádios com 2 COM VHF King - GPS Garmin 100 - TxpC
                # Estuda proposta',
                'manufacture_id' => 4,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/baron55.jpg'  
            ],
            [
                'name' => "Cessna 310",
                'secondName' => "310 Q",
                'flightTime' => 3789,
                'actualCity' => "Vitória",
                'value' => 440000,
                'year' => 1974,
                'type' => 'Bimotor',
                'description' => '# Célula 4.521 TT
                # Motor LH 6.790 TT e 21 hs após TBO
                # Motor RH 4.020 TT e 21 hs após TBO
                # Painel : 02 VOR BENDIX/KING • 01 DME KN 64 BENDIX/KING • 02 ADF KR 87 BENDIX/KING • 01 CAIXA DE ÁUDIO GARMIN GMA 347 • RADAR BENDIX COLOR • GPS LERAN TNL 2000A ACOPLADO AO P/A • PILOTO AUTOMÁTICO ARGUS 5000 DE 3 EIXOS • 01 HORIZONTE A VÁCUO • 01 HORIZONTE ELÉTRICO • 02 TURN CORDINATION • 02 INDICADORES DE VOR • 01 GPS PORTÁTIL GARMIN 295 • INTERCOM 6 ASSENTOS
                # Todas as manutenções e boletins (Ads e Das) em dia, somos o terceiro proprietário, no periodo que estamos (vide RAB) nossas operações são só em pista de asfalto inclusive na fazenda é hangarada sempre inclusive fora da base.
                # Aceita troca por RV10
                # Aeronave nota 9,5',
                'manufacture_id' => 1,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/cessna310.jpg'  
            ],
            [
                'name' => "Aero Commander",
                'secondName' => "Turbo Commander 690 B",
                'flightTime' => 8970,
                'actualCity' => "Vitória",
                'value' => 1100000,
                'year' => 1977,
                'type' => 'Bimotor',
                'description' => '# Célula com 8.900 TT - Turbinas Dash-10 com 4.000 h disponíveis.
                # 300 kt velocidade - 270 litros hora - 5:30 autonomia - opera em 650 Mts pista - painel novo completo C/tics - 1 + 8 passageiros
                # 50% custo manutenção King
                # Não precisa simulador p/ piloto.
                # IAM Set / 2019 - REV 150 h - SB 241 - C.A - etc
                # Aeronave está IMPECÁVEL.
                # Aceita Robinson R66 na negociação',
                'manufacture_id' => 1,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/commander690.jpg'  
            ],
            [
                'name' => "EMB-712",
                'secondname' => "Corisco",
                'flighttime' => 3507,
                'actualcity' => "Ribeirão Preto",
                'value' => 420000,
                'year' => 1976,
                'type' => 'Monomotor',
                'description' => 'teste',
                'manufacture_id' => 2,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/emb711-2.jpg'
                
            ],
            [
                'name' => "EMB-711",
                'secondname' => "Corisco",
                'flighttime' => 3507,
                'actualcity' => "Ribeirão Preto",
                'value' => 350000,
                'year' => 1976,
                'type' => 'Monomotor',
                'description' => 'teste',
                'manufacture_id' => 2,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/emb711-3.jpg'
            ],[
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
                'created_at' => $data,
                'photo' => 'fotos/emb711.jpg'
                
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
                'created_at' => $data,
                'photo' => 'fotos/cessna206.jpg'
            ],[
                'name' => "Bonanza",
                'secondName' => "F33",
                'flightTime' => 4189,
                'actualCity' => "Dourados",
                'value' => 550000,
                'year' => 1990,
                'type' => 'Monomotor',
                'description' => '3.200 TT - 470 h após geral até 2022 (OUTRA - NETO)',
                'manufacture_id' => 4,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/bonanzav35.jpg'
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
                'created_at' => $data,
                'photo' => 'fotos/seneca5.jpg'  
            ],
            [
                'name' => "Bonanza",
                'secondName' => "Bonanza F-33",
                'flightTime' => 5871,
                'actualCity' => "São Paulo",
                'value' => 800000,
                'year' => 1991,
                'type' => 'Monomotor',
                'description' => '# 3.200 TT - 470 h após geral até 2022 (OUTRA - NETO)
                # IFR - PA III - Stormscope
                # Sem registro de acidente
                # Todas as cadernetas desde zero
                # Troca por Bonanza A36',
                'manufacture_id' => 4,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/bonanza33.jpg'  
            ],
            [
                'name' => "Baron D55",
                'secondName' => "D55",
                'flightTime' => 5068,
                'actualCity' => "São Paulo",
                'value' => 479000,
                'year' => 1969,
                'type' => 'Bimotor',
                'description' => '# 5.068,1 TT e 100 h após motores 285 hp - 1600 h disp.
                # Full IFR com 2 Horizontes - DME - VOR C/ Glide Slope - NAV.
                # Painel de Rádios com 2 COM VHF King - GPS Garmin 100 - TxpC
                # Estuda proposta',
                'manufacture_id' => 4,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/baron55.jpg'  
            ],
            [
                'name' => "Cessna 310",
                'secondName' => "310 Q",
                'flightTime' => 3789,
                'actualCity' => "Vitória",
                'value' => 440000,
                'year' => 1974,
                'type' => 'Bimotor',
                'description' => '# Célula 4.521 TT
                # Motor LH 6.790 TT e 21 hs após TBO
                # Motor RH 4.020 TT e 21 hs após TBO
                # Painel : 02 VOR BENDIX/KING • 01 DME KN 64 BENDIX/KING • 02 ADF KR 87 BENDIX/KING • 01 CAIXA DE ÁUDIO GARMIN GMA 347 • RADAR BENDIX COLOR • GPS LERAN TNL 2000A ACOPLADO AO P/A • PILOTO AUTOMÁTICO ARGUS 5000 DE 3 EIXOS • 01 HORIZONTE A VÁCUO • 01 HORIZONTE ELÉTRICO • 02 TURN CORDINATION • 02 INDICADORES DE VOR • 01 GPS PORTÁTIL GARMIN 295 • INTERCOM 6 ASSENTOS
                # Todas as manutenções e boletins (Ads e Das) em dia, somos o terceiro proprietário, no periodo que estamos (vide RAB) nossas operações são só em pista de asfalto inclusive na fazenda é hangarada sempre inclusive fora da base.
                # Aceita troca por RV10
                # Aeronave nota 9,5',
                'manufacture_id' => 1,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/cessna310.jpg'  
            ],
            [
                'name' => "Aero Commander",
                'secondName' => "Turbo Commander 690 B",
                'flightTime' => 8970,
                'actualCity' => "Vitória",
                'value' => 1100000,
                'year' => 1977,
                'type' => 'Bimotor',
                'description' => '# Célula com 8.900 TT - Turbinas Dash-10 com 4.000 h disponíveis.
                # 300 kt velocidade - 270 litros hora - 5:30 autonomia - opera em 650 Mts pista - painel novo completo C/tics - 1 + 8 passageiros
                # 50% custo manutenção King
                # Não precisa simulador p/ piloto.
                # IAM Set / 2019 - REV 150 h - SB 241 - C.A - etc
                # Aeronave está IMPECÁVEL.
                # Aceita Robinson R66 na negociação',
                'manufacture_id' => 1,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/commander690.jpg'  
            ],
            [
                'name' => "EMB-712",
                'secondname' => "Corisco",
                'flighttime' => 3507,
                'actualcity' => "Ribeirão Preto",
                'value' => 420000,
                'year' => 1976,
                'type' => 'Monomotor',
                'description' => 'teste',
                'manufacture_id' => 2,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/emb711-2.jpg'
                
            ],
            [
                'name' => "EMB-711",
                'secondname' => "Corisco",
                'flighttime' => 3507,
                'actualcity' => "Ribeirão Preto",
                'value' => 350000,
                'year' => 1976,
                'type' => 'Monomotor',
                'description' => 'teste',
                'manufacture_id' => 2,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/emb711-3.jpg'
                
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
                'created_at' => $data,
                'photo' => 'fotos/seneca5.jpg'  
            ],
            [
                'name' => "Bonanza",
                'secondName' => "Bonanza F-33",
                'flightTime' => 5871,
                'actualCity' => "São Paulo",
                'value' => 800000,
                'year' => 1991,
                'type' => 'Monomotor',
                'description' => '# 3.200 TT - 470 h após geral até 2022 (OUTRA - NETO)
                # IFR - PA III - Stormscope
                # Sem registro de acidente
                # Todas as cadernetas desde zero
                # Troca por Bonanza A36',
                'manufacture_id' => 4,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/bonanza33.jpg'  
            ],
            [
                'name' => "Baron D55",
                'secondName' => "D55",
                'flightTime' => 5068,
                'actualCity' => "São Paulo",
                'value' => 479000,
                'year' => 1969,
                'type' => 'Bimotor',
                'description' => '# 5.068,1 TT e 100 h após motores 285 hp - 1600 h disp.
                # Full IFR com 2 Horizontes - DME - VOR C/ Glide Slope - NAV.
                # Painel de Rádios com 2 COM VHF King - GPS Garmin 100 - TxpC
                # Estuda proposta',
                'manufacture_id' => 4,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/baron55.jpg'  
            ],
            [
                'name' => "Cessna 310",
                'secondName' => "310 Q",
                'flightTime' => 3789,
                'actualCity' => "Vitória",
                'value' => 440000,
                'year' => 1974,
                'type' => 'Bimotor',
                'description' => '# Célula 4.521 TT
                # Motor LH 6.790 TT e 21 hs após TBO
                # Motor RH 4.020 TT e 21 hs após TBO
                # Painel : 02 VOR BENDIX/KING • 01 DME KN 64 BENDIX/KING • 02 ADF KR 87 BENDIX/KING • 01 CAIXA DE ÁUDIO GARMIN GMA 347 • RADAR BENDIX COLOR • GPS LERAN TNL 2000A ACOPLADO AO P/A • PILOTO AUTOMÁTICO ARGUS 5000 DE 3 EIXOS • 01 HORIZONTE A VÁCUO • 01 HORIZONTE ELÉTRICO • 02 TURN CORDINATION • 02 INDICADORES DE VOR • 01 GPS PORTÁTIL GARMIN 295 • INTERCOM 6 ASSENTOS
                # Todas as manutenções e boletins (Ads e Das) em dia, somos o terceiro proprietário, no periodo que estamos (vide RAB) nossas operações são só em pista de asfalto inclusive na fazenda é hangarada sempre inclusive fora da base.
                # Aceita troca por RV10
                # Aeronave nota 9,5',
                'manufacture_id' => 1,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/cessna310.jpg'  
            ],
            [
                'name' => "Aero Commander",
                'secondName' => "Turbo Commander 690 B",
                'flightTime' => 8970,
                'actualCity' => "Vitória",
                'value' => 1100000,
                'year' => 1977,
                'type' => 'Bimotor',
                'description' => '# Célula com 8.900 TT - Turbinas Dash-10 com 4.000 h disponíveis.
                # 300 kt velocidade - 270 litros hora - 5:30 autonomia - opera em 650 Mts pista - painel novo completo C/tics - 1 + 8 passageiros
                # 50% custo manutenção King
                # Não precisa simulador p/ piloto.
                # IAM Set / 2019 - REV 150 h - SB 241 - C.A - etc
                # Aeronave está IMPECÁVEL.
                # Aceita Robinson R66 na negociação',
                'manufacture_id' => 1,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/commander690.jpg'  
            ],
            [
                'name' => "EMB-712",
                'secondname' => "Corisco",
                'flighttime' => 3507,
                'actualcity' => "Ribeirão Preto",
                'value' => 420000,
                'year' => 1976,
                'type' => 'Monomotor',
                'description' => 'teste',
                'manufacture_id' => 2,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/emb711-2.jpg'
                
            ],
            [
                'name' => "EMB-711",
                'secondname' => "Corisco",
                'flighttime' => 3507,
                'actualcity' => "Ribeirão Preto",
                'value' => 350000,
                'year' => 1976,
                'type' => 'Monomotor',
                'description' => 'teste',
                'manufacture_id' => 2,
                'observation' => "",
                'created_at' => $data,
                'photo' => 'fotos/emb711-3.jpg'
            ]]
        );
    }
}


