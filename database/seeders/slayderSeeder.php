<?php

namespace Database\Seeders;

use App\Models\SlayderMain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class slayderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $insertSlay0=new SlayderMain();
        $insertSlay0->nombre="slTubos8";
        $insertSlay0->descripcion="Tubo";
        $insertSlay0->imagen='35341.png';
        $insertSlay0->save();
        //
        //
        $insertSlay1=new SlayderMain();
        $insertSlay1->nombre="slTubos8";
        $insertSlay1->descripcion="Tubo";
        $insertSlay1->imagen='44625.png';
        $insertSlay1->save();
        //
        $insertSlay2=new SlayderMain();
        $insertSlay2->nombre="slTubos8";
        $insertSlay2->descripcion="Tubo";
        $insertSlay2->imagen='93104.png';
        $insertSlay2->save();
        //
        $insertSlay3=new SlayderMain();
        $insertSlay3->nombre="slTubos8";
        $insertSlay3->descripcion="Tubo";
        $insertSlay3->imagen='52747.png';
        $insertSlay3->save();
        //
        $insertSlay4=new SlayderMain();
        $insertSlay4->nombre="slTubos8";
        $insertSlay4->descripcion="Tubo";
        $insertSlay4->imagen='52882.png';
        $insertSlay4->save();
        //
        $insertSlay5=new SlayderMain();
        $insertSlay5->nombre="slTubos8";
        $insertSlay5->descripcion="Tubo";
        $insertSlay5->imagen='44990.png';
        $insertSlay5->save();
        //
        $insertSlay6=new SlayderMain();
        $insertSlay6->nombre="slTubos8";
        $insertSlay6->descripcion="Tubo";
        $insertSlay6->imagen='56607.png';
        $insertSlay6->save();
        //
        $insertSlay7=new SlayderMain();
        $insertSlay7->nombre="slTubos8";
        $insertSlay7->descripcion="Tubo";
        $insertSlay7->imagen='77604.png';
        $insertSlay7->save();
        //
        $insertSlay8=new SlayderMain();
        $insertSlay8->nombre="slTubos8";
        $insertSlay8->descripcion="Tubo";
        $insertSlay8->imagen='34364.png';
        $insertSlay8->save();

    }
}
