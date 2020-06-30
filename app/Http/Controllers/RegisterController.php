<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('form');
    }

    public function form_post(Request $request){
        // dd($request["nama"]);
        return 'halo';
    }

    public function sapa_post(Request $request){
        // dd($request->all());
        $nama = $request["nama"];
        return $nama;
    }
}
