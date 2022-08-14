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
use Illuminate\Support\Facades\Mail;

// use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
function loginAdmin($email,$password){
  $credencials=[
      'email'=>$email,
      'password'=>$password
    ];
    if (Auth::attempt($credencials)) {
        session(['email'=>$email]);
        session(['rol'=>'4']);
        // return view('admin.home');
        return response()->json(['status'=>'ok', 'code'=>'200']);
    }else{
        return response()->json(['status'=>'error', 'code'=>'404']);
      }
}

function loginLocalUser($email,$password){
    $credencials=[
        'email'=>$email,
        'password'=>$password
    ];
    if (Auth::attempt($credencials)) {
        // session(['name'=>'Usuario']);
        session(['email'=>$email]);
        session(['rol'=>'0']);
        $userId=User::where('email',session()->get('email'))->where('email',session()->get('email'))->get();
        session(['avatar'=>$userId[0]->avatar]);
        session(['userId'=>$userId[0]->id]);
        session(['name'=>$userId[0]->name]);

        return response()->json(['status'=>'ok', 'code'=>'200', 'data'=>$userId]);
    }else{
        return response()->json(['status'=>'error', 'code'=>'404']);
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
// session(['rol'=>'0']);
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
          $userId=User::where('external_id',$google_user->id)->where('email',session()->get('email'))->get();
        //   $userId=User::where('name',session()->get('name'))->where('email',session()->get('email'))->get();
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
// validate user email
function validarUser($emailExists){
    // $userConsutal=User::where('email','cleyD@gmail.com')->exists();
    $userConsutal=User::where('email',$emailExists)->exists();
    // $userConsutal=User::where('email','===',$request->input('email'))->get();
    if ($userConsutal )  {
        # code...
        // return "user exist";
        return "true";
    }else{
        // return "user no exit";
        return "false";
        // http://127.0.0.1:8000/createUser
    }
// return $emailExists;
}
    //    function create--user
    function createUser(Request $request){
    $user=new User();
    if($request->input('pass1')=== $request->input('pass2')){
        $user->name=$request->input('nombre');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('pass1'));
        $user->rol = '0';
        $user->avatar ='http://127.0.0.1:8000/storage/img/icons/userLogin.png';
        $user->external_auth= 'local';
        $user->save();
        // return $user;
        // return view('home');
        return redirect()->route('vista.index');
    }
    // return
    //  return $request->all();
    return 'no se pudo ';

        // return $userConsutal;
}
// user autentication
// function listObjt(){
//     return "cms";
// while(){

// }
// }
//   'rol'=>$request->input('userR')
// 'name'=>$request->input('nombre'),

// function envio(){
//     foreach (['cleyutp@gmail.com'] as $key) {
//         Mail::to($key)->send(new )
//     }
// }
}

