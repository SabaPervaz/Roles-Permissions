<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

   public function redirect(){

    if(isUserAdmin()){
        return view('dashboard');

    }

    if(isUserWriter()){

        return view('welcome');
    }


   }
}
