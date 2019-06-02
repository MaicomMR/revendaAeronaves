<?php

use Illuminate\Database\Seeder;

class airplaneManufactures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = date('Y-m-d H:i:s');
        DB::table('manufactures')->insert([
            [
                'name' => "Cessna",
                'created_at' => $data
            ],
            [
                'name' => "Embraer",
                'created_at' => $data   
            ],
            [
                'name' => "Piper",
                'created_at' => $data   
            ],
            [
                'name' => "Beechcraft",
                'created_at' => $data   
            ],
            [
                'name' => "Boeing",
                'created_at' => $data   
            ],
            [
                'name' => "Mooney",
                'created_at' => $data   
            ],
            [
                'name' => "Socata",
                'created_at' => $data   
            ],
            [
                'name' => "Neiva",
                'created_at' => $data   
            ],
            [
                'name' => "Maule",
                'created_at' => $data   
            ],
            [
                'name' => "Aero Commander",
                'created_at' => $data   
            ],
            [
                'name' => "BAE",
                'created_at' => $data   
            ],
            [
                'name' => "Pilatus",
                'created_at' => $data   
            ],
            [
                'name' => "Bombardier",
                'created_at' => $data   
            ],
            [
                'name' => "LearJet Corp.",
                'created_at' => $data   
            ],
            [
                'name' => "Gulfstream",
                'created_at' => $data   
            ],
            [
                'name' => "Hawker",
                'created_at' => $data   
            ],
            [
                'name' => "Agusta",
                'created_at' => $data   
            ],
            [
                'name' => "Eurocopter",
                'created_at' => $data   
            ],
            [
                'name' => "Robinson",
                'created_at' => $data   
            ],
            [
                'name' => "Bell",
                'created_at' => $data   
            ]
            ]
        );
    }
}
