<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfocorpController extends Controller
{
    //
    function main(){
        return view('Admin.Infocorp.infocorp');

    }

    // function SearchInfocorp(){
    //     return view('Admin.Infocorp.infocorp');
    // }

    function searchDni($infocorp){
        $url='https://api.apis.net.pe/v1/dni?numero='.$infocorp.'';
  $getRequet=Http::get($url);
        return $getRequet;
    }
}
