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
        Schema::create('tbl_factura_venta', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUser');
            $table->string('numRuc');
            // $table->string('nombreProducto');
            $table->double('precio', 50, 2);
            $table->string('pdf');
            // $table->double('newPrecio',50,2);
            // $table->string('peso');
            // $table->string('imagen');
            // $table->string('img1')->nullable();
            // $table->string('img2')->nullable();
            // $table->string('img3')->nullable();
            // $table->string('img4')->nullable();
            $table->timestamps(0);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_factura_venta');
    }
};
