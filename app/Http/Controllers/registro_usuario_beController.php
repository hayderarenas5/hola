<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registro_usuario_beRequest;
use App\Models\User;

class registro_usuario_beController extends Controller
{
    //
    public function show(){
        return view ('index');
    }
    public function register(registro_usuario_beRequest $request){
        $user=User::create($request->validated()); 
    }
   
}
