<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

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
        $saver->password = Crypt::make($request->password);
        $saver->save();

        return redirect()->route('login')->with('success','Your New Account SuccessFully Created!.');
    }

    public function check(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if(Auth::user()->is_admin == 1){
                return redirect()->route('dashboard')->with('success','log in sussfully');
            }else{
                return redirect()->route('home')->with('success','welcome home');
            }
        }else{
            return redirect()->route('login')->with('success','password or email is wrong');
        }
    }
}
