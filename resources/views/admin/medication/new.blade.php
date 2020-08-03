@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create New User</h1>
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
                <a href="{{ url('admin/medication/medication') }}" class = "btn btn-info">Report</a></h1>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
                <form action="{{ action('Admin\MedicationController@store') }}" method = "post">
                  @csrf  
                  @method('POST')
                  <div class="form-group">
                    <label for='date'>Date:</label>
                    <input type="date" name = "date" id = "date" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="vaccine">Vaccine:</label>
                    <input type="text" name = "vaccine" id = "vaccine" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="mode_of_adminstration">Mode Of Administration:</label>
                    <input type="text" name = "mode_of_adminstration" id = "mode_of_adminstration" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="period">Period:</label>
                    <input type="text" name = "period" id = "period" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="remarks">Remarks:</label>
                    <input type="text" name = "remarks" id = "remarks" class="form-control" required>
                  </div>
                  <button type = "submit" class = "btn btn-success">Save</button>
                </form>
              </div>
            </div>
            <hr>
        </div>
    </div>

</div>
@endsection