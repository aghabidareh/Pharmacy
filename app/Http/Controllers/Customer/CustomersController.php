<?php

namespace App\Http\Controllers\Customer;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    public function index(){
        $records = User::where('is_admin' , '=' , 0)->orderBy("created_at","desc")->paginate(10);

        return view('Dasahboard.Customers.list' , compact('records'));
    }

    public function add(){
        return view('Dasahboard.Customers.add');
    }

    public function store(Request $request){
        $saver = request()->validate([
            'email'=>'required|email|unique:users,email',
            'password'=> 'min:4|required',
        ]);

        $saver = new User();
        $saver->email = $request->email;
        $saver->password = Hash::make($request->password);
        $saver->save();

        return redirect()->route('customers')->with('success','Customer SuccessFully Created!');
    }

    public function edit($id){
        return view('Dasahboard.Customers.edit');
    }

    public function update(Request $request, $id){
        die;
    }

    public function delete($id){
        die;
    }
}
