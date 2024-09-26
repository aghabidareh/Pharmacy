<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        return view("Auth.login");
    }

    public function register(){
        return view("Auth.register");
    }

    public function registrate(Request $request){
        die;
    }
}
