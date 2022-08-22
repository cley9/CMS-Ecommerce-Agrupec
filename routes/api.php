<?php

use App\Http\Controllers\mailController;
use App\Http\Controllers\ViewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// recuperacion de cuenta
Route::get('/restablecerGmail', [mailController::class ,'restablecerPasswordUser'] )->name('restablecerPassword.user.gmail');



//
Route::post('/suscripcion', [ViewController::class ,'suscripcion'] )->name('suscripcion.index');
