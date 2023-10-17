<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
// -----
use App\Models\SlayderMain;
use App\Models\User;
// -----fecha
use Carbon\Carbon;

// --------------- storage y img
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    //   function view(){
    //       return view('admin.home');
    //   }
        function catalogo(){
            return view('Admin.registerCatalogo');
        }

        // ---- slayder crud main

        function updateSlayderMain(Request $request){
            $updateSlay=SlayderMain::find($request->input('id'));
            $fecha = Carbon::now();
            $imgGet=$request->input('imgId');
            if (empty($_FILES['imagen']['name'])) {
                $img=$imgGet;
            } else {
                $extImg=$request->file('imagen')->extension(); // solo saldra la extencion
                $aletImg=rand(1,100000);
                $img=$aletImg.'.'.$extImg;
                $path = $request->file('imagen')->storeAs('public/img/SlayderMain/',$img );
                Storage::disk('local')->delete('public/img/SlayderMain/'.$imgGet.''); //Cuando se usa el controlador public o local Puede eliminar la foto del perfil anterior como este., elimina el archivo
            }
            $updateSlay->nombre=$request->input('nombre');
            $updateSlay->descripcion=$request->input('descripcion');
            $updateSlay->imagen=$img;
            $updateSlay->save();
            return redirect()->route('list.admin.catalogo');
}
        function idSlayderMain($id){
            $viewSlayderMain=SlayderMain::find($id);
            return $viewSlayderMain;
            // return view('Admin.catalogoSlayder',compact('viewSlayderMain'));
        }
    function viewSlayderMain(){
        $viewSlayderMain=SlayderMain::all();

        // return $viewSlayderMain;
        return view('Admin.catalogoSlayder',compact('viewSlayderMain'));
    }
    function deleteSlayderMain($id, $img){
    Storage::disk('local')->delete('public/img/SlayderMain/'.$img.''); //Cuando se usa el controlador public o local Puede eliminar la foto del perfil anterior como este., elimina el archivo
        $slayder=SlayderMain::find($id);
        $slayder->delete();
        // return $slayder;
        return redirect()->route('list.admin.catalogo');
        // return view('Admin.catalogoSlayder');
    }
    function inserSlayderMain(Request $request){
        $fecha = Carbon::now();
        $insertSlayderMain=new SlayderMain();
        $insertSlayderMain->nombre=$request->input('nombre');
        $insertSlayderMain->descripcion=$request->input('descripcion');
        $aletImg=rand(1,100000);
        $extImg=$request->file('imagen')->extension(); // solo saldra la extencion
        $img=$aletImg.'.'.$extImg;
        $path = $request->file('imagen')->storeAs('public/img/SlayderMain/',$img );
        $insertSlayderMain->imagen=$img;
        $insertSlayderMain->timestamps=$fecha;
        $insertSlayderMain->save();
        // return view('Admin.home');
        return redirect()->route('list.admin.catalogo');

    }

    function searchProductoLista($searchProducto){
        $searchProducto=Producto::where('nombre','like','%'.$searchProducto.'%')->get();
        // return response()->json($searchProducto);
        return $searchProducto;
    }
    function ventas(){
        $listUser=User::where('rol', '=','0')->get();
        // return $listUser;
        // return ;
        return view('Admin.ventas',compact( 'listUser'));
    }
}
