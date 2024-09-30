@extends('layouts.Dashboard.master')

@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Medicine</h5>

              <form class="row g-3" method="POST" action="{{ route('update-medicine' , 1) }}">
                @csrf
                <div class="col-12">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" value="{{ $record->name }}" class="form-control" id="name">
                </div>
                <div class="col-12">
                  <label for="packing" class="form-label">Packing</label>
                  <input type="text" value="{{ $record->packing }}" name="packing" class="form-control" id="packing">
                </div>
                <div class="col-12">
                    <label for="generic_name" class="form-label">Generic Name</label>
                    <input type="text" value="{{ $record->generic_name }}" name="generic_name" class="form-control" id="generic_name">
                  </div>
                  <div class="col-12">
                    <label for="supplier_name" class="form-label">Supplier Name</label>
                    <input type="text" value="{{ $record->supplier_name }}" name="supplier_name" class="form-control" id="supplier_name">
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
