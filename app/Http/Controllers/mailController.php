<?php

namespace App\Http\Controllers;

use App\Mail\recuperacionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use PHPUnit\Util\Test;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Contracts\Mail\Mailable;
//  Found 'App\Mail\TestMail'.
class mailController extends Controller
{
    function recuperarPassword(Request $request){
    // $userToken=new User();
    // $userToken->
        $gmail=$request->input('email');
    // return $request->all();

    Mail::to($gmail)->send(new recuperacionMail);
    return response()->json(['msg'=>'ok enviado','code'=>201],201);
}

function restablecerPasswordUser(Request $request){
// $a=3;
$userPass=User::find(1);

    // $userPass=User::find(1);
    $userPass->password=bcrypt(13);
$userPass->save();
    // return $userPass;
    return $request->all();
}
function restablecerPasswordView(Request $request){

    return view('Restablecer.restablecerPasssword');
}
function envio(){
    // foreach (['cleyutp@gmail.com'] as $key) {
    //     Mail::to($key)->send(new )
    // }
    $email=[
        'title'=>'correo',
        'body'=>'hola '
    ];
    // Mail::to("josehtmljs@gmail.com")->send(new TestMail($email));
    Mail::to("SideralLujanCarrionBeba@gmail.com")->send(new recuperacionMail);
    return "enviado";
    // Mail::to("SideralLujanCarrionBeba@gmail.com")->send(new va el cuerto del gmail );

    // Mail::to("josehtmljs@gmail.com")->send(new recuperacionMail);
}
}
