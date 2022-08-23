<?php

namespace App\Http\Controllers;

use App\Http\Requests\suscripcionRequest;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Cart;
use App\Models\SlayderMain;
use App\Models\Suscripcion;

// ----
// use Illuminate\Support\Facades\DB;
class ViewController extends Controller
{
    public function suscripcion(suscripcionRequest $request){
            $sub=new Suscripcion();
            $sub->nombre=$request->input('nameSub');
            $sub->email=$request->input('emailSub');
            $sub->save();
        return view('contactenos');
    }
    public function Producto(){
        // ---------- slyder
        $viewProducto=Producto::paginate(24);
         return view('Producto',compact('viewProducto'));
        //  return $viewProducto;
        }
        public function viewProductoId($id){
        $productoId = Producto::where('id',$id)->get();
         return view('viewProducto',compact('productoId'));
        // return view('home',compact('productoId'));

            // return $idProducto;
        }

    function view(){
        $producto=Producto::paginate(12);
        // ---------- slyder
        $slayderProducto=Producto::paginate(24);
        $CanFilaUser=Cart::where('userId',3)->count();
        $protCanUser=Cart::where('userId',3)->get();
        $contProducto=0;
        $reArray=-1;
        while($reArray < $CanFilaUser -1){    // return $protCanUser;
        $reArray++;
      $contProducto +=$protCanUser[$reArray]->cantidad;
        }
        session(['contProducto'=>$contProducto]);
        $data=12;
        $viewSlayderMain=SlayderMain::all();


        // return view('home', compact('producto','slayderProducto','contProducto'));
        return view('home', compact('producto','slayderProducto','viewSlayderMain'));
    }

    function viewNosotros(){
        return view('nosotros');
    }

    function viewContacto(){
        return view('contactenos');
    }

    function viewHelp(){
        return view('help');
    }

    function search(Request $request){
        $search=Producto::where('nombre','like','%'.$request->search.'%')->get();
        $slaySearch=Producto::where('nombre','like','%'.$request->search.'%')->limit(8)->get();
        $searchExists=Producto::where('nombre','like','%'.$request->search.'%')->exists();

        return view('search',compact('search','slaySearch','searchExists'));
        // return $request->search;
        // return $search;
    }
}
