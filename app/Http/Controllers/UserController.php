<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Producto;
// -----fecha
use Carbon\Carbon;


class UserController extends Controller
{
    function userPerfil(){
        return view('User.perfil');
    }
    function cartUser(){
        $cartArray=User::with(['productos'])->find(session()->get('userId')); // id user
    $exitProductoUser=cart::where('userId',session()->get('userId'))->where('productoId','>',0)->exists();
            return view('User.cart',compact(['cartArray','exitProductoUser']));
        }
        function viewCartUser(){ //asicrono
            $cartArray=User::with(['productos'])->find(session()->get('userId')); // id user
        // $exitProductoUser=cart::where('userId',session()->get('userId'))->where('productoId','>',0)->exists();
                // return view('User.cart',compact(['cartArray','exitProductoUser']));
           return  $cartArray->productos;
            }
function userAddCart($idProducto,$cantidad){


    // foreach($cantidad as $keyPro =>$idProducto ){
            // $data=new ();
            // $data->cantidad=
        $user =User::with(['productos'])->find(session()->get('userId')); // id user
        $exitProducto=cart::where('userId',session()->get('userId'))->where('productoId','=',$idProducto)->exists();
                    if ($exitProducto) {
                    $getCantPro=cart::where('userId',session()->get('userId'))->where('productoId','=',$idProducto)->get();
                    $newCantPro=$getCantPro[0]->cantidad+$cantidad;
                    $user->productos()->updateExistingPivot($idProducto, [
                        'cantidad' => $newCantPro,
                    ]);
                    return redirect()->route('cart.user.main');
                    // return 'esta lleno mi king'.$getCantPro[0]->cantidad.' -- '.$newCantPro;
                } else {
                    $fecha = Carbon::now();
                    $addCart=new Cart;
                    $addCart->userId= session()->get('userId');
                    $addCart->productoId=$idProducto;
                    $addCart->cantidad=$cantidad;
                    $addCart->created_at=$fecha;
                    $addCart->save();
                    // return 'esta vacio';
                }
                // return redirect()->route('cart.user.main');
                // $cantProducto=$getCantPro[0]->cantidad;
                // $cantProducto='12';

                // return view('cart.user.main',compact('cantProducto'));
            // }
            }
function deleteCart($deleteId){
    $user =User::with(['productos'])->find(session()->get('userId')); // id user
    $user->productos()->detach($deleteId);
    return redirect()->route('cart.user.main');
    }

function deleteTotalCart(){
    $user=cart::where('userId',session()->get('userId'))->delete();
    return redirect()->route('cart.user.main');
}
    // return $addCart;
                // $user = User::find(session()->get('userId'));

                // $user =User::with(['productos'])->find(session()->get('userId')); // id user
                //     foreach( $user->productos as $ad){
                    // return $ad;
                    //     }
                    // $ad=cart::all();
                    // return $user->productos;


                # code...
        // // $addCart=cart::table('tbl_cart')->get();
        // $addCart=Producto::table('tbl_producto')->get();
        // $addCart=Cart::all();

        // $ad=cart::where('userId',session()->get('userId'))->where('productoId','=',1)->get();
        // $ad=cart::table('tbl_cart')->select('userId')->where('userId',session()->get('userId'))->where('productoId','=',1)->get();
        // return $ad[0]->cantidad;
        // return $ad;

        // $ad= cart::whereRelation('productos', 1, false)->get();
        // if (isset($ad)) {
            // return $ad;

            // $user->productos()->where('productoId', 7)->get();
            // $a= $user->productos()->updateExistingPivot(1,);
// return $user->productos;
// return $user->productos[3]->pivot;
// return $user;
// return $a;

                // return session()->get('userId');
                // $user->save();
                // return $user[0]->id."---".$idProducto; // [0] this para quitar el [ {json }] y solo vea { json} para poder acceder

                // $cartArray=json_decode($cartArray_);
    // json_decode()
    // return $cartArray->productos[0]->pivot;
    // return $cartArray->productos[0]->pivot->cantidad;
    // return $cartArray;

    // return $cartArray->productos[0]->pivot->userId;
    // $n='cartArray';
    // return view('User.cart');
// ---------------
    // $cartArray = User::find(2);
// ----------
// $users = User::with(['productos'])->find(2);
// $users = User::with(['productos'])->get();
// $users = User::with(['productos'])->get();

// foreach ($users->flatMap->productos as $productos) {
//  return $users->name;
//  return $users->productos;

// foreach ($users as $productos) {
//     // return $productos;
//     return $users->productos;
//     // return $users->productos[1]->cantidad;

// }

// foreach ($users as $productos) {
//     return $productos;
// }



// foreach ($user->roles as $role) {
//     echo $role->pivot->created_at;
// }
    // return view('User.cart',compact('cartArray'));

//             use App\Models\Comment;
// use App\Models\Post;



// $comment = new Comment(['message' => 'A new comment.']);
// $post = Post::find(1);
// $post->comments()->save($comment);

}
