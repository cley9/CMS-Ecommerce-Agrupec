<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FacturaVenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FacturaController extends Controller
{

    function createFactura(Request $request)
    {
        // $facturaV = FacturaVenta::all();
        $facturaV = new FacturaVenta();
        $facturaV->nombreUser = $request->input("fNombreUser");
        $facturaV->numRuc = $request->input("fNumero");
        $facturaV->nombreProducto = $request->input("fNomProducto");
        $facturaV->precio = $request->input("fprecio");
        $facturaV->cantidad = $request->input("fCantidad");
        $facturaV->save();
        return response()->json(['status' => 'ok', 'code' => '200']);
    }
    function viewFactura()
    {
        $viewFactura = FacturaVenta::all();

        return $viewFactura;
    }
    function listFactura()
    {
        $listFact = FacturaVenta::all();
        return response()->json(['listFVenta' => $listFact]);
    }
    function view()
    {
        return view('Admin.Factura.factura');
    }

    function search($rut)
    {
        // http espara crear el cliente a consumir el api
        // $user=HTTP::get('https://jsonplaceholder.typicode.com/posts/');
        // $url='https://api.apis.net.pe/v1/ruc?numero=10066672366';
        // $url='https://api.apis.net.pe/v1/ruc?numero=20604430918';
        $url = 'https://api.apis.net.pe/v1/ruc?numero=' . $rut . '';
        $user = Http::get($url);
        $userArray = $user->json();
        return $userArray;
    }
}
