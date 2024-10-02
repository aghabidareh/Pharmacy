<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Supplier::paginate(10);

        return view('Dasahboard.index' , compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
            return view('Dasahboard.Suppliers.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $saver = new Supplier();
        $saver->supplier_name = $request->supplier_name;
        $saver->supplier_email = $request->supplier_email;
        $saver->supplier_number = $request->supplier_number;
        $saver->address = $request->address;
        $saver->save();

        return redirect()->route('suppliers')->with('success' , "supplier successfully created!");
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $record = Supplier::find($id);

        return view('Dasahboard.Suppliers.edit' , compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $saver = Supplier::find($id);
        $saver->supplier_name = $request->supplier_name;
        $saver->supplier_email = $request->supplier_email;
        $saver->supplier_number = $request->supplier_number;
        $saver->address = $request->address;
        $saver->save();

        return redirect()->route('suppliers')->with('success' , "supplier successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Supplier::find($id)->delete();
        return redirect()->route('suppliers')->with('success' , "supplier successfully deleted!");
    }
}
