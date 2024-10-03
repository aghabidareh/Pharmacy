<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Purchase::paginate(10);

        return view('Dasahboard.Purchase.list' , compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        $invoices = Invoice::get();
        $suppliers = Supplier::get();

        return view('Dasahboard.Purchase.add' , compact(['invoices' , 'suppliers']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $saver = new Purchase();
        $saver->supplier_id = $request->supplier_id;
        $saver->invoice_id = $request->invoice_id;
        $saver->voucher_number = $request->voucher_number;
        $saver->purchase_date = $request->purchase_date;
        $saver->total_amount = $request->total_amount;
        $saver->payment_status = $request->payment_status;
        $saver->save();

        return redirect()->route('purchases')->with('success' , 'Purchases Successfully Created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $record = Purchase::find($id);
        $invoices = Invoice::get();
        $suppliers = Supplier::get();

        return view('Dasahboard.Purchase.edit' , compact(['record' , 'invoices' , 'suppliers']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $purchase = Purchase::find($id);
        $purchase->supplier_id = $request->supplier_id;
        $purchase->invoice_id = $request->invoice_id;
        $purchase->voucher_number = $request->voucher_number;
        $purchase->purchase_date = $request->purchase_date;
        $purchase->total_amount = $request->total_amount;
        $purchase->payment_status = $request->payment_status;
        $purchase->save();

        return redirect()->route('purchases')->with('success' , 'Purchases Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Purchase::find($id)->delete();

        return redirect()->route('purchases')->with('success' , 'purchase successfully deleted!');
    }
}
