<?php

// use App\Http\Controllers\user\PdfProductoController;
use Illuminate\Support\Facades\Route;
// --------------
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\UserController;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\user\PdfTickedController;
// use App\Http\Controllers\datos\mailController;
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
// Route::get('/envioGmail', [mailController::class ,'a'] )->name('envio.index');


Route::get('/slay', [ViewController::class, 'viewSlayderMain'])->name('slayderMain.index');
Route::get('/inserSlayderMain', [ViewController::class, 'inserSlayderMain'])->name('slayderMain.index');
Route::get('/', [ViewController::class, 'view'])->name('vista.index');
Route::get('/Search', [ViewController::class, 'search'])->name('search.home.search');
Route::get('/Producto-view', [ViewController::class, 'Producto'])->name('viewProducto.home.list');
Route::get('/Ayuda', [ViewController::class, 'viewHelp'])->name('help.home.index');
// Route::get('/Admin-login', [CrudController::class ,'loginUser'] )->name('loginUser.admin.main');
// ----no vale pero observar
Route::get('/envioGmail', [mailController::class, 'recuperarPassword'])->name('restablecer.user.password');
Route::get('/restablecerGmailView', [mailController::class, 'restablecerPasswordView'])->name('restablecerPasswordView.user.Gmail');
// Route::get('/restablecerGmail', [mailController::class ,'restablecerPasswordUser'] )->name('restablecerPassword.user.gmail');
// Route::get('/Admin-login', [LoginController::class ,'loginUser'] )->name('loginUser.admin.main');
// google
Route::get('login/google', [LoginController::class, 'loginGoogle'])->name('login.user.index');
Route::get('login/google/callback', [LoginController::class, 'callback']);
//         /login/google/callback
Route::get('/Login-admin/{email}/{password}', [LoginController::class, 'loginAdmin'])->name('loginAdmin.admin.main');
Route::get('logout', [LoginController::class, 'logout'])->name('logout.user.index');
// Route::post('/Admin-logout',[LoginController::class, 'logout'] )->name('logout.user.index');
Route::get('/createUser', [LoginController::class, 'createUser'])->name('create.user.index');
Route::get('/validarUser/{email}', [LoginController::class, 'validarUser'])->name('validar.user.index');
// ASICGD
Route::get('/loginLocalUser/{email}/{password}', [LoginController::class, 'loginLocalUser'])->name('loginLocalUser.user.index');

Route::get('user', [LoginController::class, 'indexHome'])->name('loginUser.proceso.index');
Route::get('/Nosotros', [ViewController::class, 'viewNosotros'])->name('nosotros.home.index');
Route::get('/Contactenos', [ViewController::class, 'viewContacto'])->name('contactenos.home.index');
Route::get('/View-page/{id}', [ViewController::class, 'viewProductoId'])->name('View.home.index');

Route::middleware('VerificationUser')->group(function () {

  Route::get('/User-pdfDownload', [PdfTickedController::class, 'downloadPdf'])->name('download.user.pdf');
  Route::get('/GetCart', [UserController::class, 'viewCartUser'])->name('viewCartUser.user.main');
  Route::get('/Cart', [UserController::class, 'cartUser'])->name('cart.user.main');
  Route::get('/Delete/{id}', [UserController::class, 'deleteCart'])->name('deleteCart.user.main');
  Route::get('/DeleteCart', [UserController::class, 'deleteTotalCart'])->name('deleteTotalCart.user.main');
  Route::get('/User-Perfil', [UserController::class, 'userPerfil'])->name('perfil.user.main');
  Route::get('/AddCart/{id}/{cantidad}', [UserController::class, 'userAddCart'])->name('addCart.user.main');
  // perfil edit
  Route::get('/editPerfil', [UserController::class, 'editPeerfil'])->name('editPerfil.user.main');
  Route::get('/addCart_', function () {


    //
    return  view('User.addCart');
  });
});

Route::get('/test', function () {
  //
  $cartAray = User::with(['productos'])->find(1); // id user
  //  return view('user.cart',compact('cartAray'));
  return $cartAray;
  // return

});
