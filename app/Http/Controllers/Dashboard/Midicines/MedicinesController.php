<?php

namespace App\Http\Controllers\Dashboard\Midicines;

use App\Http\Controllers\Controller;
use App\Models\Midicines\Medicine;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    public function index(){
        $records = Medicine::orderBy("created_at","desc")->paginate(perPage: 10);

        return view("Dasahboard.Medicines.list" , compact("records"));
    }
    public function add(){
        return view("Dasahboard.Medicines.add");
    }
    public function store(Request $request){
        $saver = new Medicine();
        $saver->name = $request->name;
        $saver->packing = $request->packing;
        $saver->generic_name = $request->generic_name;
        $saver->supplier_name = $request->supplier_name;
        $saver->save();

        return redirect()->route("medicines")->with("success","Medicine sussfully created");
    }
    public function edit($id){
        $record = Medicine::find($id);

        return view("Dasahboard.Medicines.edit", compact("record"));
    }
    public function update(Request $request, $id){
        $saver = Medicine::find($id);
        if(!empty($request->name)){
            $saver->name = $request->name;
        }
        if(!empty($request->packing)){
        $saver->packing = $request->packing;
        }
        if(!empty($request->generic_name)){
        $saver->generic_name = $request->generic_name;
        }
        if(!empty($request->supplier_name)){
        $saver->supplier_name = $request->supplier_name;
        }
        $saver->save();

        return redirect()->route("medicines")->with("success","Medicine sussfully updated");
    }
    public function delete($id){
        Medicine::find($id)->delete();

        return redirect()->route("medicines")->with("success","Medicine successfully deleted!");
    }
}
