@extends('layouts.Dashboard.master')

@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Medicine Stock</h5>

              <form class="row g-3" method="POST" action="{{ route('update-purchases' , $record->id) }}">
                @csrf
                <div class="col-12">
                  <label for="supplier_id" class="form-label">Supplier</label>
                  <select class="form-control" name="supplier_id" id="supplier_id" required>
                    @foreach ($suppliers as $supplier)
                        <option {{ $record->supplier_id == $supplier->id ? 'selected' : '' }} value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-12">
                    <label for="invoice_id" class="form-label">Invoice</label>
                    <select class="form-control" name="invoice_id" id="invoice_id" required>
                      @foreach ($invoices as $invoice)
                          <option {{ $record->invoice_id == $invoice->id ? 'selected' : '' }} value="{{ $invoice->id }}">{{ $invoice->net_total }}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="col-12">
                  <label for="voucher_number" class="form-label">Voucher Number</label>
                  <input type="text" value="{{ $record->voucher_number }}" required name="voucher_number" class="form-control" id="voucher_number">
                </div>
                <div class="col-12">
                    <label for="purchase_date" class="form-label">Purchases Date</label>
                    <input type="date" required value="{{ $record->purchase_date }}" name="purchase_date" class="form-control" id="purchase_date">
                  </div>
                  <div class="col-12">
                    <label for="total_amount" class="form-label">Total Amount</label>
                    <input type="text" required name="total_amount" value="{{ $record->total_amount }}" class="form-control" id="total_amount">
                  </div>
                  <div class="col-12">
                    <label for="payment_status" class="form-label">Payment Status</label>
                    <select class="form-control" name="payment_status" id="payment_status">
                        <option {{ $record->payment_status == '1' ? 'selected' : '' }} value="1">Pending</option>
                        <option {{ $record->payment_status == '2' ? 'selected' : '' }} value="2">Accept</option>
                        <option {{ $record->payment_status == '3' ? 'selected' : '' }} value="3">Cancel</option>
                    </select>
                  </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection
