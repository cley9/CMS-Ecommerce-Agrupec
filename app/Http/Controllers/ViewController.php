<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Cart;
use App\Models\ListCategory;
use App\Models\SlayderMain;
use App\Models\oferta;
use Illuminate\Support\Facades\DB;

// ----
// use Illuminate\Support\Facades\DB;
class ViewController extends Controller
{
    // public function FunctionName() : Returntype {

    // }

    function CountDown()
    {
        // horas de ofertas
        $oferta = oferta::first();
        // Calcular las horas, minutos y segundos restantes
        // $tiempo_restante = now()->diff($oferta[0]->fecha_fin);
        if ($oferta) {
            $tiempo_restante = now()->diff($oferta->fecha_fin);
            $days_res = $tiempo_restante->d;
            $horas_res = $tiempo_restante->h;
            $minutos_res = $tiempo_restante->i;
            $segundos_res = $tiempo_restante->s;
            return response()->json(['days'=>$days_res,'hours'=>$horas_res, 'minus'=>$minutos_res, 'secong'=>$segundos_res]);
            // return response()->json(['hours'=> $oferta]);
        } else {
            return response()->json(['status'=>'403', 'msg'=> 'no existe la oferta']);
        }
        
        
    }
    public function Producto()
    {
        // ---------- slyder
        $viewProducto = Producto::paginate(24);
        $listCategory = ListCategory::all();
        return view('Producto', compact('viewProducto', 'listCategory'));
        //  return $viewProducto;
    }
    public function viewProductoId($id)
    {
        $productoId = Producto::where('id', $id)->get();
        return view('viewProducto', compact('productoId'));
        // return view('home',compact('productoId'));

        // return $idProducto;
    }

    function view()
    {
        $producto = Producto::paginate(18);
        // ---------- slyder
        $slayderProducto = Producto::paginate(24);
        $CanFilaUser = Cart::where('userId', 3)->count();
        $protCanUser = Cart::where('userId', 3)->get();
        $contProducto = 0;
        $reArray = -1;
        while ($reArray < $CanFilaUser - 1) {    // return $protCanUser;
            $reArray++;
            $contProducto += $protCanUser[$reArray]->cantidad;
        }
        session(['contProducto' => $contProducto]);
        $data = 12;
        $viewSlayderMain = SlayderMain::all();

        // return view('home', compact('producto', 'slayderProducto', 'viewSlayderMain', 'horas_restantes', 'minutos_restantes', 'segundos_restantes'));


        return view('home', compact('producto', 'slayderProducto', 'viewSlayderMain'));
    }

    function viewNosotros()
    {
        return view('nosotros');
    }

    function viewContacto()
    {
        return view('contactenos');
    }

    function viewHelp()
    {
        return view('help');
    }

    function search(Request $request)
    {
        $search = Producto::where('nombre', 'like', '%' . $request->search . '%')->get();
        $slaySearch = Producto::where('nombre', 'like', '%' . $request->search . '%')->limit(8)->get();
        $searchExists = Producto::where('nombre', 'like', '%' . $request->search . '%')->exists();

        return view('search', compact('search', 'slaySearch', 'searchExists'));
        // return $request->search;
        // return $search;
    }
    function searchListCategory(Request $request)
    {
        $searchListCatgory = Producto::where('nombre', 'like', '%' . $request->search . '%')->get();
        return $searchListCatgory;
    }

    public function listCategory()
    {
        $listCategory = ListCategory::all();
        // return view("productoFilterCard", compact('listCategorya'));
        return $listCategory;

        // $viewProducto=Producto::paginate(24);
        //  return view('Producto',compact('viewProducto'));
    }
    function local()
    {
        return view('local');
    }
}
