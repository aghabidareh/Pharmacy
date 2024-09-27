@extends('layouts.Dashboard.master')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Customers List</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title float-left"><a href="{{ route('add-customer') }}" class="btn btn-primary">Add New Customer</a></h5>

              <!-- Dark Table -->
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                    <td>
                        <a href="{{ route('edit-customer' , 1)}}" class="btn btn-warning btn-sm">Edit</a>
                        <a onclick="return confirm('are your to delete this user?')" href="{{ route('delete-customer' , 1)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Dark Table -->

            </div>
          </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection
