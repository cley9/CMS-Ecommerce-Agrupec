<?php

namespace Database\Seeders;

use App\Models\ListCategory;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class listCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $listCategory=new ListCategory();
        $listCategory->nombre='caño';
        $listCategory->save();
        
        $listCategory=new ListCategory();
        $listCategory->nombre='Tubo';
        $listCategory->save();

        $listCategory=new ListCategory();
        $listCategory->nombre='codo';
        $listCategory->save();
        
        $listCategory=new ListCategory();
        $listCategory->nombre='Perfil';
        $listCategory->save();

        $listCategory=new ListCategory();
        $listCategory->nombre='Pegamento';
        $listCategory->save();
        
        $listCategory=new ListCategory();
        $listCategory->nombre='Nivelador';
        $listCategory->save();
        
        $listCategory=new ListCategory();
        $listCategory->nombre='Tapas de Desague';
        $listCategory->save();
        
        $listCategory=new ListCategory();
        $listCategory->nombre='One Piece';
        $listCategory->save();

        $listCategory=new ListCategory();
        $listCategory->nombre='union';
        $listCategory->save();
        
        $listCategory=new ListCategory();
        $listCategory->nombre='rotoplas';
        $listCategory->save();

        $listCategory=new ListCategory();
        $listCategory->nombre='caja';
        $listCategory->save();

        $listCategory=new ListCategory();
        $listCategory->nombre='anillo';
        $listCategory->save();

        $listCategory=new ListCategory();
        $listCategory->nombre='niple';
        $listCategory->save();
    }
}
