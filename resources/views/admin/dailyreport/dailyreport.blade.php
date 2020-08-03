@extends('layouts.admin')

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
            <div class="row">
                <div class="col-lg-12">
                <a href="{{ url('admin/dailyreport/new') }}" class = "btn btn-success">Add New Report</a></h1>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                          <th>Report ID</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Task</th>
                          <th>Problem Encountered.</th>
                          <th>Remarks.</th>
                          <th colspan = "2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($drpts as $drpt)
                            <tr class = "text-center">
                              <td>{{ $drpt->id }}</td>
                              <td>{{ $drpt->date }}</td>
                              <td>{{ $drpt->time }}</td>
                              <td>{{ $drpt->task }}</td>
                              <td>{{ $drpt->problem_encountered }}</td>
                              <td>{{ $drpt->report }}</td>
                              <td><a href="{{route('admin.admins.edit',['id'=>$drpt->id])}}" class = "btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.admins.destroy',['id'=>$drpt->id])}}" class = "btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $drpts->links() }}
            </div>

        </div>
    </div>

</div>
@endsection