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
                'name' => "cessna",
                'created_at' => $data
            ],
            [
                'name' => "embraer",
                'created_at' => $data   
            ],
            [
                'name' => "piper",
                'created_at' => $data   
            ]]
        );
    }
}
