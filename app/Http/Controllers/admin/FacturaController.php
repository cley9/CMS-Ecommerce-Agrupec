<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// ------------
use GuzzleHttp\Client;
//
// para consumir el api se crea el cliente
use Illuminate\Support\Facades\Http;

class FacturaController extends Controller
{
    //
    function view(){
        return view('Admin.Factura.factura');
    }

    function search($rut){
        // http espara crear el cliente a consumir el api
        // $user=HTTP::get('https://jsonplaceholder.typicode.com/posts/');
        // $url='https://api.apis.net.pe/v1/ruc?numero=10066672366';
        // $url='https://api.apis.net.pe/v1/ruc?numero=20604430918';
        $url='https://api.apis.net.pe/v1/ruc?numero='.$rut.'';
        $user=HTTP::get($url);
        $userArray=$user->json();
        return $userArray;
        //   return view('cliente',compact('userArray'));

        //   $number=20604430918;
        // // return 12;
        // $token = '';

        // $client = new Client(['base_uri' => 'https://api.apis.net.pe', 'verify' => false]);

        // $parameters = [
        //     'http_errors' => false,
        //     'connect_timeout' => 5,
        //     'headers' => [
        //         'Authorization' => 'Bearer '.$token,
        //         'Referer' => 'https://apis.net.pe/api-consulta-ruc',
        //         'User-Agent' => 'laravel/guzzle',
        //         'Accept' => 'application/json',
        //     ],
        //     'query' => ['numero' => $number]
        // ];
        // $res = $client->request('GET', '/v1/ruc', $parameters);
        // $response = json_decode($res->getBody()->getContents(), true);
        // var_dump($response);


        // -------------------------------
        // http::form();
        // return
        // return view('Admin.Factura.factura');


    //


    // $user=$client->post($link,
    // [
    //     'form_params' => [
    //         'nombre'=>$request->input('Pnombre'),
    //         'precio'=>$request->input('Pprecio'),
    //         // 'imagen'=>$request->file('imagen'),

    //         'imagen'=>$nombreimagen,

    //             // $ruta = public_path("img/post/");

    //         //'imagen'=>
    //         /*'nested_field' => [
    //             'imagen'.'name'=>$request->file('imagen')->getClientOriginalName(),
    //             'imagen'.'tmp_name'=>$request->file('imagen')->getPathName(),
    //             'imagen'.'size'=>$request->file('imagen'),

    //         ],*/
    //         // 'imagen'=>$blob,
    //         // $request->file('imagen')->time(),
    //         // 'imagen'=>[
    //             // 'name'=>$request->file('imagen')->getClientOriginalName(),
    //             // 'tmp_name'=>$request->file('imagen')->getPathName(),
    //         //     'size'=> getimagesize($request->file('imagen')),
    //         // ],
    //     //   'imagen'=>$photo->getClientOriginalName(),

    //       // 'imagen'=>'idddj imag',
    //         'cantidad'=>$request->input('Pcant'),
    //         'newPrecio'=>$request->input('PnewPre'),
    //         'descripccion'=>$request->input('Pdescrip'),
    //         'peso'=>$request->input('Ppeso')

    //         ]
    // ]);




    // }



    //


//     // --------------- this is update del id
// $link='http://localhost/xampp/Api%20Create%202022/api%20Asincrono/Api_Agrupec_original.php?id='.$request->id.'&nombre='.$request->nombre.'&precio='.$request->precio.'';
// $user=Http::put($link);
// return " ".$request->input('nombre')."
//          ".$request->precio." ".$request->id;



}}
