<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        return view('Dasahboard.Customers.list');
    }

    public function add(){
        return view('Dasahboard.Customers.add');
    }

    public function store(Request $request){
        die;
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
