@extends('layouts.Dashboard.master')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Medicine Stock List</h1>
    </div>

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title float-left"><a href="{{ route('add-medicine-stock') }}" class="btn btn-primary">Add New Medicine Stock</a></h5>

                <!-- Dark Table -->

                @include('layouts.messages')

                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Medicine Name</th>
                        <th scope="col">Batch Id</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">MRP</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Expierd At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($records as $record)
                        <tr>
                          <td>{{ $record->id }}</td>
                          <td>{{ $record->getMenicinesName->name }}</td>
                          <td>{{ $record->batch_id }}</td>
                          <td>{{ $record->quantity }}</td>
                          <td>{{ $record->mrp }}</td>
                          <td>{{ $record->rate }}</td>
                          <td>{{ $record->expierd_at }}</td>
                          <td>
                              <a href="{{ route('edit-medicine-stock' , $record->id)}}" class="btn btn-warning btn-sm">Edit</a>
                              <a onclick="return confirm('are your to delete this Item?')" href="{{ route('delete-medicine-stock' , $record->id)}}" class="btn btn-danger btn-sm">Delete</a>
                          </td>
                        </tr>
                        @endforeach
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
