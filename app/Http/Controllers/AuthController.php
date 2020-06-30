<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function welcome(){
       return "halo";
    }

    public function welcome_post(Request $request){
        $awal = $request['firstname'];
        $akhir = $request['lastname'];
        return view('welcome', ["firstname" => $awal, "lastname" => $akhir]);
    }
}
