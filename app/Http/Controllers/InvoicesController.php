<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Invoice::paginate(10);

        return view('Dasahboard.Invoices.list' , compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        $customers = User::get();

        return view('Dasahboard.Invoices.add' , compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $saver = new Invoice();
        $saver->net_total = $request->net_total;
        $saver->invoice_date = $request->invoice_date;
        $saver->customer_id = $request->customer_id;
        $saver->total_amount = $request->total_amount;
        $saver->total_discount = $request->total_discount;
        $saver->save();

        return redirect()->route('invoices')->with('success' , 'Invoice SuccessFully Created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $record = Invoice::find($id);
        $customers = User::get();

        return view('Dasahboard.Invoices.edit' , compact(['record' , 'customers']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $saver = Invoice::find($id);
        $saver->net_total = $request->net_total;
        $saver->invoice_date = $request->invoice_date;
        $saver->customer_id = $request->customer_id;
        $saver->total_amount = $request->total_amount;
        $saver->total_discount = $request->total_discount;
        $saver->save();

        return redirect()->route('invoices')->with('success' , 'Invoice SuccessFully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Invoice::find($id)->delete();
        return redirect()->route('invoices')->with('success' , 'Invoice successfully deleted');
    }
}
