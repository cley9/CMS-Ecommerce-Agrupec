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
        Schema::create('tbl_producto', function (Blueprint $table) {
            $table->id('id');
            // $table->id('idProducto');

            // $table->timestamps();
            
            // $table->morphs('tokenable');
            $table->string('nombre');
            $table->double('precio',50,2);
            $table->double('newPrecio',50,2);
            $table->string('description');
            $table->string('peso');
            $table->integer('cantidad');
            $table->string('imagen');
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->timestamps(0);
            // $table->timestamps('fecha');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_producto');
    }
};
