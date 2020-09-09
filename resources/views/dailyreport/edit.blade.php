@extends('layouts.user')

@section('content')
<br>
<br>
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New Daily Report</h1>
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
                <a href="{{ url('dailyreport/dailyreport') }}" class = "btn btn-danger">Report</a></h1>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
              <form method="POST" action="{{ url('updaterpt') }}" >
                  @csrf  
                  @method('POST')
                  <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" name = "date" id = "date" class="form-control" required value = "{{$drpts->date}}">
                  </div>
                  <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="text" name = "time" id = "time" class="form-control" required value = "{{$drpts->time}}">
                  </div>
                  <div class="form-group">
                    <label for="task">Task:</label>
                    <input type="text" name = "task" id = "task" class="form-control" required value = "{{$drpts->task}}">
                  </div>
                  <div class="form-group">
                    <label for="problem_encountered">Problem Encountered:</label>
                    <input type="text" name = "problem_encountered" id = "problem_encountered" class="form-control" required value = "{{$drpts->problem_encountered}}">
                  </div>
                  <div class="form-group">
                    <label for="report">Remarks:</label>
                    <input type="text" name = "report" id = "report" class="form-control" required value = "{{$drpts->report}}">
                  </div>
                  <input type="hidden" name="id" value = "{{$drpts->id}}">
                  <button type = "submit" class = "btn btn-success">Update</button>
                </form>
              </div>
            </div>
            <hr>

        </div>
    </div>

</div>
@endsection