@extends('layouts.user')

@section('content')
<br>
<br>
<!-- Page Content -->
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daily Reports</h1>
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
                <a href="{{ url('dailyreport/new') }}" class = "btn btn-success">Add New Report</a></h1>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Task</th>
                          <th>Problem Encountered.</th>
                          <th>Remarks.</th>
                          <th>Added By</th>
                          <th colspan = "2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($drpts as $drpt)
                            <tr class = "text-left">
                              <td>{{ $drpt->date }}</td>
                              <td>{{ $drpt->time }}</td>
                              <td>{{ $drpt->task }}</td>
                              <td>{{ $drpt->problem_encountered }}</td>
                              <td>{{ $drpt->report }}</td>
                              <td>{{ $drpt->by }}</td>
                              <td><a href="{{route('dailyreport.edit',['id'=>$drpt->id])}}" class = "btn btn-info">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>

        </div>
    </div>

</div>
@endsection