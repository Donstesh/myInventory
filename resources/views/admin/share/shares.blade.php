@extends('layouts.admin')

@section('content')
<br>
<br>
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Share Holders Report</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <a href="{{ url('admin/share/new') }}" class = "btn btn-success">Add New ShareHolder</a></h1>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                          <th>Date Joined</th>
                          <th>Name</th>
                          <th>Details</th>
                          <th>Shares Amount</th>
                          <th>ID No.</th>
                          <th>Phone No.</th>
                          <th>Next Of kin</th>
                          <th>Mode Of Payment</th>
                          <th colspan = "2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shares as $share)
                            <tr class = "text-center">
                              <td>{{ $share->date_joined }}</td>
                              <td>{{ $share->name }}</td>
                              <td>{{ $share->detail }}</td>
                              <td>{{ $share->amount_contributed }}</td>
                              <td>{{ $share->id_no }}</td>
                              <td>{{ $share->phone_no }}</td>
                              <td>{{ $share->next_of_kin }}</td>
                              <td>{{ $share->mode_of_payment }}</td>
                              <td><a href="{{route('admin.share.edit',['id'=>$share->id])}}" class = "btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.share.destroy',['id'=>$share->id])}}" class = "btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $shares->links() }}
            </div>

        </div>
    </div>

</div>
@endsection