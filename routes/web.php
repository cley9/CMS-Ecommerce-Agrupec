<?php

use Illuminate\Support\Facades\Route;
// --------------
use App\Http\Controllers\ViewController;
      use App\Http\Controllers\CrudController;
use App\Http\Controllers\UserController;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\UserController;

use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [ViewController::class ,'view'] )->name('vista.index');
// Route::get('/Producto-view', [ViewController::class ,'Producto'] )->name('view.local.list');
Route::get('/Producto-view', [ViewController::class ,'Producto'] )->name('viewProducto.home.list');
Route::get('/Ayuda', [ViewController::class ,'viewHelp'] )->name('help.home.index');
// Route::get('/Admin-login', [CrudController::class ,'loginUser'] )->name('loginUser.admin.main');
// google
Route::get('login/google',[LoginController::class, 'loginGoogle'] )->name('login.user.index');
Route::get('login/google/callback',[LoginController::class, 'callback'] );
//         /login/google/callback
Route::get('/Admin-login', [LoginController::class ,'loginUser'] )->name('loginUser.admin.main');
Route::get('/Login-admin', [LoginController::class ,'loginAdmin'] )->name('loginAdmin.admin.main');
Route::get('logout',[LoginController::class, 'logout'] )->name('logout.user.index');
// Route::post('/Admin-logout',[LoginController::class, 'logout'] )->name('logout.user.index');
Route::get('/createUser',[LoginController::class, 'createUser'] )->name('create.user.index');
Route::get('/validarUser/{email}',[LoginController::class, 'validarUser'] )->name('validar.user.index');
Route::get('loginLocalUser',[LoginController::class, 'loginLocalUser'] )->name('loginLocalUser.user.index');

Route::get('user',[LoginController::class, 'indexHome'] )->name('loginUser.proceso.index');
Route::get('/Nosotros', [ViewController::class ,'viewNosotros'] )->name('nosotros.home.index');
Route::get('/Contactenos', [ViewController::class ,'viewContacto'] )->name('contactenos.home.index');
Route::get('/View-page/{id}', [ViewController::class ,'viewProductoId'] )->name('View.home.index');
Route::middleware('VerificationUser')->group(function(){


Route::get('/GetCart', [UserController::class ,'viewCartUser'] )->name('viewCartUser.user.main');
Route::get('/Cart', [UserController::class ,'cartUser'] )->name('cart.user.main');
Route::get('/Delete/{id}', [UserController::class ,'deleteCart'] )->name('deleteCart.user.main');
Route::get('/DeleteCart', [UserController::class ,'deleteTotalCart'] )->name('deleteTotalCart.user.main');
Route::get('/User-Perfil', [UserController::class ,'userPerfil'] )->name('perfil.user.main');
Route::get('/AddCart/{id}/{cantidad}', [UserController::class ,'userAddCart'] )->name('addCart.user.main');
Route::get('/addCart_', function() {

    //
  return  view('User.addCart');
});


});

Route::get('/test', function() {
      //
      $cartAray=User::with(['productos'])->find(1 ); // id user
    //  return view('user.cart',compact('cartAray'));
      return $cartAray;
    // return

  });
