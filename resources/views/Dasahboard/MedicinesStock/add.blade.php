@extends('layouts.Dashboard.master')

@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Medicine Stock</h5>

              <form class="row g-3" method="POST" action="{{ route('store-medicine-stock') }}">
                @csrf
                <div class="col-12">
                  <label for="medicines_id" class="form-label">Medicine Name</label>
                  <select class="form-control" name="medicines_id" id="medicines_id" required>
                    @foreach ($records as $record)
                        <option value="{{ $record->id }}">{{ $record->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-12">
                  <label for="batch_id" class="form-label">Batch Id</label>
                  <input type="text" required name="batch_id" class="form-control" id="batch_id">
                </div>
                <div class="col-12">
                    <label for="expierd_at" class="form-label">Expierd At</label>
                    <input type="date" required name="expierd_at" class="form-control" id="expierd_at">
                  </div>
                  <div class="col-12">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="text" required name="quantity" class="form-control" id="quantity">
                  </div>
                  <div class="col-12">
                    <label for="mrp" class="form-label">MRP</label>
                    <input type="text" required name="mrp" class="form-control" id="mrp">
                  </div>
                  <div class="col-12">
                    <label for="rate" class="form-label">Rate</label>
                    <input type="text" required name="rate" class="form-control" id="rate">
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
