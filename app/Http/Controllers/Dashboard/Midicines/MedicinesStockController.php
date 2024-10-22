<?php

namespace App\Http\Controllers\Dashboard\Midicines;

use App\Http\Controllers\Controller;
use App\Models\MedicinesStock\MedicinesStock;
use App\Models\Midicines\Medicine;
use Illuminate\Http\Request;

class MedicinesStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = MedicinesStock::orderBy('created_at' , 'desc')->paginate(10);

        return view('Dasahboard.MedicinesStock.list' , compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        $records = Medicine::get();

        return view('Dasahboard.MedicinesStock.add' , compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $saver = new MedicinesStock();
        $saver->medicines_id = $request->medicines_id;
        $saver->batch_id = $request->batch_id;
        $saver->expierd_at = $request->expierd_at;
        $saver->quantity = $request->quantity;
        $saver->mrp = $request->mrp;
        $saver->rate = $request->rate;
        $saver->save();

        return redirect()->route('medicines-stock')->with('success' , "Medicine stock successfully added!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $value = MedicinesStock::find($id);
        $records = Medicine::get();;

        return view('Dasahboard.MedicinesStock.edit' , compact(['value' , 'records']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $value = MedicinesStock::find($id);
        $value->medicines_id = $request->medicines_id;
        $value->batch_id = $request->batch_id;
        $value->expierd_at = $request->expierd_at;
        $value->quantity = $request->quantity;
        $value->mrp = $request->mrp;
        $value->rate = $request->rate;
        $value->save();

        return redirect()->route('medicines-stock')->with('success' , "Medicine stock successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        if(MedicinesStock::find($id) != null){
            MedicinesStock::find($id)->delete();
        }

        return redirect()->route('medicines-stock')->with('success' , 'Stock Successfully Deleted');
    }
}
