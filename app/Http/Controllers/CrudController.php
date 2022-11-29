<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// --
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
// -----fecha
use Carbon\Carbon;

// --------------- storage y img
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class CrudController extends Controller
{

    public function list()
    {
        // $cliente=Producto::all();
        $cliente = Producto::paginate(8);

        return view('Admin.lista', compact('cliente'));
        //  return view('Admin.lista');
        // return $cliente;
    }

    public function viewEdit($id)
    {
        $adminProducto = Producto::where('id', $id)->get();
        return json_encode($adminProducto);
    }

    public function save(Request $request)
    {
        // $cliente=Producto::all();
        $fecha = Carbon::now();
        $extImg = $request->file('imagen')->extension(); // solo saldra la extencion
        $aletImg = rand(1, 100000);
        $img = $aletImg . '.' . $extImg;
        $path = $request->file('imagen')->storeAs('public/img/Productos/', $img);
        $cliente = new Producto();
        $cliente->nombre = $request->input('Pnombre');
        $cliente->precio = $request->input('Pprecio');
        $cliente->newPrecio = $request->input('PnewPre');
        $cliente->description = $request->input('Pdescrip');
        $cliente->peso = $request->input('Ppeso');
        $cliente->cantidad = $request->input('Pcant');
        $cliente->imagen = $img;
        $cliente->img1 = $img;
        $cliente->img2 = $img;
        $cliente->img3 = $img;
        $cliente->img4 = $img;
        $cliente->created_at = $fecha;
        $cliente->save();
        return redirect()->route('list.admin.list'); //--esto funciona para el delte
    }

    public function delete($id, $img)
    {
        $cliente = Producto::findOrFail($id);
        $cliente->delete();
        Storage::disk('local')->delete('public/img/Productos/' . $img . ''); //Cuando se usa el controlador public o local Puede eliminar la foto del perfil anterior como este., elimina el archivo
        return redirect()->route('list.admin.list'); //--esto funciona para el delte
    }

    public function update(Request $request)
    {
        $cliente = Producto::find($request->input('Pid'));
        $fecha = Carbon::now();
        $imgGet = $request->input('PimgGet');
        if (empty($_FILES['imagen']['name'])) {
            $img = $imgGet;
        } else {
            // echo "esta lleno ";
            // $extImg=$request->file('imagen'); // solo saldra la extencion
            $extImg = $request->file('imagen')->extension(); // solo saldra la extencion
            $aletImg = rand(1, 100000);
            $img = $aletImg . '.' . $extImg;
            $path = $request->file('imagen')->storeAs('public/img/Productos/', $img);
            Storage::disk('local')->delete('public/img/Productos/' . $imgGet . ''); //Cuando se usa el controlador public o local Puede eliminar la foto del perfil anterior como este., elimina el archivo
        }
        $cliente->nombre = $request->input('Pnombre');
        $cliente->precio = $request->input('Pprecio');
        $cliente->newPrecio = $request->input('PnewPre');
        $cliente->description = $request->input('Pdescrip');
        $cliente->cantidad = $request->input('Pcant');
        $cliente->peso = $request->input('Ppeso');
        $cliente->imagen = $img;
        $cliente->img1 = $img;
        $cliente->img2 = $img;
        $cliente->img3 = $img;
        $cliente->img4 = $img;
        $cliente->updated_at = $fecha;
        $cliente->save();
        // return "--".$request->input('Pid')." - ".$request->input('PimgGet')." - ".$request->input('Pnombre')." - ".$request->input('Pprecio')." - ".$request->input('PnewPre');
        return redirect()->route('list.admin.list'); //--esto funciona para el delte
    }
}
