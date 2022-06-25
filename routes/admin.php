<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\LoginController;




// Route::get('admin', function() {
// //     return "hola admin";
//     return view('admin.home');

// });


// Route::middleware('VerificationAdmin')->group(function() {
    
      
// });

Route::middleware('VerificationAdmin')->group(function(){
      Route::get('admin', function(){
            return view('admin.home');
      });
      Route::post('/Admin-logout',[LoginController::class, 'logout'] )->name('logout.admin.index');
      Route::get('/Admin-list', [CrudController::class ,'list'] )->name('list.admin.list');
      Route::get('/Admin-delete/{id}/{img}', [CrudController::class ,'delete'] )->name('delete.admin.list');
      Route::patch('/Admin-update', [CrudController::class ,'update'] )->name('update.admin.list');
      Route::get('/Admin-registro', [CrudController::class ,'save'] )->name('save.admin.list');
      Route::get('/Admin-preview/{id}', [CrudController::class ,'viewEdit'] )->name('viewEdit.admin.list');
     });

// Route::get('/admin', ['UserController'::class ,'view']);

