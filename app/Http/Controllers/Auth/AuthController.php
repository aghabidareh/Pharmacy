<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        return view("Auth.login");
    }

    public function register(){
        return view("Auth.register");
    }

    public function registrate(Request $request){

        $saver = request()->validate([
            "email"=> "email|unique:users,email|required",
            "password"=> "min:4|required",
        ]);

        $saver = new User();
        $saver->email = $request->email;
        $saver->password = Hash::make($request->password);
        $saver->save();

        return redirect()->route('login')->with('success','Your New Account SuccessFully Created!.');
    }
}
