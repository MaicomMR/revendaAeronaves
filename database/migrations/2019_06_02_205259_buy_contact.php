<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuyContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buycontact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contactName')->default(' ');
            $table->string('phone')->default(' ');                       
            $table->string('email')->default('Não Informado');

            $table->timestamps();



            $table->integer('productId')->unsigned()->default(0); 
            $table->foreign('productId')->references('id')->on('airplanes')->onDelete('restrict');

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
