@extends('layouts.Dashboard.master')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Medicines List</h1>
    </div>

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title float-left"><a href="{{ route('add-medicine') }}" class="btn btn-primary">Add New Medicines</a></h5>

                <!-- Dark Table -->

                @include('layouts.messages')

                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Packing</th>
                      <th scope="col">Generic Name</th>
                      <th scope="col">Supplier Name</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Packing</td>
                        <td>Generic Name</td>
                        <td>Supplier Name</td>
                        <td>Created At</td>
                        <td>
                            <a href="{{ route('edit-medicine' , 1)}}" class="btn btn-warning btn-sm">Edit</a>
                            <a onclick="return confirm('are your to delete this Item?')" href="{{ route('delete-medicine' , 1)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                  </tbody>
                </table>

                <div class="card-footer clearfix">
                  <ul class="pagination pagination-md m-0 float-right">
                    {!! $records->appends(Request::except('page'))->links() !!}
                  </ul>
                </div>

              </div>
            </div>
        </div>
      </section>

</main>


@endsection
