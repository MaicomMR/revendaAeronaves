<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(airplaneManufactures::class);
        $this->call(airplanesForTest::class);
        $this->call(user::class);
    }
}
