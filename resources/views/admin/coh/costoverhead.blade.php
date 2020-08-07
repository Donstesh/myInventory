@extends('layouts.admin')

@section('content')
<br>
<br>
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cost OverHead</h1>
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
                <a href="{{ url('admin/coh/new') }}" class = "btn btn-success">New CostOverhead</a></h1>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                          <th>Date</th>
                          <th>Service</th>
                          <th>Category</th>
                          <th>Amount Spent.</th>
                          <th>Status</th>
                          <th>Added By</th>
                          <th colspan = "2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cohs as $coh)
                            <tr class = "text-center">
                              <td>{{ $coh->date }}</td>
                              <td>{{ $coh->service }}</td>
                              <td>{{ $coh->category }}</td>
                              <td>{{ $coh->amount }}</td>
                              <td>{{ $coh->status }}</td>
                              <td>{{ $coh->by }}</td>
                              <td><a href="{{route('admin.coh.edit',['id'=>$coh->id])}}" class = "btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.coh.destroy',['id'=>$coh->id])}}" class = "btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $cohs->render() }}
            </div>

        </div>
    </div>

</div>
@endsection