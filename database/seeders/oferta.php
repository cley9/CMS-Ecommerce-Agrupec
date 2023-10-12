<?php

namespace Database\Seeders;

use App\Models\oferta as Ofertas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class oferta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $oferta = new Ofertas();
        $oferta->fecha_inicio = now();
        $oferta->fecha_fin = now()->addHours(74)->addMinutes(30)->addSeconds(23);
        $oferta->save();
    }
}
