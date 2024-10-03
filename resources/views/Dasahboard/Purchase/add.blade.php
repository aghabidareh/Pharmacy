@extends('layouts.Dashboard.master')

@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Medicine Stock</h5>

              <form class="row g-3" method="POST" action="{{ route('store-purchases') }}">
                @csrf
                <div class="col-12">
                  <label for="supplier_id" class="form-label">Supplier</label>
                  <select class="form-control" name="supplier_id" id="supplier_id" required>
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-12">
                    <label for="invoice_id" class="form-label">Invoice</label>
                    <select class="form-control" name="invoice_id" id="invoice_id" required>
                      @foreach ($invoices as $invoice)
                          <option value="{{ $invoice->id }}">{{ $invoice->net_total }}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="col-12">
                  <label for="voucher_number" class="form-label">Voucher Number</label>
                  <input type="text" required name="voucher_number" class="form-control" id="voucher_number">
                </div>
                <div class="col-12">
                    <label for="purchase_date" class="form-label">Purchases Date</label>
                    <input type="date" required name="purchase_date" class="form-control" id="purchase_date">
                  </div>
                  <div class="col-12">
                    <label for="total_amount" class="form-label">Total Amount</label>
                    <input type="text" required name="total_amount" class="form-control" id="total_amount">
                  </div>
                  <div class="col-12">
                    <label for="payment_status" class="form-label">Payment Status</label>
                    <select class="form-control" name="payment_status" id="payment_status">
                        <option value="1">Pending</option>
                        <option value="2">Accept</option>
                        <option value="3">Cancel</option>
                    </select>
                  </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
