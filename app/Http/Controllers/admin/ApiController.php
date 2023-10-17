<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;    
use Illuminate\Http\Request;

class ApiController extends Controller
{
 function listPedido($idPedido){
    $listPedidoUser=User::with(['listPedidoUser'])->find($idPedido);
    if ($listPedidoUser) {
        if ($listPedidoUser->listPedidoUser->count() >0) {
            return response()->json(["status" => 200, "msg"=> "Con pedidos", "data" =>$listPedidoUser]);
        } else {
            return response()->json(["status" => 200, "msg"=> "Sin pedidos", "data" =>$listPedidoUser]);
        }
    }else{
        return response()->json(['status' => 404, 'msg' => 'Usuario no existe']);
    }
    
    // $cartArray=User::with(['productos'])->find($idPedido); // id user
    // $exitProductoUser=cart::where('userId',session()->get('userId'))->where('productoId','>',0)->exists();
    // return $cartArray;
 }   
}
