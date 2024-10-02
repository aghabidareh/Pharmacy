@extends('layouts.Dashboard.master')

@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Supplier</h5>

              <form class="row g-3" method="POST" action="{{ route('store-suppliers') }}">
                @csrf
                <div class="col-12">
                  <label for="supplier_name" class="form-label">Supplier Name</label>
                    <input type="text" required name="supplier_name" class="form-control" required id="supplier_name">
                </div>
                <div class="col-12">
                    <label for="supplier_email" class="form-label">Supplier Email</label>
                    <input type="text" required name="supplier_email" class="form-control" id="supplier_email">
                  </div>
                  <div class="col-12">
                    <label for="supplier_number" class="form-label">Supplier Number</label>
                    <input type="text" required name="supplier_number" class="form-control" id="supplier_number">
                  </div>
                  <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" required name="address" class="form-control" id="address">
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
