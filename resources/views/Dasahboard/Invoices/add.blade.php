@extends('layouts.Dashboard.master')

@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Invoice</h5>

              <form class="row g-3" method="POST" action="{{ route('store-invoices') }}">
                @csrf
                <div class="col-12">
                  <label for="net_total" class="form-label">Net Total</label>
                  <input type="text" required name="net_total" class="form-control" id="net_total">
                </div>
                <div class="col-12">
                  <label for="invoice_date" class="form-label">Invoice Date</label>
                  <input type="date" required name="invoice_date" class="form-control" id="invoice_date">
                </div>
                <div class="col-12">
                    <label for="customer_id" class="form-label">Customer</label>
                    <select class="form-control" name="customer_id" id="customer_id">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->email }}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="col-12">
                    <label for="total_amount" class="form-label">Total Amount</label>
                    <input type="text" required name="total_amount" class="form-control" id="total_amount">
                  </div>
                  <div class="col-12">
                    <label for="total_discount" class="form-label">Total Discount</label>
                    <input type="text" required name="total_discount" class="form-control" id="total_discount">
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
