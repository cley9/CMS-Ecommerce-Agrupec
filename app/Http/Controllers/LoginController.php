<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ---
use App\Models\User;

// use App\Models\User;
// use Auth;
use Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
function loginAdmin(Request $request){
  $credencials=[
      'name'=>$request->input('nombre'),
      'email'=>$request->input('email'),
      'password'=>$request->input('password'),
    //   'rol'=>$request->input('userR')
    ];
    if (Auth::attempt($credencials)) {
        // return "corecto";
        session(['name'=>$request->input('nombre')]);
        // session(['avatar'=>'']);
        session(['email'=>$request->input('email')]);
        session(['rol'=>'4']);
// return redirect()->route('vista.index');
return view('admin.home');
// return "exit";
}
else{
    // return "not exit";
return redirect()->route('vista.index');
    }
}

function loginUser(Request $request){
    $Credential=$request->only('email','nombre');
    // Auth::attempt(['email' => $email, 'password' => $password]);
    if(Auth::attempt($Credential)){
    return "exist tose";
        // return $request->all();
        // return $Credential;
    }
    else{
        return "fallo";
    }
    }

    function loginGoogle(){ 
return Socialite::driver('google')->redirect();

    }   
    function callback(){
        // $user= Socialite::driver('google')->stateless()->user();
    try {
        $google_user= Socialite::driver('google')->user();
        $user=User::where('email',$google_user->email)->first(); //entrega un true o false
session(['name'=>$google_user->name]);
session(['avatar'=>$google_user->avatar]);
session(['email'=>$google_user->email]);
session(['rol'=>'0']);
   if ($user) {
   Auth::login($user);
   $userId=User::where('name',session()->get('name'))->where('email',session()->get('email'))->get();
   session(['userId'=>$userId[0]->id]);// [0] this para quitar el [ {json }] y solo vea { json} para poder acceder 

   return redirect()->route('vista.index');
        }else{
        $new_user=User::create([
         'name'=> $google_user->name,
         'email'=> $google_user->email,
         'rol'=> '0',
         'avatar'=> $google_user->avatar,
         'external_id'=> $google_user->id,
         'external_auth'=> 'google',
        ]);
          Auth::login($new_user);
          $userId=User::where('name',session()->get('name'))->where('email',session()->get('email'))->get();
          session(['userId'=>$userId[0]->id]);// [0] this para quitar el [ {json }] y solo vea { json} para poder acceder 
       return redirect()->route('vista.index');
                }
            } catch (\Throwable $th) {
                abort(404);
    }
}

function indexHome(){
    return redirect('vista.index');

       }
    
       function logout(){
           Auth::logout();
           session()->invalidate();
          session()->regenerateToken();
           return redirect('/');
       }

}

