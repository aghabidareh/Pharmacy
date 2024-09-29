<?php

namespace App\Http\Controllers\Dashboard\Midicines;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    public function index(){
        return view("Dasahboard.Medicines.list");
    }
    public function add(){
        return view("Dasahboard.Medicines.add");
    }
    public function store(Request $request){
        die;
    }
    public function edit($id){
        die;
    }
    public function update(Request $request, $id){
        die;
    }
    public function delete($id){
        die;
    }
}
