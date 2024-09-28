<?php

namespace App\Http\Controllers\Dashboard\Customer;

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
        $user = User::find($id);

        return view('Dasahboard.Customers.edit' , compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        if(!empty($request->email)){
            $user->email = $request->email;
        }
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('customers')->with('success','Customer SuccessFully updated!.');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('customers')->with('success','Customer SuccessFully Deleted!.');
    }
}
