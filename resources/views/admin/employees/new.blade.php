@extends('layouts.admin')

@section('content')
<br>
<br>
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
                <a href="{{ url('admin/employees/employee') }}" class = "btn btn-danger">Report</a></h1>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
                <form action="{{ url('admin/employees/employee') }}" method = "post">
                  @csrf  
                  @method('POST')
                  <div class="form-group">
                    <label for='p_photo'>Name:</label>
                    <input type="file" name = "p_photo" id = "p_photo" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for='name'>Name:</label>
                    <input type="text" name = "name" id = "name" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name = "email" id = "email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name = "password" id = "taskpassword" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="id_no">ID No:</label>
                    <input type="number" name = "id_no" id = "id_no" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for='designation'>Designtion:</label>
                    <input type="text" name = "designation" id = "designation" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for='salary'>Salary:</label>
                    <input type="number" name = "salary" id = "salary" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="additional_info">Additional Info:</label>
                    <input type="text" name = "additional_info" id = "additional_info" class="form-control" required>
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