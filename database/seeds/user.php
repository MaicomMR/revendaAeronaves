<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = date('Y-m-d H:i:s');
        DB::table('users')->insert([
            [
                'name' => "teste",
                'email' => "teste@teste.com",
                'password' => '$2y$10$IIpeGLT5r9ej1AuiLE/cLOnYl7p5Fjw8cNYXhzTwSUuwV2sn4.hR2',
                'created_at' => $data,
                'updated_at' => $data
            ]]
        );
    }
}
