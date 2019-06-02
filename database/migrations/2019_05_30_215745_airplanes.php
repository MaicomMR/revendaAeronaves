<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Airplanes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airplanes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default(' ');
            $table->string('secondName')->default(' ');                       
            $table->string('flightTime')->default('Não Informado');
            $table->string('actualCity')->default('Não Informado');
            $table->double('value')->default(0);
            $table->string('year')->default(0);
            $table->text('observation');
            $table->string('type')->default('0');
            $table->text('description');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
