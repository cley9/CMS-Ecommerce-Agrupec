<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // la creacion de los id
        Schema::create('tbl_cart', function (Blueprint $table) {
            $table->id('id');  //bigInteger se pone para todo los id para considan
            $table->foreignId('userId'); 
            $table->foreignId('productoId'); 
            $table->integer('cantidad')->nullable();  //bigInteger se pone para todo los id para considan
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
};
