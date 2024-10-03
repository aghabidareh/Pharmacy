@extends('layouts.Dashboard.master')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Purchases List</h1>
    </div>

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title float-left"><a href="{{ route('add-purchases') }}" class="btn btn-primary">Add New Purchases</a></h5>

                <!-- Dark Table -->

                @include('layouts.messages')

                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Supplier</th>
                        <th scope="col">Invoice</th>
                        <th scope="col">Voucher Number</th>
                        <th scope="col">Purchase Date</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($records as $record)
                        <tr>
                          <td>{{ $record->id }}</td>
                          <td>{{ $record->getSuppliersName->supplier_name }}</td>
                          <td>{{ $record->getInvoicesName->net_total }}</td>
                          <td>{{ $record->voucher_number }}</td>
                          <td>{{ $record->purchase_date }}</td>
                          <td>{{ $record->total_amount }}</td>
                          <td>@if ($record->payment_status == '1')
                            Pending
                            @elseif ($record->payment_status == '2')
                            Accept
                            @elseif ($record->payment_status == '3')
                            Cancel
                            @else
                            Unknown
                          @endif</td>
                          <td>{{ $record->created_at }}</td>
                          <td>
                              <a href="{{ route('edit-purchases' , $record->id)}}" class="btn btn-warning btn-sm">Edit</a>
                              <a onclick="return confirm('are your to delete this Item?')" href="{{ route('delete-purchases' , $record->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
