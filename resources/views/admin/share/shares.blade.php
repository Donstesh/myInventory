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
            @if(!empty($successMsg))
              <div class="alert alert-success"> {{ $successMsg }}</div>
            @endif

            @if(!empty($errormsg))
              <div class="alert alert-danger"> {{ $errormsg }}</div>
            @endif
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
                          <th>Added By</th>
                          <th colspan = "2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shares as $share)
                            <tr class = "text-left">
                              <td>{{ $share->date_joined }}</td>
                              <td>{{ $share->name }}</td>
                              <td>{{ $share->detail }}</td>
                              <td>{{ $share->amount_contributed }}</td>
                              <td>{{ $share->id_no }}</td>
                              <td>{{ $share->phone_no }}</td>
                              <td>{{ $share->next_of_kin }}</td>
                              <td>{{ $share->mode_of_payment }}</td>
                              <td>{{ $share->by }}</td>
                              <td><a href="{{route('admin.share.edit',['id'=>$share->id])}}" class = "btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.share.destroy',['id'=>$share->id])}}" class = "btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>

        </div>
    </div>

</div>
@endsection